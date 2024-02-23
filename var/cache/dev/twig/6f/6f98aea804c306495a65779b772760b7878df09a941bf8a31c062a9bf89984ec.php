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

/* home/index.html.twig */
class __TwigTemplate_256101e0bc50aab7246bf88eaeea3bfcaaed882aed60117492f567c25b892d6e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil";
        
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
    <div id=\"header\">
        <div>
            <h1>Votre voiture, notre passion.</h1>
            <p>Découvrez notre garage où nous offrons des 
                                réparations automobiles de première classe 
                                pour assurer votre tranquillité d'esprit, ainsi 
                                qu'une sélection soigneusement choisie de
                                voitures d'occasion certifiées pour répondre à 
                                tous vos besoins de conduite.
            </p>
            <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue");
        echo "\" class=\"basic-btn\">CATALOGUE</a>
        </div>
        <div>
            <img id=\"car\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/car.png"), "html", null, true);
        echo "\" alt=\"car\">
        </div>
            
    </div>

    <div id=\"services\">
        <h1>Nos services</h1>
        <div id=\"services-container\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 29
            echo "            <div class=\"service-item\">
                <p class=\"service-title\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["service"], "getName", [], "method", false, false, false, 30), "html", null, true);
            echo "</p>
                <p class=\"service-text\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["service"], "getDescription", [], "method", false, false, false, 31);
            echo "</p>
                <a href=\"#\" class=\"basic-btn\">CONTACT</a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        </div>
    </div>

    <div id=\"reviews\">
        <h1>Avis clients</h1>
        <div id=\"reviews-container\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 43
            echo "            <div class=\"review-item\">
                <div class=\"review-title\">
                    <span class=\"left-elements\">
                        <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/member.png"), "html", null, true);
            echo "\" style=\"width=35px; height=35px;\" alt=\"member\">
                        <p class=\"review-name\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "getName", [], "method", false, false, false, 47), "html", null, true);
            echo "</p>
                    </span>
                    <p class=\"review-note\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "getNote", [], "method", false, false, false, 49), "html", null, true);
            echo "/10</p>
                </div>
                <p class=\"review-text\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "getComment", [], "method", false, false, false, 51), "html", null, true);
            echo "</p>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </div>
        <div style=\"margin: 20px 0;\">
            <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review");
        echo "\" class=\"basic-btn\">LAISSER UN AVIS</a>
        </div>

    </div>

    <div id=\"horaires\">
        <h1>Horaires</h1>
        ";
        // line 63
        if (((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 63, $this->source); })()) != null)) {
            // line 64
            echo "            <div id=\"horaires-container\">
                <p>Lundi: ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 65, $this->source); })()), "getLundi", [], "method", false, false, false, 65), "html", null, true);
            echo "</p>
                <p>Mardi: ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 66, $this->source); })()), "getMardi", [], "method", false, false, false, 66), "html", null, true);
            echo "</p>
                <p>Mercredi: ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 67, $this->source); })()), "getMercredi", [], "method", false, false, false, 67), "html", null, true);
            echo "</p>
                <p>Jeudi: ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 68, $this->source); })()), "getJeudi", [], "method", false, false, false, 68), "html", null, true);
            echo "</p>
                <p>Vendredi: ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 69, $this->source); })()), "getVendredi", [], "method", false, false, false, 69), "html", null, true);
            echo "</p>
                <p>Samedi: ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 70, $this->source); })()), "getSamedi", [], "method", false, false, false, 70), "html", null, true);
            echo "</p>
                <p>Dimanche: ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 71, $this->source); })()), "getDimanche", [], "method", false, false, false, 71), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 74
        echo "    </div>

    <div id=\"contact-us\">
        <h1>Nous contacter</h1>
        <form id=\"contact-form\" action=\"#\" method=\"post\">
            <div>
                <p class=\"contact-label\">Nom</p>
                <input type=\"text\" id=\"nom\" name=\"nom\" required>
            </div>

            <div>
                <p class=\"contact-label\">Prénom</p>
                <input type=\"text\" id=\"prenom\" name=\"prenom\" required>
            </div>

            <div>
                <p class=\"contact-label\">Téléphone</p>
                <input type=\"tel\" id=\"telephone\" name=\"telephone\">
            </div>

            <div>
                <p class=\"contact-label\">Email</p>
                <input type=\"email\" id=\"email\" name=\"email\" required>
            </div>

            <div>
                <p class=\"contact-label\">Sujet</p>
                <input type=\"text\" id=\"sujet\" name=\"sujet\">
            </div>

            <div>
                <p class=\"contact-label\">Message</p>
                <textarea id=\"message\" name=\"message\" rows=\"5\" required></textarea>
            </div>

            <div>
                <input type=\"submit\" value=\"Envoyer\">
            </div>
        </form>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  229 => 74,  223 => 71,  219 => 70,  215 => 69,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  196 => 64,  194 => 63,  184 => 56,  180 => 54,  171 => 51,  166 => 49,  161 => 47,  157 => 46,  152 => 43,  148 => 42,  139 => 35,  129 => 31,  125 => 30,  122 => 29,  118 => 28,  107 => 20,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

    <div id=\"header\">
        <div>
            <h1>Votre voiture, notre passion.</h1>
            <p>Découvrez notre garage où nous offrons des 
                                réparations automobiles de première classe 
                                pour assurer votre tranquillité d'esprit, ainsi 
                                qu'une sélection soigneusement choisie de
                                voitures d'occasion certifiées pour répondre à 
                                tous vos besoins de conduite.
            </p>
            <a href=\"{{ path('app_catalogue') }}\" class=\"basic-btn\">CATALOGUE</a>
        </div>
        <div>
            <img id=\"car\" src=\"{{ asset('assets/img/car.png') }}\" alt=\"car\">
        </div>
            
    </div>

    <div id=\"services\">
        <h1>Nos services</h1>
        <div id=\"services-container\">
            {% for service in services %}
            <div class=\"service-item\">
                <p class=\"service-title\">{{ service.getName() }}</p>
                <p class=\"service-text\">{{ service.getDescription()|raw }}</p>
                <a href=\"#\" class=\"basic-btn\">CONTACT</a>
            </div>
            {% endfor %}

        </div>
    </div>

    <div id=\"reviews\">
        <h1>Avis clients</h1>
        <div id=\"reviews-container\">
            {% for review in reviews %}
            <div class=\"review-item\">
                <div class=\"review-title\">
                    <span class=\"left-elements\">
                        <img src=\"{{ asset('assets/img/member.png') }}\" style=\"width=35px; height=35px;\" alt=\"member\">
                        <p class=\"review-name\">{{ review.getName() }}</p>
                    </span>
                    <p class=\"review-note\">{{ review.getNote() }}/10</p>
                </div>
                <p class=\"review-text\">{{ review.getComment() }}</p>
            </div>
            {% endfor %}
        </div>
        <div style=\"margin: 20px 0;\">
            <a href=\"{{ path('app_review') }}\" class=\"basic-btn\">LAISSER UN AVIS</a>
        </div>

    </div>

    <div id=\"horaires\">
        <h1>Horaires</h1>
        {% if schedules != null %}
            <div id=\"horaires-container\">
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

    <div id=\"contact-us\">
        <h1>Nous contacter</h1>
        <form id=\"contact-form\" action=\"#\" method=\"post\">
            <div>
                <p class=\"contact-label\">Nom</p>
                <input type=\"text\" id=\"nom\" name=\"nom\" required>
            </div>

            <div>
                <p class=\"contact-label\">Prénom</p>
                <input type=\"text\" id=\"prenom\" name=\"prenom\" required>
            </div>

            <div>
                <p class=\"contact-label\">Téléphone</p>
                <input type=\"tel\" id=\"telephone\" name=\"telephone\">
            </div>

            <div>
                <p class=\"contact-label\">Email</p>
                <input type=\"email\" id=\"email\" name=\"email\" required>
            </div>

            <div>
                <p class=\"contact-label\">Sujet</p>
                <input type=\"text\" id=\"sujet\" name=\"sujet\">
            </div>

            <div>
                <p class=\"contact-label\">Message</p>
                <textarea id=\"message\" name=\"message\" rows=\"5\" required></textarea>
            </div>

            <div>
                <input type=\"submit\" value=\"Envoyer\">
            </div>
        </form>
    </div>

{% endblock %}
", "home/index.html.twig", "D:\\Développement\\Web\\garage\\templates\\home\\index.html.twig");
    }
}
