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

/* order/orderlist.html.twig */
class __TwigTemplate_8aa901772898584933b7a37491ba8cef extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/orderlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/orderlist.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/orderlist.html.twig", 1);
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

        echo "List of Order";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
";
        // line 81
        echo "
<div class=\"container\">
    <div style=\"align-items: center\">
        ";
        // line 85
        echo "        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style=\"text-align:left\">Customer Name</th>
                        <th style=\"text-align:left\">Customer Address</th>
                        <th style=\"text-align:left\">Customer Phone</th>
                        <th style=\"text-align:left\">Date Out</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 100
        $context["productsPerPage"] = 5;
        // line 101
        echo "                    ";
        $context["totalProducts"] = twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()));
        // line 102
        echo "                    ";
        $context["totalPages"] = twig_round(((isset($context["totalProducts"]) || array_key_exists("totalProducts", $context) ? $context["totalProducts"] : (function () { throw new RuntimeError('Variable "totalProducts" does not exist.', 102, $this->source); })()) / (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 102, $this->source); })())), 0, "ceil");
        // line 103
        echo "                    ";
        $context["currentPage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "request", [], "any", false, false, false, 103), "query", [], "any", false, false, false, 103), "get", ["page", 1], "method", false, false, false, 103);
        // line 104
        echo "                    ";
        $context["start"] = (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 104, $this->source); })()) - 1) * (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 104, $this->source); })()));
        // line 105
        echo "                    ";
        $context["sortedData"] = twig_sort_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 105, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (((twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 105, $this->source); })()), "isStatus", [], "method", false, false, false, 105) == 1)) ? (1) : ( -1)); });
        // line 106
        echo "
                    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["sortedData"]) || array_key_exists("sortedData", $context) ? $context["sortedData"] : (function () { throw new RuntimeError('Variable "sortedData" does not exist.', 107, $this->source); })()), (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 107, $this->source); })()), 5));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 108
            echo "                    <tr>
                        <td style=\"vertical-align: middle;\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getid", [], "method", false, false, false, 109), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle;text-align:left\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getCustomerName", [], "method", false, false, false, 110), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle;text-align:left\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getCustomerAddress", [], "method", false, false, false, 111), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle;text-align:left\">";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getCustomerPhone", [], "method", false, false, false, 112), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle;text-align:left\">";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "getDateOut", [], "method", false, false, false, 113), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td style=\"vertical-align: middle;\">";
            // line 114
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "TotalPrice", [], "method", false, false, false, 114), 2, ".", ","), "html", null, true);
            echo "\$</td>
                        <td style=\"vertical-align: middle;\">
                            ";
            // line 116
            if ((twig_get_attribute($this->env, $this->source, $context["order"], "isStatus", [], "method", false, false, false, 116) == 1)) {
                // line 117
                echo "                            done
                            ";
            } else {
                // line 119
                echo "                            pending
                            ";
            }
            // line 121
            echo "                        </td>
                        <td style=\"vertical-align: middle;\">
                            <a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orderitem_view", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "method", false, false, false, 123)]), "html", null, true);
            echo "\"  ><span class=\"icon-bg-gray\"><i class=\"fas fa-info-circle\"></i></span></a>
                            <a href=\"javascript:confirmch('";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mark", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "method", false, false, false, 124)]), "html", null, true);
            echo "')\"><i class=\"fas fa-check check-red ms-2\"></i>  </a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                </tbody>
            </table>
            </div>
            <ul class=\"pagination\">
                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 132, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 133
            echo "                    <li class=\"page-item ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 133, $this->source); })()) == $context["page"])) {
                echo "active";
            }
            echo "\">
                        <a class=\"page-link\" href=\"?page=";
            // line 134
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
        // line 137
        echo "            </ul>
        </section>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "<script>
    function confirmch(url) {
        if (confirm(\"Are you sure?!\")) {
            window.location.href = url;
        }
    }
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 153
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 154
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cssK/Base.css"), "html", null, true);
        echo "\"/>
<link rel=\"stylesheet\" href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cssK/Oderlist.css"), "html", null, true);
        echo "\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/orderlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 156,  281 => 155,  276 => 154,  266 => 153,  249 => 145,  239 => 144,  224 => 137,  213 => 134,  206 => 133,  202 => 132,  196 => 128,  186 => 124,  182 => 123,  178 => 121,  174 => 119,  170 => 117,  168 => 116,  163 => 114,  159 => 113,  155 => 112,  151 => 111,  147 => 110,  143 => 109,  140 => 108,  136 => 107,  133 => 106,  130 => 105,  127 => 104,  124 => 103,  121 => 102,  118 => 101,  116 => 100,  99 => 85,  94 => 81,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}List of Order{% endblock %}

{% block body %}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
{# <style>
    .display-product-table table {
      width: 80%;
      text-align: center;
    }
    .container{
    font-family:Palatino;
}

    .display-product-table table thead th {
      padding: 1rem;
      font-size: 1rem;
      font-family:Palatino;
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
   
    
    .btn {
      width: 20%;
      text-align: center;
      border-radius: 0.5rem;
      margin-top: 0.5rem;
    }
    

    .btn.btn-danger {
      background-color: red;
      color: #ececec;
    }
 .pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  padding: 0;
}

.check-red {
    color: red;
  }

</style> #}

<div class=\"container\">
    <div style=\"align-items: center\">
        {# <section class=\"display-product-table\"> #}
        <div style=\"display: flex; justify-content: center;\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style=\"text-align:left\">Customer Name</th>
                        <th style=\"text-align:left\">Customer Address</th>
                        <th style=\"text-align:left\">Customer Phone</th>
                        <th style=\"text-align:left\">Date Out</th>
                        <th>Total Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% set productsPerPage = 5 %}
                    {% set totalProducts = data|length %}
                    {% set totalPages = (totalProducts / productsPerPage)|round(0,\"ceil\") %}
                    {% set currentPage = app.request.query.get('page', 1) %}
                    {% set start = (currentPage - 1) * productsPerPage %}
                    {% set sortedData = data|sort((a, b) => a.isStatus() == 1 ? 1 : -1) %}

                    {% for order in sortedData[start:5] %}
                    <tr>
                        <td style=\"vertical-align: middle;\">{{ order.getid() }}</td>
                        <td style=\"vertical-align: middle;text-align:left\">{{ order.getCustomerName() }}</td>
                        <td style=\"vertical-align: middle;text-align:left\">{{ order.getCustomerAddress() }}</td>
                        <td style=\"vertical-align: middle;text-align:left\">{{ order.getCustomerPhone() }}</td>
                        <td style=\"vertical-align: middle;text-align:left\">{{ order.getDateOut()|date('d-m-Y') }}</td>
                        <td style=\"vertical-align: middle;\">{{ order.TotalPrice()|number_format(2, '.', ',') }}\$</td>
                        <td style=\"vertical-align: middle;\">
                            {% if order.isStatus() == 1 %}
                            done
                            {% else %}
                            pending
                            {% endif %}
                        </td>
                        <td style=\"vertical-align: middle;\">
                            <a href=\"{{ path('app_orderitem_view', {'id': order.getId()}) }}\"  ><span class=\"icon-bg-gray\"><i class=\"fas fa-info-circle\"></i></span></a>
                            <a href=\"javascript:confirmch('{{ path('app_mark', {'id': order.getId()}) }}')\"><i class=\"fas fa-check check-red ms-2\"></i>  </a>
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
<script>
    function confirmch(url) {
        if (confirm(\"Are you sure?!\")) {
            window.location.href = url;
        }
    }
</script>
{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\"/>
<link rel=\"stylesheet\" href=\"{{asset('cssK/Base.css')}}\"/>
<link rel=\"stylesheet\" href=\"{{asset('cssK/Oderlist.css')}}\"/>
{% endblock %}", "order/orderlist.html.twig", "E:\\BTEC\\Semi\\templates\\order\\orderlist.html.twig");
    }
}
