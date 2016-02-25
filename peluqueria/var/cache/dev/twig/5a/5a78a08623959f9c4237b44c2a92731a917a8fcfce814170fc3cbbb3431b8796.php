<?php

/* default/cita.html.twig */
class __TwigTemplate_d92d9c8f16b5c8f33823c0ee5fa6efb163399e1ef50774e888e5eb5fb2568db5 extends Twig_Template
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
        $__internal_6f9fde776efcbd4d167492b63e3eff611bb2f1a870e64b9a6c675c04f59236f8 = $this->env->getExtension("native_profiler");
        $__internal_6f9fde776efcbd4d167492b63e3eff611bb2f1a870e64b9a6c675c04f59236f8->enter($__internal_6f9fde776efcbd4d167492b63e3eff611bb2f1a870e64b9a6c675c04f59236f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/cita.html.twig"));

        // line 1
        echo "<html>
\t<head>
\t\t<title>Gestion citas</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/stilo.css"), "html", null, true);
        echo "\"/>
\t\t<script type=\"text/javascript\" src=\"../htmlCode/script.js\"></script>
\t\t<meta charset=\"UTF-8\">
\t</head>
\t<body onload=\"date();\">
\t\t<h1>Bienvenido: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
        echo "</h1>
\t\t<form class=\"cita\" name=\"form\" action=\"cita.php\" method=\"post\">
\t\t\t<label class=\"texto\">Seleccione la fecha en la que desearia sacar una cita:</label>
\t\t\t<div id=\"div\"></div>
\t\t\t<h3>";
        // line 13
        echo twig_escape_filter($this->env, ((array_key_exists("tabla", $context)) ? (_twig_default_filter((isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), "")) : ("")), "html", null, true);
        echo "</h3>
\t\t\t";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "html", null, true);
        echo "
\t\t</form>
\t</body>
</html>";
        
        $__internal_6f9fde776efcbd4d167492b63e3eff611bb2f1a870e64b9a6c675c04f59236f8->leave($__internal_6f9fde776efcbd4d167492b63e3eff611bb2f1a870e64b9a6c675c04f59236f8_prof);

    }

    public function getTemplateName()
    {
        return "default/cita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  42 => 13,  35 => 9,  27 => 4,  22 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<title>Gestion citas</title>*/
/* 		<link rel="stylesheet" href="{{asset('bundles/framework/css/stilo.css')}}"/>*/
/* 		<script type="text/javascript" src="../htmlCode/script.js"></script>*/
/* 		<meta charset="UTF-8">*/
/* 	</head>*/
/* 	<body onload="date();">*/
/* 		<h1>Bienvenido: {{usuario}}</h1>*/
/* 		<form class="cita" name="form" action="cita.php" method="post">*/
/* 			<label class="texto">Seleccione la fecha en la que desearia sacar una cita:</label>*/
/* 			<div id="div"></div>*/
/* 			<h3>{{tabla|default('')}}</h3>*/
/* 			{{form}}*/
/* 		</form>*/
/* 	</body>*/
/* </html>*/
