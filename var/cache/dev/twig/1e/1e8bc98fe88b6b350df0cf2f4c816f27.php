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

/* product/Admin/list.html.twig */
class __TwigTemplate_06da7b6c67b534e477abddb2c5e6d58b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Admin/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Admin/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/Admin/list.html.twig", 1);
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

        echo "List of Product";
        
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
        echo " <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
 <link href='https://unpkg.com/css.gg@2.0.0/icons/css/details-more.css' rel='stylesheet'>
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  ";
        // line 9
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <style>
    .display-product-table table {
      width: 80%;
      text-align: center;
    }
    .container{
    font-family:Palatino;
}

    .display-product-table table thead th {
      font-size: 1.2rem;
      background-color: #708090;
      color: white;
    }

    .display-product-table table td {
      font-size: 1rem;
    }

    .display-product-table table tr:nth-child(odd) {
      background-color: #f9f9f9;
      color: black;
    }

    .display-product-table table tr:nth-child(even) {
      background-color: #ececec; 
      color: black;
    }

    .display-product-table .empty {
      margin-bottom: 2rem;
      text-align: center;
      font-size: 2rem;
    }
      
    .product-image {
      max-width: 150px; 
      max-height: 150px; 
      object-fit: contain; 
    }
    
    .btn {
      margin-top: 2.8rem;
    }
    
    .btn:hover {
      background-color: var(--black);
      color: var(--white);
    }

    .btn.btn-danger {
      background-color: red;
      color: #ececec;
    }
.btn.btn-warning {
  background-color: orange;
  color: #ececec;
}
.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  padding: 0;
}
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "<div class=\"container\" >
    <div style=\"align-items: center;\">
        <section class=\"display-product-table\">
        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table table-bordered\" style=\"border\">
                <thead>
                    <tr >
                        <th >ID</th>
                        <th colspan=\"2\">Product</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 93
        $context["productsPerPage"] = 5;
        // line 94
        echo "                ";
        $context["totalProducts"] = twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 94, $this->source); })()));
        // line 95
        echo "                ";
        $context["totalPages"] = twig_round(((isset($context["totalProducts"]) || array_key_exists("totalProducts", $context) ? $context["totalProducts"] : (function () { throw new RuntimeError('Variable "totalProducts" does not exist.', 95, $this->source); })()) / (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 95, $this->source); })())), 0, "ceil");
        // line 96
        echo "                ";
        $context["currentPage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "query", [], "any", false, false, false, 96), "get", ["page", 1], "method", false, false, false, 96);
        // line 97
        echo "                ";
        $context["start"] = (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 97, $this->source); })()) - 1) * (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 97, $this->source); })()));
        // line 98
        echo "                ";
        $context["end"] = ((isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 98, $this->source); })()) + (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 98, $this->source); })()));
        // line 99
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 99, $this->source); })()), (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 99, $this->source); })()), 5));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 100
            echo "                    <tr>
                        <td style=\"vertical-align: middle;\">";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getid", [], "method", false, false, false, 101), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle;   border-right: none;\"><img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/product/" . twig_get_attribute($this->env, $this->source, $context["product"], "getPhoto", [], "method", false, false, false, 102))), "html", null, true);
            echo "\" class=\"product-image\" />
                        <td style=\"vertical-align: middle;text-align:left;    border-left: none;\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "method", false, false, false, 103), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle;\">";
            // line 104
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 104), 2, ".", ","), "html", null, true);
            echo "\$</td>
                        <td>
                            <a href=\"javascript:delete123('";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 106)]), "html", null, true);
            echo "')\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i> </a>
                            <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 107)]), "html", null, true);
            echo "\" class=\"btn btn-warning\"> <i class=\"fas fa-edit\"></i></a>
                            <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_detail_ad", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 108)]), "html", null, true);
            echo "\" class=\"btn\"><i class=\"fas fa-info-circle\"></i></a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                </tbody>
            </table>
            </div>
            <nav>
                <ul class=\"pagination\">
                    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 117, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 118
            echo "                        <li class=\" ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 118, $this->source); })()) == $context["page"])) {
                echo "active";
            }
            echo "\" style=\"\">
                            <a class=\"page-link\" href=\"?page=";
            // line 119
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                </ul>
            </nav>
        </section>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    function delete123(url) {
      if (confirm(\"You want to delete?\")) {
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
        return "product/Admin/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 130,  303 => 129,  288 => 122,  277 => 119,  270 => 118,  266 => 117,  259 => 112,  249 => 108,  245 => 107,  241 => 106,  236 => 104,  232 => 103,  228 => 102,  224 => 101,  221 => 100,  216 => 99,  213 => 98,  210 => 97,  207 => 96,  204 => 95,  201 => 94,  199 => 93,  183 => 79,  173 => 78,  95 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}List of Product{% endblock %}

{% block stylesheets %}
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
 <link href='https://unpkg.com/css.gg@2.0.0/icons/css/details-more.css' rel='stylesheet'>
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  {{ parent() }}
  <style>
    .display-product-table table {
      width: 80%;
      text-align: center;
    }
    .container{
    font-family:Palatino;
}

    .display-product-table table thead th {
      font-size: 1.2rem;
      background-color: #708090;
      color: white;
    }

    .display-product-table table td {
      font-size: 1rem;
    }

    .display-product-table table tr:nth-child(odd) {
      background-color: #f9f9f9;
      color: black;
    }

    .display-product-table table tr:nth-child(even) {
      background-color: #ececec; 
      color: black;
    }

    .display-product-table .empty {
      margin-bottom: 2rem;
      text-align: center;
      font-size: 2rem;
    }
      
    .product-image {
      max-width: 150px; 
      max-height: 150px; 
      object-fit: contain; 
    }
    
    .btn {
      margin-top: 2.8rem;
    }
    
    .btn:hover {
      background-color: var(--black);
      color: var(--white);
    }

    .btn.btn-danger {
      background-color: red;
      color: #ececec;
    }
.btn.btn-warning {
  background-color: orange;
  color: #ececec;
}
.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  padding: 0;
}
  </style>
{% endblock %}

{% block body %}
<div class=\"container\" >
    <div style=\"align-items: center;\">
        <section class=\"display-product-table\">
        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table table-bordered\" style=\"border\">
                <thead>
                    <tr >
                        <th >ID</th>
                        <th colspan=\"2\">Product</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                {% set productsPerPage = 5 %}
                {% set totalProducts = data|length %}
                {% set totalPages = (totalProducts / productsPerPage)|round(0, 'ceil') %}
                {% set currentPage = app.request.query.get('page', 1) %}
                {% set start = (currentPage - 1) * productsPerPage %}
                {% set end = start + productsPerPage %}
                {% for product in data[start:5] %}
                    <tr>
                        <td style=\"vertical-align: middle;\">{{product.getid()}}</td>
                        <td style=\"vertical-align: middle;   border-right: none;\"><img src=\"{{ asset('uploads/product/' ~ product.getPhoto()) }}\" class=\"product-image\" />
                        <td style=\"vertical-align: middle;text-align:left;    border-left: none;\">{{product.getName()}}</td>
                        <td style=\"vertical-align: middle;\">{{product.getPrice()|number_format(2, '.', ',')}}\$</td>
                        <td>
                            <a href=\"javascript:delete123('{{path('app_delete_product',{'id':product.getId()})}}')\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i> </a>
                            <a href=\"{{path('app_edit_product',{'id':product.getId()})}}\" class=\"btn btn-warning\"> <i class=\"fas fa-edit\"></i></a>
                            <a href=\"{{path('app_product_detail_ad',{'id':product.getId()})}}\" class=\"btn\"><i class=\"fas fa-info-circle\"></i></a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            </div>
            <nav>
                <ul class=\"pagination\">
                    {% for page in 1..totalPages %}
                        <li class=\" {% if currentPage == page %}active{% endif %}\" style=\"\">
                            <a class=\"page-link\" href=\"?page={{ page }}\">{{ page }}</a>
                        </li>
                    {% endfor %}
                </ul>
            </nav>
        </section>
    </div>
</div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script>
    function delete123(url) {
      if (confirm(\"You want to delete?\")) {
        window.location.href = url;
      }
    }
  </script>
{% endblock %}
", "product/Admin/list.html.twig", "C:\\Users\\huynh\\Semi\\templates\\product\\Admin\\list.html.twig");
    }
}
