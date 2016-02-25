<?php

/* default/inicio.html.twig */
class __TwigTemplate_b3b3d87e22bdeb60473fea55f4eb8b43eebfd6bd58118eb84313e3e8d6c134c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49ad5fe602b832f58c3c936e58b83aece33180380058d4f6530a083869008807 = $this->env->getExtension("native_profiler");
        $__internal_49ad5fe602b832f58c3c936e58b83aece33180380058d4f6530a083869008807->enter($__internal_49ad5fe602b832f58c3c936e58b83aece33180380058d4f6530a083869008807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/inicio.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>Iniciar sesion</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/stilo.css"), "html", null, true);
        echo "\"/>
\t\t<script type=\"text/javascript\" src=\"script.js\"></script>
\t\t<meta charset=\"UTF-8\">
\t</head>
\t<body onload=\"borrarCookies();\">
\t\t<div class=\"contenedor\">
\t\t\t<div class=\"inicio\">
\t\t\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t\t<h3>";
        // line 15
        echo twig_escape_filter($this->env, ((array_key_exists("mensajito", $context)) ? (_twig_default_filter((isset($context["mensajito"]) ? $context["mensajito"] : $this->getContext($context, "mensajito")), "")) : ("")), "html", null, true);
        echo "</h3>
\t\t<footer>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["footer"]) ? $context["footer"] : $this->getContext($context, "footer")), "html", null, true);
        echo "</footer>
\t</body>
</html>";
        
        $__internal_49ad5fe602b832f58c3c936e58b83aece33180380058d4f6530a083869008807->leave($__internal_49ad5fe602b832f58c3c936e58b83aece33180380058d4f6530a083869008807_prof);

    }

    public function getTemplateName()
    {
        return "default/inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 15,  45 => 13,  41 => 12,  37 => 11,  27 => 4,  22 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<title>Iniciar sesion</title>*/
/* 		<link rel="stylesheet" href="{{asset('bundles/framework/css/stilo.css')}}"/>*/
/* 		<script type="text/javascript" src="script.js"></script>*/
/* 		<meta charset="UTF-8">*/
/* 	</head>*/
/* 	<body onload="borrarCookies();">*/
/* 		<div class="contenedor">*/
/* 			<div class="inicio">*/
/* 			{{ form_start(form) }}*/
/* 			{{ form_widget(form) }}*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 		<h3>{{mensajito | default('')}}</h3>*/
/* 		<footer>{{footer}}</footer>*/
/* 	</body>*/
/* </html>*/
