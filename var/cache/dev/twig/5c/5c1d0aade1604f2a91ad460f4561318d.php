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

/* product/Admin/details.html.twig */
class __TwigTemplate_d83f89f44b9e1fcf2154cbafb942953d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Admin/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Admin/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/Admin/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detail of Product";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo " <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  <style>
    .display-product-table table {
      width: 80%;
      text-align: center;
    }

    .container{
    font-family:Palatino;
}
    .display-product-table table td {
      padding: 1.5rem;
      font-size: 1rem;
    }
      
    .product-image {
      max-width: 400px; 
      max-height: 400px; 
      object-fit: contain; 
    }
    
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "<div class=\"container\">
    <div style=\"align-items: center\">
        <section class=\"display-product-table\">
        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table table-bordered\" style=\"border\">
                <tbody>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 38
            echo "                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">Image</th>
                       <td style=\"vertical-align: middle;\"><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/product/" . twig_get_attribute($this->env, $this->source, $context["product"], "getPhoto", [], "method", false, false, false, 40))), "html", null, true);
            echo "\" class=\"product-image\" /></td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">ID</th>
                       <td style=\"vertical-align: middle;\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 44), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">Category</th>
                       <td style=\"vertical-align: middle;\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "getCate", [], "any", false, false, false, 48), "getName", [], "method", false, false, false, 48), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">Price</th>
                       <td style=\"vertical-align: middle;\">";
            // line 52
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 52), 2, ".", ","), "html", null, true);
            echo "\$</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">Name</th>
                       <td style=\"vertical-align: middle;\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "method", false, false, false, 56), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090;font-weight: bold;\">Description</th>
                       <td style=\"vertical-align: middle;\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 60), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </tbody>
            </table>
            </div>
        </section>
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

        // line 74
        echo "  <script>
    function delete123(url) {
      if (confirm(\"Go go go!\")) {
        window.location.href = url;
      }
    }
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/Admin/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 74,  211 => 73,  195 => 65,  184 => 60,  177 => 56,  170 => 52,  163 => 48,  156 => 44,  149 => 40,  145 => 38,  141 => 37,  133 => 31,  123 => 30,  90 => 5,  80 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Detail of Product{% endblock %}

{% block stylesheets %}
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  <style>
    .display-product-table table {
      width: 80%;
      text-align: center;
    }

    .container{
    font-family:Palatino;
}
    .display-product-table table td {
      padding: 1.5rem;
      font-size: 1rem;
    }
      
    .product-image {
      max-width: 400px; 
      max-height: 400px; 
      object-fit: contain; 
    }
    
  </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div style=\"align-items: center\">
        <section class=\"display-product-table\">
        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table table-bordered\" style=\"border\">
                <tbody>
                    {% for product in data %}
                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">Image</th>
                       <td style=\"vertical-align: middle;\"><img src=\"{{ asset('uploads/product/' ~ product.getPhoto()) }}\" class=\"product-image\" /></td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">ID</th>
                       <td style=\"vertical-align: middle;\">{{ product.getId() }}</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">Category</th>
                       <td style=\"vertical-align: middle;\">{{ product.getCate.getName() }}</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">Price</th>
                       <td style=\"vertical-align: middle;\">{{ product.getPrice()|number_format(2, '.', ',') }}\$</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090; font-weight: bold;\">Name</th>
                       <td style=\"vertical-align: middle;\">{{ product.getName() }}</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: #708090;font-weight: bold;\">Description</th>
                       <td style=\"vertical-align: middle;\">{{ product.getDescription() }}</td>
                    </tr>
                    <tr>
                    
                    {% endfor %}
                </tbody>
            </table>
            </div>
        </section>
    </div>
</div>
{% endblock %}

{% block javascripts %}
  <script>
    function delete123(url) {
      if (confirm(\"Go go go!\")) {
        window.location.href = url;
      }
    }
  </script>
{% endblock %}
", "product/Admin/details.html.twig", "C:\\Users\\huynh\\Semi\\templates\\product\\Admin\\details.html.twig");
    }
}
