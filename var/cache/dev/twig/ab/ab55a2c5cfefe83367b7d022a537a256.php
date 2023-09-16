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

/* product/Customer/products.html.twig */
class __TwigTemplate_f5de9c9c57a7b292a22b9dcc0a73910c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Customer/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Customer/products.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "

";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 89
        $this->loadTemplate("footer.html.twig", "product/Customer/products.html.twig", 89)->display($context);
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style1.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/templatemo-sixteen.css"), "html", null, true);
        echo "\">
    
<style>
 .pagination {
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  padding: 0;
}
.pagination li {
  display: inline-block;
  margin-top:20px;
}
.pagination li.active {
  font-weight: bold;
}
.pagination li a {
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  color: black;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 3px;
}
.pagination li a:hover {
  background-color: gray;
  color: black;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "<body data-new-gr-c-s-check-loaded=\"14.1123.0\" data-gr-ext-installed=\"\">
<div id=\"preloader\">
<!-- ***** Preloader Start ***** -->
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    ";
        // line 50
        $this->loadTemplate("header.html.twig", "product/Customer/products.html.twig", 50)->display($context);
        // line 51
        echo "    <div class=\"container\">
        <section class=\"products\">
            <h1 class=\"heading\">ALL PRODUCTS</h1>
            <div class=\"box-container\">
                ";
        // line 55
        $context["productsPerPage"] = 9;
        // line 56
        echo "                ";
        $context["totalProducts"] = twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()));
        // line 57
        echo "                ";
        $context["totalPages"] = twig_round(((isset($context["totalProducts"]) || array_key_exists("totalProducts", $context) ? $context["totalProducts"] : (function () { throw new RuntimeError('Variable "totalProducts" does not exist.', 57, $this->source); })()) / (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 57, $this->source); })())), 0, "ceil");
        // line 58
        echo "                ";
        $context["currentPage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "query", [], "any", false, false, false, 58), "get", ["page", 1], "method", false, false, false, 58);
        // line 59
        echo "                ";
        $context["start"] = (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 59, $this->source); })()) - 1) * (isset($context["productsPerPage"]) || array_key_exists("productsPerPage", $context) ? $context["productsPerPage"] : (function () { throw new RuntimeError('Variable "productsPerPage" does not exist.', 59, $this->source); })()));
        // line 60
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()), (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 60, $this->source); })()), 9));
        foreach ($context['_seq'] as $context["_key"] => $context["sp"]) {
            // line 61
            echo "                    <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["product_id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 61)]), "html", null, true);
            echo "\" method=\"post\">
                        <div class=\"box\">
                            <div class=\"image-container\">
                                <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/product/" . twig_get_attribute($this->env, $this->source, $context["sp"], "getPhoto", [], "method", false, false, false, 64))), "html", null, true);
            echo "\" alt=\"\">
                            </div>
                            <h3>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getName", [], "method", false, false, false, 66), "html", null, true);
            echo "</h3>
                            <div class=\"price\">";
            // line 67
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sp"], "getPrice", [], "method", false, false, false, 67), 2, ".", ","), "html", null, true);
            echo "\$</div>
                            <button type=\"submit\" class=\"btn\" name=\"add_to_cart\" style=\"background-color:black;line-height:3rem; font-size:1.7rem\">Add to cart</button>
                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["sp"], "getId", [], "method", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-warning\" style=\"font-weight:bold\">More detail</a>
                            </div>
                    </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </div>
            <nav>
                <ul class=\"pagination\">
                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 76, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 77
            echo "                        <li class=\"pagination pagination-lg ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 77, $this->source); })()) == $context["page"])) {
                echo "active";
            }
            echo "\">
                            <a class=\"page-link\" href=\"?page=";
            // line 78
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
        // line 81
        echo "                </ul>
            </nav>
                
            </div>
        </section>
    </div>
    </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "    <script src=\"assets/js/custom.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/Customer/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 91,  254 => 90,  237 => 81,  226 => 78,  219 => 77,  215 => 76,  210 => 73,  200 => 69,  195 => 67,  191 => 66,  186 => 64,  179 => 61,  174 => 60,  171 => 59,  168 => 58,  165 => 57,  162 => 56,  160 => 55,  154 => 51,  152 => 50,  140 => 40,  130 => 39,  87 => 4,  82 => 3,  72 => 2,  61 => 93,  59 => 90,  57 => 89,  55 => 39,  51 => 37,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/style1.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/templatemo-sixteen.css') }}\">
    
<style>
 .pagination {
  list-style: none;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  padding: 0;
}
.pagination li {
  display: inline-block;
  margin-top:20px;
}
.pagination li.active {
  font-weight: bold;
}
.pagination li a {
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  color: black;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 3px;
}
.pagination li a:hover {
  background-color: gray;
  color: black;
}
</style>
{% endblock %}


{% block body %}
<body data-new-gr-c-s-check-loaded=\"14.1123.0\" data-gr-ext-installed=\"\">
<div id=\"preloader\">
<!-- ***** Preloader Start ***** -->
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    {% include \"header.html.twig\" %}
    <div class=\"container\">
        <section class=\"products\">
            <h1 class=\"heading\">ALL PRODUCTS</h1>
            <div class=\"box-container\">
                {% set productsPerPage = 9 %}
                {% set totalProducts = data|length %}
                {% set totalPages = (totalProducts / productsPerPage)|round(0, 'ceil') %}
                {% set currentPage = app.request.query.get('page', 1) %}
                {% set start = (currentPage - 1) * productsPerPage %}
                {% for sp in data[start:9] %}
                    <form action=\"{{ path('app_cart_add', {'product_id': sp.getId()}) }}\" method=\"post\">
                        <div class=\"box\">
                            <div class=\"image-container\">
                                <img src=\"{{ asset('uploads/product/' ~ sp.getPhoto()) }}\" alt=\"\">
                            </div>
                            <h3>{{ sp.getName() }}</h3>
                            <div class=\"price\">{{ sp.getPrice()|number_format(2, '.', ',') }}\$</div>
                            <button type=\"submit\" class=\"btn\" name=\"add_to_cart\" style=\"background-color:black;line-height:3rem; font-size:1.7rem\">Add to cart</button>
                            <a href=\"{{path('app_product_detail',{'id':sp.getId()})}}\" class=\"btn btn-warning\" style=\"font-weight:bold\">More detail</a>
                            </div>
                    </form>
                {% endfor %}
            </div>
            <nav>
                <ul class=\"pagination\">
                    {% for page in 1..totalPages %}
                        <li class=\"pagination pagination-lg {% if currentPage == page %}active{% endif %}\">
                            <a class=\"page-link\" href=\"?page={{ page }}\">{{ page }}</a>
                        </li>
                    {% endfor %}
                </ul>
            </nav>
                
            </div>
        </section>
    </div>
    </body>
{% endblock %}
{% include \"footer.html.twig\" %}
{% block javascripts %}
    <script src=\"assets/js/custom.js\"></script>
{% endblock %}

</html>", "product/Customer/products.html.twig", "E:\\BTEC\\Semi\\templates\\product\\Customer\\products.html.twig");
    }
}
