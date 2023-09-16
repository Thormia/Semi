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

/* category/index.html.twig */
class __TwigTemplate_ca8e5ef16af9a7425860187aef739dbd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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
      display: flex;
      justify-content: center;
    }

    form {
      margin-bottom: 20px;
      background-color:#F5F5F5;
    }

    form > div {
      padding: 10px;
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
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
   <h3 style=\" center;margin-top:10%;margin-left:12%\">Category Information</h3>  
      <div class=\"col\">
        <label for=\"product_name\">";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 46, $this->source); })()), "Name", [], "any", false, false, false, 46)), "html", null, true);
        echo "</label>
        <input type=\"text\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 47, $this->source); })()), "Name", [], "any", false, false, false, 47)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 47, $this->source); })()), "Name", [], "any", false, false, false, 47)), "html", null, true);
        echo "\" class=\"form-control\">
      </div>
    <div>
      <label for=\"product_Photo\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 50, $this->source); })()), "Photo", [], "any", false, false, false, 50)), "html", null, true);
        echo "</label>
      <input type=\"file\" name=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 51, $this->source); })()), "Photo", [], "any", false, false, false, 51)), "html", null, true);
        echo "\" class=\"form-control\" id=\"photoInput\">
    </div>
    <div class=\"image-preview-container\">
      <img src=\"#\" alt=\"Preview Image\" class=\"preview-image\" id=\"previewImage\">
    </div>
    <div class=\"d-flex justify-content-center my-3\">
      <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary mx-2\">
    </div>
    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["product_form"]) || array_key_exists("product_form", $context) ? $context["product_form"] : (function () { throw new RuntimeError('Variable "product_form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "
  </div>
  <script>
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
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 59,  131 => 51,  127 => 50,  119 => 47,  115 => 46,  109 => 43,  68 => 4,  58 => 3,  35 => 1,);
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
      display: flex;
      justify-content: center;
    }

    form {
      margin-bottom: 20px;
      background-color:#F5F5F5;
    }

    form > div {
      padding: 10px;
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
   <h3 style=\" center;margin-top:10%;margin-left:12%\">Category Information</h3>  
      <div class=\"col\">
        <label for=\"product_name\">{{ field_label(product_form.Name) }}</label>
        <input type=\"text\" value=\"{{ field_value(product_form.Name) }}\" name=\"{{ field_name(product_form.Name) }}\" class=\"form-control\">
      </div>
    <div>
      <label for=\"product_Photo\">{{ field_label(product_form.Photo) }}</label>
      <input type=\"file\" name=\"{{ field_name(product_form.Photo) }}\" class=\"form-control\" id=\"photoInput\">
    </div>
    <div class=\"image-preview-container\">
      <img src=\"#\" alt=\"Preview Image\" class=\"preview-image\" id=\"previewImage\">
    </div>
    <div class=\"d-flex justify-content-center my-3\">
      <input type=\"submit\" value=\"Submit\" class=\"btn btn-primary mx-2\">
    </div>
    {{ form_end(product_form) }}
  </div>
  <script>
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
", "category/index.html.twig", "C:\\Users\\huynh\\Semi\\templates\\category\\index.html.twig");
    }
}
