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

/* product/Admin/products.html.twig */
class __TwigTemplate_aaec7b0be7c2e8421e12e6b9f0147ea3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Admin/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/Admin/products.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/Admin/products.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  <style>
    .container {
      font-family: Palatino;
    }

    form {
      margin-bottom: 20px;
      background-color:#F5F5F5;
    }

    .container {
      display: flex;
      justify-content: center;
    }

    form {
    }

    form > div {
      padding: 10px;
    }

    h1 {
      text-align: center;
    }

    .image-preview-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .preview-image {
      max-width: 150px;
      max-height: 150px;
      width: 150px; 
      height: 150px;
      object-fit: contain; 
    }

  </style>
</head>

<body>
  <div class=\"container\">
    ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 54, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
      <div class=\"col\">
      <h3 style=\" center;margin-top:4%;margin-left:15%\">PRODUCT Information</h3>  
      </div>
      <div class=\"col\">
        <label for=\"product_name\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 60, $this->source); })()), "name", [], "any", false, false, false, 60)), "html", null, true);
        echo "</label>
        <input type=\"text\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61)), "html", null, true);
        echo "\" class=\"form-control\">
      </div>
      <div class=\"col\">
        <label for=\"product_price\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 64, $this->source); })()), "price", [], "any", false, false, false, 64)), "html", null, true);
        echo " (\$)</label>
        <input type=\"text\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 65, $this->source); })()), "price", [], "any", false, false, false, 65)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 65, $this->source); })()), "price", [], "any", false, false, false, 65)), "html", null, true);
        echo "\" class=\"form-control\">
      </div>
    </div>
    <div>
      <label for=\"product_Description\">";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 69, $this->source); })()), "Description", [], "any", false, false, false, 69)), "html", null, true);
        echo "</label>
      <textarea name=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 70, $this->source); })()), "Description", [], "any", false, false, false, 70)), "html", null, true);
        echo "\" class=\"form-control\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 70, $this->source); })()), "Description", [], "any", false, false, false, 70)), "html", null, true);
        echo "</textarea>
    </div>

    <div>
      <label for=\"product_price\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 74, $this->source); })()), "photo", [], "any", false, false, false, 74)), "html", null, true);
        echo "</label>
      <input type=\"file\" name=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 75, $this->source); })()), "photo", [], "any", false, false, false, 75)), "html", null, true);
        echo "\" class=\"form-control\" id=\"photoInput\">
    </div>

    <!-- Container for image preview -->
    <div class=\"image-preview-container\">
      <img src=\"#\" alt=\"Preview Image\" class=\"preview-image\" id=\"previewImage\">
    </div>

    <div>
      <label for=\"product_category\">";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 84, $this->source); })()), "cate", [], "any", false, false, false, 84)), "html", null, true);
        echo "</label>
      <select name=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 85, $this->source); })()), "cate", [], "any", false, false, false, 85)), "html", null, true);
        echo "\" class=\"form-control\">
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldChoices(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 86, $this->source); })()), "cate", [], "any", false, false, false, 86)));
        foreach ($context['_seq'] as $context["label"] => $context["value"]) {
            // line 87
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "      </select>
    </div>

    <!-- Center the buttons using Bootstrap -->
    <div class=\"d-flex justify-content-center my-3\">
      <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary mx-2\">
      <input type=\"button\" value=\"Clear\" onclick=\"clearForm()\" class=\"btn btn-secondary mx-2\">
    </div>

    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 98, $this->source); })()), 'form_end');
        echo "
  </div>

  <script>
    function clearForm() {
      document.querySelector(\"form\").reset();
      document.getElementById(\"previewImage\").src = \"#\";
    }

    document.getElementById(\"photoInput\").addEventListener(\"change\", function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.addEventListener(\"load\", function() {
          document.getElementById(\"previewImage\").src = reader.result;
        });
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "product/Admin/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 98,  206 => 89,  195 => 87,  191 => 86,  187 => 85,  183 => 84,  171 => 75,  167 => 74,  158 => 70,  154 => 69,  145 => 65,  141 => 64,  133 => 61,  129 => 60,  120 => 54,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
  <style>
    .container {
      font-family: Palatino;
    }

    form {
      margin-bottom: 20px;
      background-color:#F5F5F5;
    }

    .container {
      display: flex;
      justify-content: center;
    }

    form {
    }

    form > div {
      padding: 10px;
    }

    h1 {
      text-align: center;
    }

    .image-preview-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .preview-image {
      max-width: 150px;
      max-height: 150px;
      width: 150px; 
      height: 150px;
      object-fit: contain; 
    }

  </style>
</head>

<body>
  <div class=\"container\">
    {{ form_start(product_form) }}
    <div class=\"row\">
      <div class=\"col\">
      <h3 style=\" center;margin-top:4%;margin-left:15%\">PRODUCT Information</h3>  
      </div>
      <div class=\"col\">
        <label for=\"product_name\">{{ field_label(product_form.name) }}</label>
        <input type=\"text\" value=\"{{ field_value(product_form.name) }}\" name=\"{{ field_name(product_form.name) }}\" class=\"form-control\">
      </div>
      <div class=\"col\">
        <label for=\"product_price\">{{ field_label(product_form.price) }} (\$)</label>
        <input type=\"text\" value=\"{{ field_value(product_form.price) }}\" name=\"{{ field_name(product_form.price) }}\" class=\"form-control\">
      </div>
    </div>
    <div>
      <label for=\"product_Description\">{{ field_label(product_form.Description) }}</label>
      <textarea name=\"{{ field_name(product_form.Description) }}\" class=\"form-control\">{{ field_value(product_form.Description) }}</textarea>
    </div>

    <div>
      <label for=\"product_price\">{{ field_label(product_form.photo) }}</label>
      <input type=\"file\" name=\"{{ field_name(product_form.photo) }}\" class=\"form-control\" id=\"photoInput\">
    </div>

    <!-- Container for image preview -->
    <div class=\"image-preview-container\">
      <img src=\"#\" alt=\"Preview Image\" class=\"preview-image\" id=\"previewImage\">
    </div>

    <div>
      <label for=\"product_category\">{{ field_label(product_form.cate) }}</label>
      <select name=\"{{ field_name(product_form.cate) }}\" class=\"form-control\">
        {% for label, value in field_choices(product_form.cate) %}
          <option value=\"{{ value }}\">{{ label }}</option>
        {% endfor %}
      </select>
    </div>

    <!-- Center the buttons using Bootstrap -->
    <div class=\"d-flex justify-content-center my-3\">
      <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary mx-2\">
      <input type=\"button\" value=\"Clear\" onclick=\"clearForm()\" class=\"btn btn-secondary mx-2\">
    </div>

    {{ form_end(product_form) }}
  </div>

  <script>
    function clearForm() {
      document.querySelector(\"form\").reset();
      document.getElementById(\"previewImage\").src = \"#\";
    }

    document.getElementById(\"photoInput\").addEventListener(\"change\", function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.addEventListener(\"load\", function() {
          document.getElementById(\"previewImage\").src = reader.result;
        });
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>
</html>
{% endblock %}
", "product/Admin/products.html.twig", "C:\\Users\\huynh\\Semi\\templates\\product\\Admin\\products.html.twig");
    }
}
