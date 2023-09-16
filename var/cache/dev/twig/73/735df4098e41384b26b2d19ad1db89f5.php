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

/* category/list.html.twig */
class __TwigTemplate_d04c2bce859ffc29e9aec7e347f51163 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/list.html.twig", 1);
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
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  ";
        // line 8
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
      padding: 1rem;
      font-size: 1.25rem;
      background-color: #708090;
      color: white;
    }

    .display-product-table table td {
      padding: 1rem;
      font-size: 1rem;
      color: var(--black);
      background-color: var(--black);
    }

    .display-product-table table td:first-child {
      padding: 0;
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
      background-color: var(--bg-black);
      color: var(--black);
      font-size: 2rem;
      padding: 1.5rem;
    }
      
    .product-image {
      max-width: 150px; 
      max-height: 150px; 
      object-fit: contain; 
    }
    
    .btn {
      width: 40%;
      text-align: center;
      font-size: 1rem;
      padding: 0.3rem 0.5rem;
      border-radius: 0.5rem;
      cursor: pointer;
      margin-top: 3rem;
    }
    
    .btn:hover {
      background-color: var(--black);
      color: var(--white);
    }

    .btn.btn-danger {
      background-color: red;
      color: #ececec;
    }
 .pagination {
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  padding: 0;
}

.pagination li {
  margin-top:20px;
  color: #708090;
  background-color: #708090;
}

.pagination li.active {
  font-weight: bold;
}

.pagination li a {
  display: block;
  padding: 5px 10px;
  color: black;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.pagination li a:hover {
  background-color: gray;
  color: white;
}

    .btn.btn-warning {
      background-color: orange;
      color: #ececec;
    }
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 119
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 120
        echo "<div class=\"container\">
    <div style=\"align-items: center\">
        <section class=\"display-product-table\">
        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table table-bordered\" style=\"border\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 134
        $context["productsPerPage"] = 5;
        // line 135
        echo "                ";
        $context["totalProducts"] = twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 135, $this->source); })()));
        // line 136
        echo "                ";
        $context["totalPages"] = twig_round(((isset($context["totalProducts"]) || array_key_exists("totalProducts", $context) ? $context["totalProducts"] : (function () { throw new RuntimeError('Variable "totalProducts" does not exist.', 136, $this->source); })()) / (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 136, $this->source); })())), 0, "ceil");
        // line 137
        echo "                ";
        $context["currentPage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "query", [], "any", false, false, false, 137), "get", ["page", 1], "method", false, false, false, 137);
        // line 138
        echo "                ";
        $context["start"] = (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 138, $this->source); })()) - 1) * (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 138, $this->source); })()));
        // line 139
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 139, $this->source); })()), (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 139, $this->source); })()), 5));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 140
            echo "                    <tr>
                        <td style=\"vertical-align: middle;\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cate"], "getId", [], "method", false, false, false, 141), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle;\"><img src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/product/" . twig_get_attribute($this->env, $this->source, $context["cate"], "getPhoto", [], "method", false, false, false, 142))), "html", null, true);
            echo "\" class=\"product-image\" /></td>
                        <td style=\"vertical-align: middle;\">";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cate"], "getName", [], "method", false, false, false, 143), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"javascript:delete123('";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_cate", ["id" => twig_get_attribute($this->env, $this->source, $context["cate"], "getId", [], "method", false, false, false, 145)]), "html", null, true);
            echo "')\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i> </a>
                            <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_cate", ["id" => twig_get_attribute($this->env, $this->source, $context["cate"], "getId", [], "method", false, false, false, 146)]), "html", null, true);
            echo "\" class=\"btn btn-warning\"> <i class=\"fas fa-edit\"></i></a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                </tbody>
            </table>
            </div>
             <ul class=\"pagination\">
                ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 154, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 155
            echo "                    <li class=\"page-item ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 155, $this->source); })()) == $context["page"])) {
                echo "active";
            }
            echo "\">
                        <a class=\"page-link\" href=\"?page=";
            // line 156
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
        // line 159
        echo "            </ul>
        </section>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>
    function delete123(url) {
      if (confirm(\"Confirm ???\")) {
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
        return "category/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 166,  331 => 165,  317 => 159,  306 => 156,  299 => 155,  295 => 154,  289 => 150,  279 => 146,  275 => 145,  270 => 143,  266 => 142,  262 => 141,  259 => 140,  254 => 139,  251 => 138,  248 => 137,  245 => 136,  242 => 135,  240 => 134,  224 => 120,  214 => 119,  94 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}List of Product{% endblock %}

{% block stylesheets %}
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
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
      padding: 1rem;
      font-size: 1.25rem;
      background-color: #708090;
      color: white;
    }

    .display-product-table table td {
      padding: 1rem;
      font-size: 1rem;
      color: var(--black);
      background-color: var(--black);
    }

    .display-product-table table td:first-child {
      padding: 0;
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
      background-color: var(--bg-black);
      color: var(--black);
      font-size: 2rem;
      padding: 1.5rem;
    }
      
    .product-image {
      max-width: 150px; 
      max-height: 150px; 
      object-fit: contain; 
    }
    
    .btn {
      width: 40%;
      text-align: center;
      font-size: 1rem;
      padding: 0.3rem 0.5rem;
      border-radius: 0.5rem;
      cursor: pointer;
      margin-top: 3rem;
    }
    
    .btn:hover {
      background-color: var(--black);
      color: var(--white);
    }

    .btn.btn-danger {
      background-color: red;
      color: #ececec;
    }
 .pagination {
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  padding: 0;
}

.pagination li {
  margin-top:20px;
  color: #708090;
  background-color: #708090;
}

.pagination li.active {
  font-weight: bold;
}

.pagination li a {
  display: block;
  padding: 5px 10px;
  color: black;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.pagination li a:hover {
  background-color: gray;
  color: white;
}

    .btn.btn-warning {
      background-color: orange;
      color: #ececec;
    }
  </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div style=\"align-items: center\">
        <section class=\"display-product-table\">
        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table table-bordered\" style=\"border\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                {% set productsPerPage = 5 %}
                {% set totalProducts = data|length %}
                {% set totalPages = (totalProducts / productsPerPage)|round(0, 'ceil') %}
                {% set currentPage = app.request.query.get('page', 1) %}
                {% set start = (currentPage - 1) * productsPerPage %}
                {% for cate in data[start:5] %}
                    <tr>
                        <td style=\"vertical-align: middle;\">{{cate.getId()}}</td>
                        <td style=\"vertical-align: middle;\"><img src=\"{{ asset('uploads/product/' ~ cate.getPhoto()) }}\" class=\"product-image\" /></td>
                        <td style=\"vertical-align: middle;\">{{cate.getName()}}</td>
                        <td>
                            <a href=\"javascript:delete123('{{path('app_delete_cate',{'id':cate.getId()})}}')\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i> </a>
                            <a href=\"{{path('app_edit_cate',{'id':cate.getId()})}}\" class=\"btn btn-warning\"> <i class=\"fas fa-edit\"></i></a>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
            </div>
             <ul class=\"pagination\">
                {% for page in 1..totalPages %}
                    <li class=\"page-item {% if currentPage == page %}active{% endif %}\">
                        <a class=\"page-link\" href=\"?page={{ page }}\">{{ page }}</a>
                    </li>
                {% endfor %}
            </ul>
        </section>
    </div>
</div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script>
    function delete123(url) {
      if (confirm(\"Confirm ???\")) {
        window.location.href = url;
      }
    }
  </script>
{% endblock %}
", "category/list.html.twig", "C:\\Users\\huynh\\Semi\\templates\\category\\list.html.twig");
    }
}
