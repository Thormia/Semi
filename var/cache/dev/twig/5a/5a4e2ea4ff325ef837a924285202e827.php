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

/* cart/index.html.twig */
class __TwigTemplate_ed4a734b8eef6e423e3551ddb8f251e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "cart/index.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 74
        $this->loadTemplate("footer.html.twig", "cart/index.html.twig", 74)->display($context);
        // line 75
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

        echo "Cart manager
";
        
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
        echo "<style>
  .button {
\tmargin-left:29.5rem;
\tmargin-bottom:20px;
    display: inline-block;
    padding: 10px 20px;
    background-color: black;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
  }

  .button:hover {
    background-color: gray;
    color: black;
  }
  .quantity {
\tmargin: 2rem;

  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo " <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
\t<div class=\"container\" style=\"margin-top: 80px;margin-bottom:80px\">
\t\t<a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\" class=\"button\">Add another product</a>
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>STT</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th style=\"text-align:right;width:10px\">Quantity</th>
\t\t\t\t<th style=\"text-align:right\">Total</th>
\t\t\t\t<th style=\"text-align:right\">Action</th>
\t\t\t</tr>
\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart_manager"]) || array_key_exists("cart_manager", $context) ? $context["cart_manager"] : (function () { throw new RuntimeError('Variable "cart_manager" does not exist.', 47, $this->source); })()), "items", [], "any", false, false, false, 47));
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
            // line 48
            echo "\t\t\t\t<tr>
\t\t\t\t\t<form action=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_update");
            echo "\" method=\"POST\">
\t\t\t\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td style=\"border-bottom: 1px solid #dee2e6\">";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 53), "price", [], "any", false, false, false, 53), 2, ".", ","), "html", null, true);
            echo "\$</td>
\t\t\t\t\t\t<td>
                            <input type='hidden' value='";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
            echo "' name='product_id'/>
\t\t\t\t\t\t\t<input style=\"text-align:right\"type='number' onchange=\"this.form.submit()\" value='";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 56), "html", null, true);
            echo "' min=\"1\" name='qty'/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"text-align:right;border-bottom: 1px solid #dee2e6\">";
            // line 58
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 58), 2, ".", ","), "html", null, true);
            echo "\$</td>
\t\t\t\t\t\t<td style=\"text-align:right;border-bottom: 1px solid #dee2e6\">
\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["product_id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">Remove</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</form>
\t\t\t\t</tr>
\t\t\t";
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
        // line 65
        echo "\t\t\t<tr>
\t\t\t\t<td colspans=\"5\">SUM</td>
\t\t\t\t<td>";
        // line 67
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart_manager"]) || array_key_exists("cart_manager", $context) ? $context["cart_manager"] : (function () { throw new RuntimeError('Variable "cart_manager" does not exist.', 67, $this->source); })()), "amount", [], "any", false, false, false, 67), 2, ".", ","), "html", null, true);
        echo "\$</td>
\t\t\t</tr>
\t\t</table>
\t\t<a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order");
        echo "\" class=\"button\" style=\"margin-left:32rem\">Check out</a>
\t\t<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout");
        echo "\" class=\"button\" style=\"margin-left:32rem\">Pay</a>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "<script src=\"assets/js/custom.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 76,  260 => 75,  247 => 71,  243 => 70,  237 => 67,  233 => 65,  214 => 60,  209 => 58,  204 => 56,  200 => 55,  195 => 53,  191 => 52,  186 => 50,  182 => 49,  179 => 48,  162 => 47,  149 => 37,  139 => 29,  129 => 28,  97 => 5,  87 => 4,  67 => 2,  57 => 75,  55 => 74,  53 => 28,  51 => 4,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"header.html.twig\" %}
{% block title %}Cart manager
{% endblock %}
{% block stylesheets %}
<style>
  .button {
\tmargin-left:29.5rem;
\tmargin-bottom:20px;
    display: inline-block;
    padding: 10px 20px;
    background-color: black;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
  }

  .button:hover {
    background-color: gray;
    color: black;
  }
  .quantity {
\tmargin: 2rem;

  }
</style>
{% endblock %}
{% block body %}
 <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
\t<div class=\"container\" style=\"margin-top: 80px;margin-bottom:80px\">
\t\t<a href=\"{{path('app_product')}}\" class=\"button\">Add another product</a>
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>STT</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th>Price</th>
\t\t\t\t<th style=\"text-align:right;width:10px\">Quantity</th>
\t\t\t\t<th style=\"text-align:right\">Total</th>
\t\t\t\t<th style=\"text-align:right\">Action</th>
\t\t\t</tr>
\t\t\t{% for item in cart_manager.items%}
\t\t\t\t<tr>
\t\t\t\t\t<form action=\"{{path('app_cart_update')}}\" method=\"POST\">
\t\t\t\t\t\t<td>{{loop.index}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{{item.product.name}}</td>
\t\t\t\t\t\t<td style=\"border-bottom: 1px solid #dee2e6\">{{item.product.price|number_format(2, '.', ',')}}\$</td>
\t\t\t\t\t\t<td>
                            <input type='hidden' value='{{item.product.id}}' name='product_id'/>
\t\t\t\t\t\t\t<input style=\"text-align:right\"type='number' onchange=\"this.form.submit()\" value='{{item.quantity}}' min=\"1\" name='qty'/>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"text-align:right;border-bottom: 1px solid #dee2e6\">{{item.amount|number_format(2, '.', ',')}}\$</td>
\t\t\t\t\t\t<td style=\"text-align:right;border-bottom: 1px solid #dee2e6\">
\t\t\t\t\t\t\t<a href=\"{{path('app_cart_remove',{'product_id':item.product.id})}}\">Remove</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</form>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t<tr>
\t\t\t\t<td colspans=\"5\">SUM</td>
\t\t\t\t<td>{{cart_manager.amount|number_format(2, '.', ',')}}\$</td>
\t\t\t</tr>
\t\t</table>
\t\t<a href=\"{{path('app_order')}}\" class=\"button\" style=\"margin-left:32rem\">Check out</a>
\t\t<a href=\"{{path('checkout')}}\" class=\"button\" style=\"margin-left:32rem\">Pay</a>
\t</div>
{% endblock %}
{% include \"footer.html.twig\" %}
{% block javascripts %}
<script src=\"assets/js/custom.js\"></script>
{% endblock %}
", "cart/index.html.twig", "E:\\BTEC\\Semi\\templates\\cart\\index.html.twig");
    }
}
