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

/* home/panier.html.twig */
class __TwigTemplate_593b4960a405b3847b94ad7aa8b7db4ca6f4f9adcf10bb572d55b21e18ebcccd extends Template
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
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/panier.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "home/panier.html.twig", 1);
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

        echo "Pannier!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"alert alert-dismissible alert-info\">
\t\t<h1>Votre panier</h1>
\t</div>
\t";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            echo "
\t\t<table class=\"table\">
\t\t\t<tr class=\"table-info\">
\t\t\t\t<th>Produit</th>
\t\t\t\t<th>Prix</th>
\t\t\t\t<th>Quantité</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t\t<tbody>
\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                // line 22
                echo "\t\t\t\t\t<tr class=\"table-success\">
\t\t\t\t\t\t<td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 23), "designation", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 24), "prix", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 26), "prix", [], "any", false, false, false, 26) * twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 26)), "html", null, true);
                echo "</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prod_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30)]), "html", null, true);
                echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prod_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-window-minimize\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_prod", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>

\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t</tbody>
\t\t\t<tfoot>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\" class=\"text-right\">Total:
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t</tfoot>
\t\t</table>

\t";
        } else {
            // line 54
            echo "\t\t<div class=\"alert alert-dismissible alert-success\">
\t\t\t<strong>Oppss, c'est vide !</strong>
\t\t</div>

\t";
        }
        // line 59
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 59,  175 => 54,  166 => 48,  159 => 43,  146 => 36,  140 => 33,  134 => 30,  127 => 26,  123 => 25,  119 => 24,  115 => 23,  112 => 22,  108 => 21,  96 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Pannier!
{% endblock %}

{% block body %}
\t<div class=\"alert alert-dismissible alert-info\">
\t\t<h1>Votre panier</h1>
\t</div>
\t{% if paniers |length >0 %}

\t\t<table class=\"table\">
\t\t\t<tr class=\"table-info\">
\t\t\t\t<th>Produit</th>
\t\t\t\t<th>Prix</th>
\t\t\t\t<th>Quantité</th>
\t\t\t\t<th>Total</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t\t<tbody>
\t\t\t\t{% for panier in paniers %}
\t\t\t\t\t<tr class=\"table-success\">
\t\t\t\t\t\t<td>{{panier.produit.designation}}</td>
\t\t\t\t\t\t<td>{{panier.produit.prix}}</td>
\t\t\t\t\t\t<td>{{panier.quantite}}</td>
\t\t\t\t\t\t<td>{{panier.produit.prix * panier.quantite}}</td>

\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a href=\"{{path(\"prod_add\", {id: panier.produit.id})}}\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-plus\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{path(\"prod_remove\", {id: panier.produit.id})}}\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-window-minimize\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{path(\"delete_prod\", {id: panier.produit.id})}}\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-trash\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</td>

\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t\t<tfoot>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\" class=\"text-right\">Total:
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{total }}</td>
\t\t\t\t</tr>
\t\t\t</tfoot>
\t\t</table>

\t{% else %}
\t\t<div class=\"alert alert-dismissible alert-success\">
\t\t\t<strong>Oppss, c'est vide !</strong>
\t\t</div>

\t{% endif %}

{% endblock %}
", "home/panier.html.twig", "C:\\Users\\Fayna\\Downloads\\e-commerce-master\\e-commerce-master\\templates\\home\\panier.html.twig");
    }
}
