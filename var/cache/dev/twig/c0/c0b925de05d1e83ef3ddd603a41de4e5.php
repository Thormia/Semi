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

/* contact/Customer/contact.html.twig */
class __TwigTemplate_68dd98bb348522884f4bba720af603e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/Customer/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/Customer/contact.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 2
        echo "<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <!-- mobile metas -->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
      <!-- site metas -->
      <title>Contact</title>
      <meta name=\"keywords\" content=\"\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <!-- bootstrap css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
      <!-- style css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
      <!-- Responsive-->
      <link rel=\"stylesheet\" href=\"css/responsive.css\">
      <!-- fevicon -->
      <link rel=\"icon\" href=\"images/fevicon.png\" type=\"image/gif\" />
      <!-- font css -->
      <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap\" rel=\"stylesheet\">
      <!-- Scrollbar Custom CSS -->
      <link rel=\"stylesheet\" href=\"css/jquery.mCustomScrollbar.min.css\">
      <!-- Tweaks for older IEs-->
      <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
   </head>
   <body>
    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
      ";
        // line 42
        $this->loadTemplate("header.html.twig", "contact/Customer/contact.html.twig", 42)->display($context);
        // line 43
        echo "
      <!-- header section end -->
      <!-- contact section start -->
      <div class=\"contact_section layout_padding\" style=\"background-color: white;\">

         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-sm-12\">
                  <h1 class=\"contact_taital\">Get In Touch</h1>
                  <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
               </div>
            </div>
         </div>
         <div class=\"container-fluid\">
            <div class=\"contact_section_2\">
               <div class=\"row\">
                  <div class=\"col-md-12\">
                     <div class=\"mail_section_1\">
                        ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "Name", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "mail_text", "placeholder" => "Your Name"]]);
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "Email", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "mail_text", "placeholder" => "Your Email"]]);
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "Phone", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "mail_text", "placeholder" => "Your Phone"]]);
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "Message", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "mail_text", "placeholder" => "Message"]]);
        echo "     
                       <div style=\"text-align: center\">
                           <input type=\"submit\" value=\"SEND\" class=\"btn btn-primary\" style=\"font-size: 16px; display: inline-block; background-color: black; margin-top:20px; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;\" />
                           </a>
                        </div>
                        ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "
                     </div>
                  </div>
            </div>
         </div>

                  <div class=\"map_main\">
                     <div class=\"map-responsive\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6262856991!2d105.77487367442332!3d10.047665090060182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0880394d99315%3A0x2e86b25b92ad3e8a!2zNDEgxJAuIEPDoWNoIE3huqFuZyBUaMOhbmcgOCwgVGjhu5tpIELDrG5oLCBOaW5oIEtp4buBdSwgQ-G6p24gVGjGoSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1687602715013!5m2!1sen!2s\" width=\"250\" height=\"500\" frameborder=\"0\" style=\"border:0; width: 100%;\" allowfullscreen=\"\"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      ";
        // line 85
        $this->loadTemplate("footer.html.twig", "contact/Customer/contact.html.twig", 85)->display($context);
        // line 86
        echo "
      <script src=\"js/jquery.min.js\"></script>
      <script src=\"js/popper.min.js\"></script>
      <script src=\"js/bootstrap.bundle.min.js\"></script>
      <script src=\"js/jquery-3.0.0.min.js\"></script>
      <script src=\"js/plugin.js\"></script>
      <!-- sidebar -->
      <script src=\"js/jquery.mCustomScrollbar.concat.min.js\"></script>
      <script src=\"js/custom.js\"></script>
      <script src=\"assets/js/custom.js\"></script>
   </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "contact/Customer/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 86,  154 => 85,  136 => 70,  128 => 65,  124 => 64,  120 => 63,  116 => 62,  112 => 61,  92 => 43,  90 => 42,  65 => 20,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form \"bootstrap_5_layout.html.twig\"%}
<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <!-- mobile metas -->
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
      <!-- site metas -->
      <title>Contact</title>
      <meta name=\"keywords\" content=\"\">
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <!-- bootstrap css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
      <!-- style css -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
      <!-- Responsive-->
      <link rel=\"stylesheet\" href=\"css/responsive.css\">
      <!-- fevicon -->
      <link rel=\"icon\" href=\"images/fevicon.png\" type=\"image/gif\" />
      <!-- font css -->
      <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap\" rel=\"stylesheet\">
      <!-- Scrollbar Custom CSS -->
      <link rel=\"stylesheet\" href=\"css/jquery.mCustomScrollbar.min.css\">
      <!-- Tweaks for older IEs-->
      <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
   </head>
   <body>
    <!-- ***** Preloader Start ***** -->
    <div id=\"preloader\">
        <div class=\"jumper\">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
      {% include \"header.html.twig\" %}

      <!-- header section end -->
      <!-- contact section start -->
      <div class=\"contact_section layout_padding\" style=\"background-color: white;\">

         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-sm-12\">
                  <h1 class=\"contact_taital\">Get In Touch</h1>
                  <div class=\"bulit_icon\"><img src=\"images/bulit-icon.png\"></div>
               </div>
            </div>
         </div>
         <div class=\"container-fluid\">
            <div class=\"contact_section_2\">
               <div class=\"row\">
                  <div class=\"col-md-12\">
                     <div class=\"mail_section_1\">
                        {{ form_start(form) }}
                        {{ form_widget(form.Name, {'attr': {'class': 'mail_text', 'placeholder': 'Your Name'}}) }}
                        {{ form_widget(form.Email, {'attr': {'class': 'mail_text', 'placeholder': 'Your Email'}}) }}
                        {{ form_widget(form.Phone, {'attr': {'class': 'mail_text', 'placeholder': 'Your Phone'}}) }}
                        {{ form_widget(form.Message, {'attr': {'class': 'mail_text', 'placeholder': 'Message'}}) }}     
                       <div style=\"text-align: center\">
                           <input type=\"submit\" value=\"SEND\" class=\"btn btn-primary\" style=\"font-size: 16px; display: inline-block; background-color: black; margin-top:20px; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;\" />
                           </a>
                        </div>
                        {{ form_end(form) }}
                     </div>
                  </div>
            </div>
         </div>

                  <div class=\"map_main\">
                     <div class=\"map-responsive\">
                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6262856991!2d105.77487367442332!3d10.047665090060182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0880394d99315%3A0x2e86b25b92ad3e8a!2zNDEgxJAuIEPDoWNoIE3huqFuZyBUaMOhbmcgOCwgVGjhu5tpIELDrG5oLCBOaW5oIEtp4buBdSwgQ-G6p24gVGjGoSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1687602715013!5m2!1sen!2s\" width=\"250\" height=\"500\" frameborder=\"0\" style=\"border:0; width: 100%;\" allowfullscreen=\"\"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {% include \"footer.html.twig\" %}

      <script src=\"js/jquery.min.js\"></script>
      <script src=\"js/popper.min.js\"></script>
      <script src=\"js/bootstrap.bundle.min.js\"></script>
      <script src=\"js/jquery-3.0.0.min.js\"></script>
      <script src=\"js/plugin.js\"></script>
      <!-- sidebar -->
      <script src=\"js/jquery.mCustomScrollbar.concat.min.js\"></script>
      <script src=\"js/custom.js\"></script>
      <script src=\"assets/js/custom.js\"></script>
   </body>
</html>", "contact/Customer/contact.html.twig", "E:\\BTEC\\Semi\\templates\\contact\\Customer\\contact.html.twig");
    }
}
