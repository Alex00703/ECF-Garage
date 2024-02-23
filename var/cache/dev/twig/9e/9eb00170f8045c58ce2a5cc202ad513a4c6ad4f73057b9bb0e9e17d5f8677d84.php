<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/catalogue_details.html.twig */
class __TwigTemplate_2ef8c0d11db2d71fe39ec849416dec20255d34ede64073e332469fa8f142ca2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/catalogue_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/catalogue_details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/catalogue_details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogue";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

            <div class=\"car-sale-details\">
                <div style=\"display: flex; flex-direction:row;\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/cars/" . twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 10, $this->source); })()), "getImage", [], "any", false, false, false, 10))), "html", null, true);
        echo "\" alt=\"car\" class=\"car-img-details\">
                    <div class=\"car-description\">
                        <p class=\"car-title-details\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 12, $this->source); })()), "getName", [], "method", false, false, false, 12), "html", null, true);
        echo "</p>
                        <p class=\"car-price-details\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 13, $this->source); })()), "getPrice", [], "method", false, false, false, 13), "html", null, true);
        echo "€</p>
                        <p class=\"car-year-details\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 14, $this->source); })()), "getYear", [], "method", false, false, false, 14), "html", null, true);
        echo "</p>
                        <p class=\"car-km-details\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 15, $this->source); })()), "getKilometers", [], "method", false, false, false, 15), "html", null, true);
        echo " kilomètres</p>
                    </div>
                </div>
                <p class=\"car-desc\">Description:</p>
                <div style=\"margin-left:35px;\">
                    <p class=\"car-desc\">";
        // line 20
        echo twig_get_attribute($this->env, $this->source, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 20, $this->source); })()), "getDescription", [], "method", false, false, false, 20);
        echo "</p>
                </div>
            </div>

            <div id=\"contact-us\">
                <h1>Nous contacter</h1>

                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["id" => "contact-form"]]);
        echo "

                    <p class=\"contact-label\">Nom</p>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "full_name", [], "any", false, false, false, 30), 'widget');
        echo "
                    <p class=\"contact-label\">Email</p>
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget');
        echo "
                    <p class=\"contact-label\">Téléphone</p>
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "phone", [], "any", false, false, false, 34), 'widget');
        echo "
                    <p class=\"contact-label\">Sujet</p>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "subject", [], "any", false, false, false, 36), 'widget');
        echo "
                    <p class=\"contact-label\">Message</p>
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "message", [], "any", false, false, false, 38), 'widget');
        echo "

                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'widget');
        echo "

                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
            </div>
            
    <div id=\"horaires2\">
        <h1>Horaires</h1>
        ";
        // line 47
        if (((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 47, $this->source); })()) != null)) {
            // line 48
            echo "            <div id=\"horaires2-container\">
                <p>Lundi: ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 49, $this->source); })()), "getLundi", [], "method", false, false, false, 49), "html", null, true);
            echo "</p>
                <p>Mardi: ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 50, $this->source); })()), "getMardi", [], "method", false, false, false, 50), "html", null, true);
            echo "</p>
                <p>Mercredi: ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 51, $this->source); })()), "getMercredi", [], "method", false, false, false, 51), "html", null, true);
            echo "</p>
                <p>Jeudi: ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 52, $this->source); })()), "getJeudi", [], "method", false, false, false, 52), "html", null, true);
            echo "</p>
                <p>Vendredi: ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 53, $this->source); })()), "getVendredi", [], "method", false, false, false, 53), "html", null, true);
            echo "</p>
                <p>Samedi: ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 54, $this->source); })()), "getSamedi", [], "method", false, false, false, 54), "html", null, true);
            echo "</p>
                <p>Dimanche: ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 55, $this->source); })()), "getDimanche", [], "method", false, false, false, 55), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 58
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/catalogue_details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  221 => 62,  209 => 58,  203 => 55,  199 => 54,  195 => 53,  191 => 52,  187 => 51,  183 => 50,  179 => 49,  176 => 48,  174 => 47,  166 => 42,  161 => 40,  156 => 38,  151 => 36,  146 => 34,  141 => 32,  136 => 30,  130 => 27,  120 => 20,  112 => 15,  108 => 14,  104 => 13,  100 => 12,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catalogue{% endblock %}

{% block body %}


            <div class=\"car-sale-details\">
                <div style=\"display: flex; flex-direction:row;\">
                    <img src=\"{{ asset('assets/img/cars/' ~ car.getImage) }}\" alt=\"car\" class=\"car-img-details\">
                    <div class=\"car-description\">
                        <p class=\"car-title-details\">{{ car.getName() }}</p>
                        <p class=\"car-price-details\">{{ car.getPrice() }}€</p>
                        <p class=\"car-year-details\">{{ car.getYear() }}</p>
                        <p class=\"car-km-details\">{{ car.getKilometers() }} kilomètres</p>
                    </div>
                </div>
                <p class=\"car-desc\">Description:</p>
                <div style=\"margin-left:35px;\">
                    <p class=\"car-desc\">{{ car.getDescription()|raw }}</p>
                </div>
            </div>

            <div id=\"contact-us\">
                <h1>Nous contacter</h1>

                {{ form_start(form, { 'attr' : { 'id': 'contact-form' } }) }}

                    <p class=\"contact-label\">Nom</p>
                    {{ form_widget(form.full_name) }}
                    <p class=\"contact-label\">Email</p>
                    {{ form_widget(form.email) }}
                    <p class=\"contact-label\">Téléphone</p>
                    {{ form_widget(form.phone) }}
                    <p class=\"contact-label\">Sujet</p>
                    {{ form_widget(form.subject) }}
                    <p class=\"contact-label\">Message</p>
                    {{ form_widget(form.message) }}

                    {{ form_widget(form) }}

                {{ form_end(form) }}
            </div>
            
    <div id=\"horaires2\">
        <h1>Horaires</h1>
        {% if schedules != null %}
            <div id=\"horaires2-container\">
                <p>Lundi: {{ schedules.getLundi() }}</p>
                <p>Mardi: {{ schedules.getMardi() }}</p>
                <p>Mercredi: {{ schedules.getMercredi() }}</p>
                <p>Jeudi: {{ schedules.getJeudi() }}</p>
                <p>Vendredi: {{ schedules.getVendredi() }}</p>
                <p>Samedi: {{ schedules.getSamedi() }}</p>
                <p>Dimanche: {{ schedules.getDimanche() }}</p>
            </div>
        {% endif %}
    </div>

{% endblock %}

{% block javascripts %}<script src=\"{{ asset('assets/js/main.js') }}\"></script>{% endblock %}
", "home/catalogue_details.html.twig", "D:\\Développement\\Web\\garage\\templates\\home\\catalogue_details.html.twig");
    }
}
