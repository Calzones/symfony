<?php

/* base.html.twig */
class __TwigTemplate_e736d6a9d9d82ae039cd5748b27a3d92118b732da1b5c8068c08bb09be0aea90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e02411ff798bb6b1a470f8d0b9960e986b4e18726aacfb124aa7528e8a1ad9a = $this->env->getExtension("native_profiler");
        $__internal_6e02411ff798bb6b1a470f8d0b9960e986b4e18726aacfb124aa7528e8a1ad9a->enter($__internal_6e02411ff798bb6b1a470f8d0b9960e986b4e18726aacfb124aa7528e8a1ad9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6e02411ff798bb6b1a470f8d0b9960e986b4e18726aacfb124aa7528e8a1ad9a->leave($__internal_6e02411ff798bb6b1a470f8d0b9960e986b4e18726aacfb124aa7528e8a1ad9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ac61acba01be1793f8b81731053435ebdf891764cb1cdccd9992bf099accc14 = $this->env->getExtension("native_profiler");
        $__internal_6ac61acba01be1793f8b81731053435ebdf891764cb1cdccd9992bf099accc14->enter($__internal_6ac61acba01be1793f8b81731053435ebdf891764cb1cdccd9992bf099accc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6ac61acba01be1793f8b81731053435ebdf891764cb1cdccd9992bf099accc14->leave($__internal_6ac61acba01be1793f8b81731053435ebdf891764cb1cdccd9992bf099accc14_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf7a7f3e45346643b7603c7d130cdbac2153540c7f8fe5de588923202ba92635 = $this->env->getExtension("native_profiler");
        $__internal_bf7a7f3e45346643b7603c7d130cdbac2153540c7f8fe5de588923202ba92635->enter($__internal_bf7a7f3e45346643b7603c7d130cdbac2153540c7f8fe5de588923202ba92635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bf7a7f3e45346643b7603c7d130cdbac2153540c7f8fe5de588923202ba92635->leave($__internal_bf7a7f3e45346643b7603c7d130cdbac2153540c7f8fe5de588923202ba92635_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_90a60ada8771ae8ed6736f06ecb14ad8e72ebcdda6b39f8af4bc192eb9495ff9 = $this->env->getExtension("native_profiler");
        $__internal_90a60ada8771ae8ed6736f06ecb14ad8e72ebcdda6b39f8af4bc192eb9495ff9->enter($__internal_90a60ada8771ae8ed6736f06ecb14ad8e72ebcdda6b39f8af4bc192eb9495ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_90a60ada8771ae8ed6736f06ecb14ad8e72ebcdda6b39f8af4bc192eb9495ff9->leave($__internal_90a60ada8771ae8ed6736f06ecb14ad8e72ebcdda6b39f8af4bc192eb9495ff9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_89f6bde74ad8aa4d79634abada8cbc1e310bb0db9a8cb1b2653fe74df5e59ba0 = $this->env->getExtension("native_profiler");
        $__internal_89f6bde74ad8aa4d79634abada8cbc1e310bb0db9a8cb1b2653fe74df5e59ba0->enter($__internal_89f6bde74ad8aa4d79634abada8cbc1e310bb0db9a8cb1b2653fe74df5e59ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_89f6bde74ad8aa4d79634abada8cbc1e310bb0db9a8cb1b2653fe74df5e59ba0->leave($__internal_89f6bde74ad8aa4d79634abada8cbc1e310bb0db9a8cb1b2653fe74df5e59ba0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
