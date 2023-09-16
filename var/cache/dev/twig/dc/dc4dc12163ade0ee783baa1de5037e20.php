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

/* product/Customer/detail.html.twig */
class __TwigTemplate_5f968cbd3c041d40d874d7dcb133bb16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Customer/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Customer/detail.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "product/Customer/detail.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->loadTemplate("footer.html.twig", "product/Customer/detail.html.twig", 73)->display($context);
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        
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

        echo "List of Product";
        
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
      width: 100%;
      text-align: center;
    }

    .display-product-table table thead th {
      padding: 1.5rem;
      font-size: 1.5rem;
      background-color: black;
      color: white;
      font-weight: bold;
    }

    .display-product-table table td {
      padding: 1.5rem;
      font-size: 2rem;
      color: var(--black);
      background-color: var(--black);
    }
      
    .product-image {
      max-width: 200px; 
      max-height: 200px; 
      object-fit: contain; 
    }
    
  </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "<div class=\"container\">
    <div style=\"align-items: center\">
        <section class=\"display-product-table\">
            <table class=\"table table-bordered\" style=\"border\">
                <tbody>
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "                    <tr>
                       <th style=\"background-color: black; color: white; font-weight: bold;\">Image</th>
                       <td style=\"vertical-align: middle;\"><img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/product/" . twig_get_attribute($this->env, $this->source, $context["product"], "getPhoto", [], "method", false, false, false, 46))), "html", null, true);
            echo "\" class=\"product-image\" /></td>
                    </tr>
                    <tr>
                       <th style=\"background-color: black; color: white; font-weight: bold;\">Name</th>
                       <td style=\"vertical-align: middle;\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "method", false, false, false, 50), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: black; color: white; font-weight: bold;\">Price</th>
                       <td style=\"vertical-align: middle;\">";
            // line 54
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 54), 2, ".", ","), "html", null, true);
            echo "\$</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: black; color: white; font-weight: bold;\">Description</th>
                       <td style=\"vertical-align: middle;\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 58), "html", null, true);
            echo "</td>
                    </tr>
                    <tr>
                    <form action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["product_id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 61)]), "html", null, true);
            echo "\" method=\"post\">
                    <button type=\"submit\" class=\"btn\" name=\"add_to_cart\" style=\"background-color:red;color: white; margin-bottom: 10px;line-height:3rem; font-size:1.7rem\">Add to cart</button> </form>
                    </tr>
                    </form>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </tbody>
            </table>
        </section>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
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
        return "product/Customer/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 75,  223 => 74,  208 => 66,  197 => 61,  191 => 58,  184 => 54,  177 => 50,  170 => 46,  166 => 44,  162 => 43,  155 => 38,  145 => 37,  105 => 5,  95 => 4,  76 => 2,  66 => 74,  64 => 73,  61 => 72,  59 => 37,  56 => 36,  54 => 4,  51 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"header.html.twig\" %}
{% block title %}List of Product{% endblock %}

{% block stylesheets %}
 <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
 <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  <style>
    .display-product-table table {
      width: 100%;
      text-align: center;
    }

    .display-product-table table thead th {
      padding: 1.5rem;
      font-size: 1.5rem;
      background-color: black;
      color: white;
      font-weight: bold;
    }

    .display-product-table table td {
      padding: 1.5rem;
      font-size: 2rem;
      color: var(--black);
      background-color: var(--black);
    }
      
    .product-image {
      max-width: 200px; 
      max-height: 200px; 
      object-fit: contain; 
    }
    
  </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div style=\"align-items: center\">
        <section class=\"display-product-table\">
            <table class=\"table table-bordered\" style=\"border\">
                <tbody>
                    {% for product in data %}
                    <tr>
                       <th style=\"background-color: black; color: white; font-weight: bold;\">Image</th>
                       <td style=\"vertical-align: middle;\"><img src=\"{{ asset('uploads/product/' ~ product.getPhoto()) }}\" class=\"product-image\" /></td>
                    </tr>
                    <tr>
                       <th style=\"background-color: black; color: white; font-weight: bold;\">Name</th>
                       <td style=\"vertical-align: middle;\">{{ product.getName() }}</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: black; color: white; font-weight: bold;\">Price</th>
                       <td style=\"vertical-align: middle;\">{{ product.getPrice()|number_format(2, '.', ',') }}\$</td>
                    </tr>
                    <tr>
                       <th style=\"background-color: black; color: white; font-weight: bold;\">Description</th>
                       <td style=\"vertical-align: middle;\">{{ product.getDescription() }}</td>
                    </tr>
                    <tr>
                    <form action=\"{{ path('app_cart_add', {'product_id': product.getId()}) }}\" method=\"post\">
                    <button type=\"submit\" class=\"btn\" name=\"add_to_cart\" style=\"background-color:red;color: white; margin-bottom: 10px;line-height:3rem; font-size:1.7rem\">Add to cart</button> </form>
                    </tr>
                    </form>
                    {% endfor %}
                </tbody>
            </table>
        </section>
    </div>
</div>
{% endblock %}

{% include \"footer.html.twig\" %}
{% block javascripts %}
  <script>
    function delete123(url) {
      if (confirm(\"Go go go!\")) {
        window.location.href = url;
      }
    }
  </script>
{% endblock %}
", "product/Customer/detail.html.twig", "C:\\Users\\huynh\\Semi\\templates\\product\\Customer\\detail.html.twig");
    }
}
