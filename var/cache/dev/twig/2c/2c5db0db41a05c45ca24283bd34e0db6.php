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

/* order/orderitem.html.twig */
class __TwigTemplate_955d53ce93405ef44ba2fa09b2509e4b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/orderitem.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/orderitem.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/orderitem.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "List of Order Items";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\"> 
<style>
 :root{
    --black: #000000;
  }
.container{
    position: relative;
    ";
        // line 14
        echo "    ";
        // line 15
        echo "    top: -100px;
    /* background: transparent; */
    border: 1px solid var(--black);
    
    /* backdrop-filter: blur(20px);
    box-shadow: 0 0 30 rgba(0, 0, 0, .5); */
    background-color:#ffffff;
    color: rgb(0, 0, 0);
    margin-top: 200px; 
    border-radius: 10px;
}
    .custom-thead td{
      padding: 1rem;
      font-size: 1.25rem;
      background-color: #708090;
      color: white;
    }
     .logout{
    padding: 10px 60px; 
    text-decoration: none;
    color: rgb(73, 70, 70);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "<div class=\"container\">
<h2>Customer Information</h2>
        <p>Name: ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), 0, [], "array", false, false, false, 43), "getOrderID", [], "method", false, false, false, 43), "getCustomerName", [], "method", false, false, false, 43), "html", null, true);
        echo "</p>
        <p>Address: ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), 0, [], "array", false, false, false, 44), "getOrderID", [], "method", false, false, false, 44), "getCustomerAddress", [], "method", false, false, false, 44), "html", null, true);
        echo "</p>
        <p>Phone: ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), 0, [], "array", false, false, false, 45), "getOrderID", [], "method", false, false, false, 45), "getCustomerPhone", [], "method", false, false, false, 45), "html", null, true);
        echo "</p>
        <p>Total Price: ";
        // line 46
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), 0, [], "array", false, false, false, 46), "getOrderID", [], "method", false, false, false, 46), "getTotalPrice", [], "method", false, false, false, 46), 2, ".", ","), "html", null, true);
        echo "\$</p>
        <p>Date Out: ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), 0, [], "array", false, false, false, 47), "getOrderID", [], "method", false, false, false, 47), "getDateOut", [], "method", false, false, false, 47), "d-m-Y"), "html", null, true);
        echo "</p>
    <div style=\"display: flex; justify-content: center;\">
        <table class=\"table table-bordered\" style=\"border\">
            <thead class=\"custom-thead\"> 
                <tr>
                    <td>Index</td>
                    <td>Item ID</td>
                    <td style=\"text-align:right\">Quantity</td>
                    <td style=\"text-align:right\">Price</td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 59, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 60
            echo "                <tr>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getItem", [], "method", false, false, false, 62), "getName", [], "method", false, false, false, 62), "html", null, true);
            echo "</td>
                    <td style=\" text-align:right;\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getQuantity", [], "method", false, false, false, 63), "html", null, true);
            echo "</td>
                    <td style=\" text-align:right;\">";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getPrice", [], "method", false, false, false, 64), 2, ".", ","), "html", null, true);
            echo "\$</td>
                </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/orderitem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 73,  228 => 67,  211 => 64,  207 => 63,  203 => 62,  199 => 61,  196 => 60,  179 => 59,  164 => 47,  160 => 46,  156 => 45,  152 => 44,  148 => 43,  144 => 41,  134 => 40,  101 => 15,  99 => 14,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}List of Order Items{% endblock %}

{% block stylesheets %}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\"> 
<style>
 :root{
    --black: #000000;
  }
.container{
    position: relative;
    {# width: 400px; #}
    {# height: 400px;  #}
    top: -100px;
    /* background: transparent; */
    border: 1px solid var(--black);
    
    /* backdrop-filter: blur(20px);
    box-shadow: 0 0 30 rgba(0, 0, 0, .5); */
    background-color:#ffffff;
    color: rgb(0, 0, 0);
    margin-top: 200px; 
    border-radius: 10px;
}
    .custom-thead td{
      padding: 1rem;
      font-size: 1.25rem;
      background-color: #708090;
      color: white;
    }
     .logout{
    padding: 10px 60px; 
    text-decoration: none;
    color: rgb(73, 70, 70);
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
<h2>Customer Information</h2>
        <p>Name: {{ data[0].getOrderID().getCustomerName() }}</p>
        <p>Address: {{ data[0].getOrderID().getCustomerAddress() }}</p>
        <p>Phone: {{ data[0].getOrderID().getCustomerPhone() }}</p>
        <p>Total Price: {{ data[0].getOrderID().getTotalPrice()|number_format(2, '.', ',') }}\$</p>
        <p>Date Out: {{ data[0].getOrderID().getDateOut()|date('d-m-Y') }}</p>
    <div style=\"display: flex; justify-content: center;\">
        <table class=\"table table-bordered\" style=\"border\">
            <thead class=\"custom-thead\"> 
                <tr>
                    <td>Index</td>
                    <td>Item ID</td>
                    <td style=\"text-align:right\">Quantity</td>
                    <td style=\"text-align:right\">Price</td>
                </tr>
            </thead>
            <tbody>
                {% for item in data %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ item.getItem().getName() }}</td>
                    <td style=\" text-align:right;\">{{ item.getQuantity() }}</td>
                    <td style=\" text-align:right;\">{{ item.getPrice()|number_format(2, '.', ',') }}\$</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}

{% block javascripts %}
{% endblock %}
", "order/orderitem.html.twig", "E:\\BTEC\\Semi\\templates\\order\\orderitem.html.twig");
    }
}
