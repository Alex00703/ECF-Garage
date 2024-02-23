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

/* home/catalogue.html.twig */
class __TwigTemplate_83f95b6ed31deb5d67897aa6b37a050fc098e36e4120178d46451fd6afa97220 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/catalogue.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/catalogue.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/catalogue.html.twig", 1);
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
    <div id=\"filters\">
        <div class=\"filter\">
            <p class=\"filter-title\">Prix</p>
            <div class=\"min-max\">
                <p class=\"filter-min\">Min: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["lowestPrice"]) || array_key_exists("lowestPrice", $context) ? $context["lowestPrice"] : (function () { throw new RuntimeError('Variable "lowestPrice" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
                <p class=\"filter-max\">Max: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["highestPrice"]) || array_key_exists("highestPrice", $context) ? $context["highestPrice"] : (function () { throw new RuntimeError('Variable "highestPrice" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"line\"></div>
        </div>
        <div class=\"filter\">
            <p class=\"filter-title\">Année</p>
            <div class=\"min-max\">
                <p class=\"filter-min\">Min: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["lowestYear"]) || array_key_exists("lowestYear", $context) ? $context["lowestYear"] : (function () { throw new RuntimeError('Variable "lowestYear" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\">
                <p class=\"filter-max\">Max: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["highestYear"]) || array_key_exists("highestYear", $context) ? $context["highestYear"] : (function () { throw new RuntimeError('Variable "highestYear" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\">

            </div>
            <div class=\"line\"></div>
        </div>
        <div class=\"filter\">
            <p class=\"filter-title\">Kilomètres</p>
            <div class=\"min-max\">
                <p class=\"filter-min\">Min: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["lowestKilometers"]) || array_key_exists("lowestKilometers", $context) ? $context["lowestKilometers"] : (function () { throw new RuntimeError('Variable "lowestKilometers" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\">
                <p class=\"filter-max\">Max: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["highestKilometers"]) || array_key_exists("highestKilometers", $context) ? $context["highestKilometers"] : (function () { throw new RuntimeError('Variable "highestKilometers" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
            </div>
            <div class=\"line\"></div>
        </div>
    </div>
    <div id=\"catalogue\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            echo " 
            <div class=\"car-sale\">
                <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/cars/" . twig_get_attribute($this->env, $this->source, $context["car"], "getImage", [], "any", false, false, false, 43))), "html", null, true);
            echo "\" alt=\"car\" class=\"car-img\">
                <div class=\"car-description\">
                    <p class=\"car-title\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "getName", [], "method", false, false, false, 45), "html", null, true);
            echo "</p>
                    <p class=\"car-price\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "getPrice", [], "method", false, false, false, 46), "html", null, true);
            echo "€</p>
                    <p class=\"car-year\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "getYear", [], "method", false, false, false, 47), "html", null, true);
            echo "</p>
                    <p class=\"car-km\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "getKilometers", [], "method", false, false, false, 48), "html", null, true);
            echo " kilomètres</p>
                </div>
                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_catalogue_details", ["id" => twig_get_attribute($this->env, $this->source, $context["car"], "getId", [], "method", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"basic-btn\">DETAILS</a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </div>

    <div id=\"horaires2\">
        <h1>Horaires</h1>
        ";
        // line 57
        if (((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 57, $this->source); })()) != null)) {
            // line 58
            echo "            <div id=\"horaires2-container\">
                <p>Lundi: ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 59, $this->source); })()), "getLundi", [], "method", false, false, false, 59), "html", null, true);
            echo "</p>
                <p>Mardi: ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 60, $this->source); })()), "getMardi", [], "method", false, false, false, 60), "html", null, true);
            echo "</p>
                <p>Mercredi: ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 61, $this->source); })()), "getMercredi", [], "method", false, false, false, 61), "html", null, true);
            echo "</p>
                <p>Jeudi: ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 62, $this->source); })()), "getJeudi", [], "method", false, false, false, 62), "html", null, true);
            echo "</p>
                <p>Vendredi: ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 63, $this->source); })()), "getVendredi", [], "method", false, false, false, 63), "html", null, true);
            echo "</p>
                <p>Samedi: ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 64, $this->source); })()), "getSamedi", [], "method", false, false, false, 64), "html", null, true);
            echo "</p>
                <p>Dimanche: ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 65, $this->source); })()), "getDimanche", [], "method", false, false, false, 65), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 68
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
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
        return "home/catalogue.html.twig";
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
        return array (  235 => 72,  223 => 68,  217 => 65,  213 => 64,  209 => 63,  205 => 62,  201 => 61,  197 => 60,  193 => 59,  190 => 58,  188 => 57,  182 => 53,  173 => 50,  168 => 48,  164 => 47,  160 => 46,  156 => 45,  151 => 43,  144 => 41,  135 => 35,  130 => 33,  118 => 24,  113 => 22,  102 => 14,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catalogue{% endblock %}

{% block body %}

    <div id=\"filters\">
        <div class=\"filter\">
            <p class=\"filter-title\">Prix</p>
            <div class=\"min-max\">
                <p class=\"filter-min\">Min: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"{{ lowestPrice }}\">
                <p class=\"filter-max\">Max: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"{{ highestPrice }}\">
            </div>
            <div class=\"line\"></div>
        </div>
        <div class=\"filter\">
            <p class=\"filter-title\">Année</p>
            <div class=\"min-max\">
                <p class=\"filter-min\">Min: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"{{ lowestYear }}\">
                <p class=\"filter-max\">Max: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"{{ highestYear }}\">

            </div>
            <div class=\"line\"></div>
        </div>
        <div class=\"filter\">
            <p class=\"filter-title\">Kilomètres</p>
            <div class=\"min-max\">
                <p class=\"filter-min\">Min: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"{{ lowestKilometers }}\">
                <p class=\"filter-max\">Max: </p>
                <input type=\"text\" onkeyup=\"filters()\" class=\"filter-field\" value=\"{{ highestKilometers }}\">
            </div>
            <div class=\"line\"></div>
        </div>
    </div>
    <div id=\"catalogue\">
        {% for car in cars %} 
            <div class=\"car-sale\">
                <img src=\"{{ asset('assets/img/cars/' ~ car.getImage) }}\" alt=\"car\" class=\"car-img\">
                <div class=\"car-description\">
                    <p class=\"car-title\">{{ car.getName() }}</p>
                    <p class=\"car-price\">{{ car.getPrice() }}€</p>
                    <p class=\"car-year\">{{ car.getYear() }}</p>
                    <p class=\"car-km\">{{ car.getKilometers() }} kilomètres</p>
                </div>
                <a href=\"{{ path('app_catalogue_details', {'id': car.getId() })}}\" class=\"basic-btn\">DETAILS</a>
            </div>
        {% endfor %}
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
", "home/catalogue.html.twig", "D:\\Développement\\Web\\garage\\templates\\home\\catalogue.html.twig");
    }
}
