<?php

namespace App\Controller\Admin;

use App\Entity\Car;
use App\Entity\User;
use App\Entity\Review;
use App\Entity\Message;
use App\Entity\Service;
use App\Entity\Schedules;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        if($this->getUser()->getRoles())
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<img src="assets/img/blackicon.png" style="width:25px; height:25px;"> Garage V. Parrot')
            ;
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Accueil', 'fa fa-home');
        yield MenuItem::linkToCrud('Employés', 'fas fa-list', User::class);
        yield MenuItem::linkToCrud('Services', 'fas fa-list', Service::class);
        yield MenuItem::linkToCrud('Avis', 'fas fa-list', Review::class);
        yield MenuItem::linkToCrud('Horaires', 'fas fa-list', Schedules::class);
        yield MenuItem::linkToCrud('Messages', 'fas fa-list', Message::class);
        yield MenuItem::linkToCrud('Voitures', 'fas fa-list', Car::class);


    }
}
