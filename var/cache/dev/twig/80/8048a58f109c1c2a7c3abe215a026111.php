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

/* profile/show.html.twig */
class __TwigTemplate_2f985ebcfb213975ebe202450a2d4ef7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

        // line 1
        echo "<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
<link href=\"assets/css/profile.css\" rel=\"stylesheet\">
";
        // line 3
        $this->loadTemplate("header.html.twig", "profile/show.html.twig", 3)->display($context);
        // line 4
        echo "
<body>
  <div class=\"main-content\">
    <!-- Top navbar -->

    <!-- Header -->
    <div class=\"header pb-8 pt-5 pt-lg-8 d-flex align-items-center\" style=\"min-height: 600px; background-image: url(https://cdn.pixabay.com/photo/2014/06/16/23/39/black-370118_1280.png); background-size: cover; background-position: center top;\">
        <!-- Mask -->
      <span class=\"mask bg-gradient-default opacity-8\"></span>
      <!-- Header container -->
      <div class=\"container-fluid d-flex align-items-center\">
        <div class=\"row\">
          <div class=\"col-lg-7 col-md-10\">
            <h1 class=\"display-2 text-white\">Hello <br> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "username", [], "any", false, false, false, 17), "html", null, true);
        echo "!</h1>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class=\"container-fluid mt--7\">

      </div>
        </div>
        <div class=\"col-xl-8 order-xl-1\">
          <div class=\"card bg-secondary shadow\">
            <div class=\"card-header bg-white border-0\">
              <div class=\"row align-items-center\">
                <div class=\"col-8\">
                  <h3 class=\"mb-0\">My account</h3>
                </div>
                <div class=\"col-4 text-right\">
                    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_profile");
        echo "\" class=\"btn btn-info\"><b>Edit profile </b></a>
                </div>
              </div>
            </div>
            <div class=\"card-body\" style=\"background-color: white;\">
              <form>
                <h6 class=\"heading-small text-muted mb-4\">User information</h6>
                <div class=\"pl-lg-4\">
                  <div class=\"row\">
                    <div class=\"col-lg-6\">
                      <div class=\"form-group focused\">
                        <label class=\"form-control-label\" for=\"input-username\">Username</label>
                        <input type=\"text\" id=\"input-username\" class=\"form-control form-control-alternative\" placeholder=\"Username\" value=\" ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "username", [], "any", false, false, false, 48), "html", null, true);
        echo "\" readonly>
                      </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"form-control-label\" for=\"input-email\">Email address</label>
                            <input type=\"text\" id=\"input-email\" class=\"form-control form-control-alternative\" placeholder=\"Email\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "Email", [], "any", false, false, false, 54), "html", null, true);
        echo "\" readonly>
                          </div>
                          
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6\">
                      <div class=\"form-group focused\">
                        <label class=\"form-control-label\" for=\"input-first-name\">First name</label>
                        <input type=\"text\" id=\"input-first-name\" class=\"form-control form-control-alternative\" placeholder=\"First name\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "firstname", [], "any", false, false, false, 63), "html", null, true);
        echo "\"readonly>
                      </div>
                    </div>
                    <div class=\"col-lg-6\">
                      <div class=\"form-group focused\">
                        <label class=\"form-control-label\" for=\"input-last-name\">Last name</label>
                        <input type=\"text\" id=\"input-last-name\" class=\"form-control form-control-alternative\" placeholder=\"Last name\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "lastname", [], "any", false, false, false, 69), "html", null, true);
        echo "\"readonly>
                      </div>
                    </div>
                  </div>
                </div>
                

                <!-- Description -->
                               <div class=\"col-4 text-right\">
                    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-info\"><b>Log out </b></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
";
        // line 88
        $this->loadTemplate("footer.html.twig", "profile/show.html.twig", 88)->display($context);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 88,  143 => 78,  131 => 69,  122 => 63,  110 => 54,  101 => 48,  86 => 36,  64 => 17,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
<link href=\"assets/css/profile.css\" rel=\"stylesheet\">
{% include \"header.html.twig\" %}

<body>
  <div class=\"main-content\">
    <!-- Top navbar -->

    <!-- Header -->
    <div class=\"header pb-8 pt-5 pt-lg-8 d-flex align-items-center\" style=\"min-height: 600px; background-image: url(https://cdn.pixabay.com/photo/2014/06/16/23/39/black-370118_1280.png); background-size: cover; background-position: center top;\">
        <!-- Mask -->
      <span class=\"mask bg-gradient-default opacity-8\"></span>
      <!-- Header container -->
      <div class=\"container-fluid d-flex align-items-center\">
        <div class=\"row\">
          <div class=\"col-lg-7 col-md-10\">
            <h1 class=\"display-2 text-white\">Hello <br> {{ user.username }}!</h1>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class=\"container-fluid mt--7\">

      </div>
        </div>
        <div class=\"col-xl-8 order-xl-1\">
          <div class=\"card bg-secondary shadow\">
            <div class=\"card-header bg-white border-0\">
              <div class=\"row align-items-center\">
                <div class=\"col-8\">
                  <h3 class=\"mb-0\">My account</h3>
                </div>
                <div class=\"col-4 text-right\">
                    <a href=\"{{ path('app_edit_profile') }}\" class=\"btn btn-info\"><b>Edit profile </b></a>
                </div>
              </div>
            </div>
            <div class=\"card-body\" style=\"background-color: white;\">
              <form>
                <h6 class=\"heading-small text-muted mb-4\">User information</h6>
                <div class=\"pl-lg-4\">
                  <div class=\"row\">
                    <div class=\"col-lg-6\">
                      <div class=\"form-group focused\">
                        <label class=\"form-control-label\" for=\"input-username\">Username</label>
                        <input type=\"text\" id=\"input-username\" class=\"form-control form-control-alternative\" placeholder=\"Username\" value=\" {{ user.username }}\" readonly>
                      </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group\">
                            <label class=\"form-control-label\" for=\"input-email\">Email address</label>
                            <input type=\"text\" id=\"input-email\" class=\"form-control form-control-alternative\" placeholder=\"Email\" value=\"{{ user.Email }}\" readonly>
                          </div>
                          
                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col-lg-6\">
                      <div class=\"form-group focused\">
                        <label class=\"form-control-label\" for=\"input-first-name\">First name</label>
                        <input type=\"text\" id=\"input-first-name\" class=\"form-control form-control-alternative\" placeholder=\"First name\" value=\"{{ user.firstname }}\"readonly>
                      </div>
                    </div>
                    <div class=\"col-lg-6\">
                      <div class=\"form-group focused\">
                        <label class=\"form-control-label\" for=\"input-last-name\">Last name</label>
                        <input type=\"text\" id=\"input-last-name\" class=\"form-control form-control-alternative\" placeholder=\"Last name\" value=\"{{ user.lastname }}\"readonly>
                      </div>
                    </div>
                  </div>
                </div>
                

                <!-- Description -->
                               <div class=\"col-4 text-right\">
                    <a href=\"{{ path('app_logout') }}\" class=\"btn btn-info\"><b>Log out </b></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
{% include \"footer.html.twig\" %}
", "profile/show.html.twig", "C:\\Users\\huynh\\Semi\\templates\\profile\\show.html.twig");
    }
}
