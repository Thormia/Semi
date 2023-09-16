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

/* order/index.html.twig */
class __TwigTemplate_88e4f94836beeda020687d5107b2aa46 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["order_form"]) || array_key_exists("order_form", $context) ? $context["order_form"] : (function () { throw new RuntimeError('Variable "order_form" does not exist.', 1, $this->source); })()), ["bootstrap_4_layout.html.twig"], true);
        // line 2
        $this->loadTemplate("header.html.twig", "order/index.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 61
        $this->loadTemplate("footer.html.twig", "order/index.html.twig", 61)->display($context);
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Order Checkout
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "<style>
  .button {
\t  margin-left:29.5rem;
\t  margin-bottom:20px;
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
        echo "\t<div class=\"container\" style=\"margin-top: 80px;margin-bottom:80px\">
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["order_form"]) || array_key_exists("order_form", $context) ? $context["order_form"] : (function () { throw new RuntimeError('Variable "order_form" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["order_form"]) || array_key_exists("order_form", $context) ? $context["order_form"] : (function () { throw new RuntimeError('Variable "order_form" does not exist.', 31, $this->source); })()), 'widget');
        echo "
            <input type=\"submit\" value=\"Confirm\" class=\"button\" />
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["order_form"]) || array_key_exists("order_form", $context) ? $context["order_form"] : (function () { throw new RuntimeError('Variable "order_form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>Index</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th style=\"text-align:right\"  >Price</th>
\t\t\t\t<th style=\"text-align:right\">Quantity</th>
\t\t\t\t<th style=\"text-align:right\">Total</th>
\t\t\t</tr>
\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart_manager"]) || array_key_exists("cart_manager", $context) ? $context["cart_manager"] : (function () { throw new RuntimeError('Variable "cart_manager" does not exist.', 42, $this->source); })()), "items", [], "any", false, false, false, 42));
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
            // line 43
            echo "\t\t\t\t<tr>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td style=\"text-align:right\">";
            // line 47
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47), 2, ".", ","), "html", null, true);
            echo "\$</td>
                    <td style=\"text-align:right\">
                        ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 49), "html", null, true);
            echo "
                    </td>
                    <td style=\"text-align:right\">";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 51), 2, ".", ","), "html", null, true);
            echo "\$</td>
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
        // line 54
        echo "\t\t\t<tr>
\t\t\t\t<td colspan='4' >SUM</td>
\t\t\t\t<td>";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart_manager"]) || array_key_exists("cart_manager", $context) ? $context["cart_manager"] : (function () { throw new RuntimeError('Variable "cart_manager" does not exist.', 56, $this->source); })()), "amount", [], "any", false, false, false, 56), 2, ".", ","), "html", null, true);
        echo "\$</td>
\t\t\t</tr>
\t\t</table>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 63, $this->source); })()))) {
            // line 64
            echo "    <script> alert(\"";
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 64, $this->source); })()), "html", null, true);
            echo "\");</script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 64,  255 => 63,  245 => 62,  230 => 56,  226 => 54,  209 => 51,  204 => 49,  199 => 47,  195 => 46,  190 => 44,  187 => 43,  170 => 42,  158 => 33,  153 => 31,  149 => 30,  146 => 29,  136 => 28,  108 => 8,  98 => 7,  78 => 4,  68 => 62,  66 => 61,  64 => 28,  61 => 27,  59 => 7,  56 => 6,  54 => 4,  51 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme order_form 'bootstrap_4_layout.html.twig' %}
{% include \"header.html.twig\" %}

{% block title %}Order Checkout
{% endblock %}

{% block stylesheets %}
<style>
  .button {
\t  margin-left:29.5rem;
\t  margin-bottom:20px;
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
</style>
{% endblock %}

{% block body %}
\t<div class=\"container\" style=\"margin-top: 80px;margin-bottom:80px\">
        {{form_start(order_form)}}
            {{form_widget(order_form)}}
            <input type=\"submit\" value=\"Confirm\" class=\"button\" />
        {{form_end(order_form)}}
\t\t<table class=\"table\">
\t\t\t<tr>
\t\t\t\t<th>Index</th>
\t\t\t\t<th>Product</th>
\t\t\t\t<th style=\"text-align:right\"  >Price</th>
\t\t\t\t<th style=\"text-align:right\">Quantity</th>
\t\t\t\t<th style=\"text-align:right\">Total</th>
\t\t\t</tr>
\t\t\t{% for item in cart_manager.items %}
\t\t\t\t<tr>
                    <td>{{loop.index}}</td>
                    <td>
                        {{item.product.name}}</td>
                    <td style=\"text-align:right\">{{item.product.price|number_format(2, '.', ',')}}\$</td>
                    <td style=\"text-align:right\">
                        {{item.quantity}}
                    </td>
                    <td style=\"text-align:right\">{{item.amount|number_format(2, '.', ',')}}\$</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t<tr>
\t\t\t\t<td colspan='4' >SUM</td>
\t\t\t\t<td>{{cart_manager.amount|number_format(2, '.', ',')}}\$</td>
\t\t\t</tr>
\t\t</table>
\t</div>
{% endblock %}
{% include \"footer.html.twig\" %}
{% block javascripts %}
{% if message is not empty %}
    <script> alert(\"{{message}}\");</script>
{% endif %}
{% endblock %}
", "order/index.html.twig", "C:\\Users\\huynh\\Semi\\templates\\order\\index.html.twig");
    }
}
