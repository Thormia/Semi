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

/* header.html.twig */
class __TwigTemplate_9eb2e76aa0c0b8e6d426e99edb4b2c71 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header class=\"\">
  <nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><h2>Semi</h2></a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home
              <span class=\"sr-only\">(current)</span>
            </a>
          </li> 
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\">Our Products</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        echo "\">About Us</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contact Us</a>
          </li>
          <li class=\"nav-item\">
              ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo "\">Profile</a>
              ";
        } else {
            // line 28
            echo "                <a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
              ";
        }
        // line 30
        echo "            </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\">Cart</a> 
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
<link rel=\"stylesheet\" href=\"assets/css/templatemo-sixteen.css\">
<link rel=\"stylesheet\" href=\"assets/css/owl.css\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
<link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<script>
  document.querySelector('.navbar-toggler').addEventListener('click', function() {
    document.querySelector('.navbar-collapse').classList.toggle('show');
  });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  98 => 30,  92 => 28,  86 => 26,  84 => 25,  78 => 22,  72 => 19,  66 => 16,  58 => 11,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"\">
  <nav class=\"navbar navbar-expand-lg\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"{{path('app_home')}}\"><h2>Semi</h2></a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_home')}}\">Home
              <span class=\"sr-only\">(current)</span>
            </a>
          </li> 
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_product')}}\">Our Products</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_about')}}\">About Us</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_contact')}}\">Contact Us</a>
          </li>
          <li class=\"nav-item\">
              {% if app.user %}
                <a class=\"nav-link\" href=\"{{ path('app_profile') }}\">Profile</a>
              {% else %}
                <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a>
              {% endif %}
            </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_cart')}}\">Cart</a> 
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<link rel=\"stylesheet\" href=\"assets/css/fontawesome.css\">
<link rel=\"stylesheet\" href=\"assets/css/templatemo-sixteen.css\">
<link rel=\"stylesheet\" href=\"assets/css/owl.css\">
<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap\" rel=\"stylesheet\">
<link href=\"vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
<script>
  document.querySelector('.navbar-toggler').addEventListener('click', function() {
    document.querySelector('.navbar-collapse').classList.toggle('show');
  });
</script>", "header.html.twig", "C:\\Users\\huynh\\Semi\\templates\\header.html.twig");
    }
}
