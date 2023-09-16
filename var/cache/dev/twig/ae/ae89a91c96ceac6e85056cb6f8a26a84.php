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

/* profile/edit.html.twig */
class __TwigTemplate_9c102c48f85ce0f6070576190a2ced4d extends Template
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
            'body' => [$this, 'block_body'],
            'link' => [$this, 'block_link'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "profile/edit.html.twig", 1)->display($context);
        // line 2
        echo "<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
<link href=\"assets/css/profile.css\" rel=\"stylesheet\">
";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "<style>
    /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #000000;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #000000 !important;
}
#footer h5{
\tpadding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
\tpadding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
\tfont-size:25px;
\t-webkit-transition: .5s all ease;
\t-moz-transition: .5s all ease;
\ttransition: .5s all ease;
}
#footer ul.social li:hover a i {
\tfont-size:30px;
\tmargin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
\tcolor:#ffffff;
}
#footer ul.social li a:hover{
\tcolor:#eeeeee;
}
#footer ul.quick-links li{
\tpadding: 3px 0;
\t-webkit-transition: .5s all ease;
\t-moz-transition: .5s all ease;
\ttransition: .5s all ease;
}
#footer ul.quick-links li:hover{
\tpadding: 3px 0;
\tmargin-left:5px;
\tfont-weight:700;
}
#footer ul.quick-links li a i{
\tmargin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
\t#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
header {
\tposition: absolute;
\tz-index: 99999;
\twidth: 100%;
\theight: 80px;
\tbackground-color: #232323;
\t-webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}
header .navbar {
\tpadding: 17px 0px;
}
.background-header .navbar {
\tpadding: 17px 0px;
}
.background-header {
\ttop: 0;
\tposition: fixed;
\tbackground-color: #fff!important;
\tbox-shadow: 0px 1px 10px rgba(0,0,0,0.1);
}
.background-header .navbar-brand h2 {
\tcolor: #121212!important;
}
.background-header .navbar-nav a.nav-link {
\tcolor: #1e1e1e!important;
}
.background-header .navbar-nav .nav-link:hover,
.background-header .navbar-nav .active>.nav-link,
.background-header .navbar-nav .nav-link.active,
.background-header .navbar-nav .nav-link.show,
.background-header .navbar-nav .show>.nav-link {
\tcolor: #f33f3f!important;
}
.navbar .navbar-brand {
\tfloat: \tleft;
\tmargin-top: -12px;
\toutline: none;
}
.navbar .navbar-brand h2 {
\tcolor: #fff;
\ttext-transform: uppercase;
\tfont-size: 24px;
\tfont-weight: 700;
\t-webkit-transition: all .3s ease 0s;
    -moz-transition: all .3s ease 0s;
    -o-transition: all .3s ease 0s;
    transition: all .3s ease 0s;
}
.navbar .navbar-brand h2 em {
\tfont-style: normal;
\tcolor: #f33f3f;
}
#navbarResponsive {
\tz-index: 999;
}
.navbar-collapse {
\ttext-align: center;
}
.navbar .navbar-nav .nav-item {
\tmargin: 0px 15px;
}
.navbar .navbar-nav a.nav-link {
\ttext-transform: capitalize;
\tfont-size: 15px;
\tfont-weight: 500;
\tletter-spacing: 0.5px;
\tcolor: #fff;
\ttransition: all 0.5s;
\tmargin-top: 5px;
}
.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .active>.nav-link,
.navbar .navbar-nav .nav-link.active,
.navbar .navbar-nav .nav-link.show,
.navbar .navbar-nav .show>.nav-link {
\tcolor: #fff;
\tpadding-bottom: 25px;
\tborder-bottom: 3px solid #f33f3f;
}
.navbar .navbar-toggler-icon {
\tbackground-image: none;
}
.navbar .navbar-toggler {
\tborder-color: #fff;
\tbackground-color: #fff;\t
\theight: 36px;
\toutline: none;
\tborder-radius: 0px;
\tposition: absolute;
\tright: 30px;
\ttop: 20px;
}
.navbar .navbar-toggler-icon:after {
\tcontent: '\\f0c9';
\tcolor: #f33f3f;
\tfont-size: 18px;
\tline-height: 26px;
\tfont-family: 'FontAwesome';
}

    
</style>

";
        // line 187
        $this->displayBlock('body', $context, $blocks);
        // line 210
        echo "
";
        // line 211
        $this->loadTemplate("footer.html.twig", "profile/edit.html.twig", 211)->display($context);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('link', $context, $blocks);
        // line 216
        echo "
";
        // line 217
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

        echo "Edit Profile";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 187
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 188
        echo "    <div class=\"container mt-5 mb-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\"><br>
                <h1 class=\"mb-4\" style=\"text-align: center;\">Edit Profile</h1>
                ";
        // line 192
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), 'form_start');
        echo "
                ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "first_name", [], "any", false, false, false, 193), 'row', ["attr" => ["class" => "form-control mb-3", "placeholder" => "First Name"]]);
        echo "
                ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "last_name", [], "any", false, false, false, 194), 'row', ["attr" => ["class" => "form-control mb-3", "placeholder" => "Last Name"]]);
        echo "
                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "plainPassword", [], "any", false, false, false, 195), "first", [], "any", false, false, false, 195), 'row', ["attr" => ["class" => "form-control mb-3", "placeholder" => "New Password"]]);
        echo "
                ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "plainPassword", [], "any", false, false, false, 196), "second", [], "any", false, false, false, 196), 'row', ["attr" => ["class" => "form-control mb-3", "placeholder" => "Confirm Password"]]);
        echo "
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "save", [], "any", false, false, false, 199), 'row', ["label" => "Save Changes", "attr" => ["class" => "btn btn-primary btn-block"]]);
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <a href=\"javascript:delete123('";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_account");
        echo "')\" class=\"btn btn-danger btn-block\">Delete Account</a>
                    </div>
                </div>
                ";
        // line 205
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 213
    public function block_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        // line 214
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 217
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 218
        echo "    <script>
    function delete123(url){
        if(confirm(\"Are you sure detele account?\"))
        {
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
        return "profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 218,  368 => 217,  358 => 214,  348 => 213,  333 => 205,  327 => 202,  321 => 199,  315 => 196,  311 => 195,  307 => 194,  303 => 193,  299 => 192,  293 => 188,  283 => 187,  264 => 4,  254 => 217,  251 => 216,  249 => 213,  246 => 212,  244 => 211,  241 => 210,  239 => 187,  55 => 5,  53 => 4,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"header.html.twig\" %}
<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\">
<link href=\"assets/css/profile.css\" rel=\"stylesheet\">
{% block title %}Edit Profile{% endblock %}
<style>
    /* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #000000;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #000000 !important;
}
#footer h5{
\tpadding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#ffffff;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
\tpadding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
\tfont-size:25px;
\t-webkit-transition: .5s all ease;
\t-moz-transition: .5s all ease;
\ttransition: .5s all ease;
}
#footer ul.social li:hover a i {
\tfont-size:30px;
\tmargin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
\tcolor:#ffffff;
}
#footer ul.social li a:hover{
\tcolor:#eeeeee;
}
#footer ul.quick-links li{
\tpadding: 3px 0;
\t-webkit-transition: .5s all ease;
\t-moz-transition: .5s all ease;
\ttransition: .5s all ease;
}
#footer ul.quick-links li:hover{
\tpadding: 3px 0;
\tmargin-left:5px;
\tfont-weight:700;
}
#footer ul.quick-links li a i{
\tmargin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
\t#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
header {
\tposition: absolute;
\tz-index: 99999;
\twidth: 100%;
\theight: 80px;
\tbackground-color: #232323;
\t-webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    -o-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}
header .navbar {
\tpadding: 17px 0px;
}
.background-header .navbar {
\tpadding: 17px 0px;
}
.background-header {
\ttop: 0;
\tposition: fixed;
\tbackground-color: #fff!important;
\tbox-shadow: 0px 1px 10px rgba(0,0,0,0.1);
}
.background-header .navbar-brand h2 {
\tcolor: #121212!important;
}
.background-header .navbar-nav a.nav-link {
\tcolor: #1e1e1e!important;
}
.background-header .navbar-nav .nav-link:hover,
.background-header .navbar-nav .active>.nav-link,
.background-header .navbar-nav .nav-link.active,
.background-header .navbar-nav .nav-link.show,
.background-header .navbar-nav .show>.nav-link {
\tcolor: #f33f3f!important;
}
.navbar .navbar-brand {
\tfloat: \tleft;
\tmargin-top: -12px;
\toutline: none;
}
.navbar .navbar-brand h2 {
\tcolor: #fff;
\ttext-transform: uppercase;
\tfont-size: 24px;
\tfont-weight: 700;
\t-webkit-transition: all .3s ease 0s;
    -moz-transition: all .3s ease 0s;
    -o-transition: all .3s ease 0s;
    transition: all .3s ease 0s;
}
.navbar .navbar-brand h2 em {
\tfont-style: normal;
\tcolor: #f33f3f;
}
#navbarResponsive {
\tz-index: 999;
}
.navbar-collapse {
\ttext-align: center;
}
.navbar .navbar-nav .nav-item {
\tmargin: 0px 15px;
}
.navbar .navbar-nav a.nav-link {
\ttext-transform: capitalize;
\tfont-size: 15px;
\tfont-weight: 500;
\tletter-spacing: 0.5px;
\tcolor: #fff;
\ttransition: all 0.5s;
\tmargin-top: 5px;
}
.navbar .navbar-nav .nav-link:hover,
.navbar .navbar-nav .active>.nav-link,
.navbar .navbar-nav .nav-link.active,
.navbar .navbar-nav .nav-link.show,
.navbar .navbar-nav .show>.nav-link {
\tcolor: #fff;
\tpadding-bottom: 25px;
\tborder-bottom: 3px solid #f33f3f;
}
.navbar .navbar-toggler-icon {
\tbackground-image: none;
}
.navbar .navbar-toggler {
\tborder-color: #fff;
\tbackground-color: #fff;\t
\theight: 36px;
\toutline: none;
\tborder-radius: 0px;
\tposition: absolute;
\tright: 30px;
\ttop: 20px;
}
.navbar .navbar-toggler-icon:after {
\tcontent: '\\f0c9';
\tcolor: #f33f3f;
\tfont-size: 18px;
\tline-height: 26px;
\tfont-family: 'FontAwesome';
}

    
</style>

{% block body %}
    <div class=\"container mt-5 mb-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\"><br>
                <h1 class=\"mb-4\" style=\"text-align: center;\">Edit Profile</h1>
                {{ form_start(form) }}
                {{ form_row(form.first_name, {'attr': {'class': 'form-control mb-3', 'placeholder': 'First Name'}}) }}
                {{ form_row(form.last_name, {'attr': {'class': 'form-control mb-3', 'placeholder': 'Last Name'}}) }}
                {{ form_row(form.plainPassword.first, {'attr': {'class': 'form-control mb-3', 'placeholder': 'New Password'}}) }}
                {{ form_row(form.plainPassword.second, {'attr': {'class': 'form-control mb-3', 'placeholder': 'Confirm Password'}}) }}
                <div class=\"row justify-content-center\">
                    <div class=\"col-md-6\">
                        {{ form_row(form.save, {'label': 'Save Changes', 'attr': {'class': 'btn btn-primary btn-block'}}) }}
                    </div>
                    <div class=\"col-md-6\">
                        <a href=\"javascript:delete123('{{path('app_delete_account',)}}')\" class=\"btn btn-danger btn-block\">Delete Account</a>
                    </div>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% include \"footer.html.twig\" %}

{% block link %}
    {# Additional links or scripts if needed #}
{% endblock %}

{% block javascripts %}
    <script>
    function delete123(url){
        if(confirm(\"Are you sure detele account?\"))
        {
            window.location.href = url;
        }
    }   
</script>        
{% endblock %}
", "profile/edit.html.twig", "C:\\Users\\huynh\\Semi\\templates\\profile\\edit.html.twig");
    }
}
