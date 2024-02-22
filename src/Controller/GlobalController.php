<?php

namespace App\Controller;

use App\Entity\Review;
use App\Entity\Message;
use App\Form\ReviewFormType;
use App\Form\ContactFormType;
use App\Repository\CarRepository;
use App\Repository\ReviewRepository;
use App\Repository\ServiceRepository;
use App\Repository\SchedulesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GlobalController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(ServiceRepository $serviceRepository, ReviewRepository $reviewRepository, SchedulesRepository $schedulesRepository): Response
    {
        $services = $serviceRepository->findAll();
        $reviews = $reviewRepository->findAllChecked($reviewRepository->findAll());
        $schedules = $schedulesRepository->findOneBy([], ['id' => 'ASC']);

        return $this->render('home/index.html.twig', [
            'services' => $services,
            'reviews' => $reviews,
            'schedules' => $schedules,
        ]);
    }

    #[Route('/review', name: 'app_review')]
    public function review(EntityManagerInterface $entityManager, Request $request): Response
    {
        $form = $this->createForm(ReviewFormType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $review = new Review();
            $review->setChecked(false);
            $review->setName($form->get('name')->getData());
            $review->setComment($form->get('comment')->getData());
            $review->setNote($form->get('note')->getData());
            $entityManager->persist($review);
            $entityManager->flush();
            return $this->redirectToRoute('app_index');
        }

        return $this->render('home/review.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/catalogue', name: 'app_catalogue')]
    public function catalogue(CarRepository $carRepository, SchedulesRepository $schedulesRepository): Response
    {
        $highestPrice = null;
        $lowestPrice = null;
        $highestYear = null;
        $lowestYear = null;
        $highestKilometers = null;
        $lowestKilometers = null;

        $cars = $carRepository->findAll();

        foreach ($cars as $car) {
            if ($highestPrice === null || $car->getPrice() > $highestPrice) {
                $highestPrice = $car->getPrice();
            }
            if ($lowestPrice === null || $car->getPrice() < $lowestPrice) {
                $lowestPrice = $car->getPrice();
            }
        
            if ($highestYear === null || $car->getYear() > $highestYear) {
                $highestYear = $car->getYear();
            }
            if ($lowestYear === null || $car->getYear() < $lowestYear) {
                $lowestYear = $car->getYear();
            }
        
            if ($highestKilometers === null || $car->getKilometers() > $highestKilometers) {
                $highestKilometers = $car->getKilometers();
            }
            if ($lowestKilometers === null || $car->getKilometers() < $lowestKilometers) {
                $lowestKilometers = $car->getKilometers();
            }
        }

        $schedules = $schedulesRepository->findOneBy([], ['id' => 'ASC']);

        return $this->render('home/catalogue.html.twig', [
            'cars' => $cars,
            'schedules' => $schedules,
            'highestPrice' => $highestPrice,
            'lowestPrice' => $lowestPrice,
            'highestYear' => $highestYear,
            'lowestYear' => $lowestYear,
            'highestKilometers' => $highestKilometers,
            'lowestKilometers' => $lowestKilometers,
        ]);
    }

    #[Route('/catalogue/{id}', name: 'app_catalogue_details')]
    public function catalogue_details(Request $request, CarRepository $carRepository, $id, EntityManagerInterface $entityManager, SchedulesRepository $schedulesRepository): Response
    {
        $car = $carRepository->find($id);
        $schedules = $schedulesRepository->findOneBy([], ['id' => 'ASC']);

        $form = $this->createForm(ContactFormType::class);
        $form->get('subject')->setData($car->getName());
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $message = new Message();
            $message->setEmail($form->get('email')->getData());
            $message->setPhone($form->get('phone')->getData());
            $message->setSubject($form->get('subject')->getData());
            $message->setMessage($form->get('message')->getData());
            $message->setFullName($form->get('full_name')->getData());

            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('app_index');

        }
        
        return $this->render('home/catalogue_details.html.twig', [
            'car' => $car,
            'schedules' => $schedules,
            'form' => $form->createView(),
        ]);
    }
}
