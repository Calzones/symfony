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
        $__internal_a32251c71999bc878a21651fa58858c4093da1b9509c47b17ea84edab1997dea = $this->env->getExtension("native_profiler");
        $__internal_a32251c71999bc878a21651fa58858c4093da1b9509c47b17ea84edab1997dea->enter($__internal_a32251c71999bc878a21651fa58858c4093da1b9509c47b17ea84edab1997dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/cita.html.twig"));

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
\t\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dueDate", array()), 'widget');
        echo "
\t\t\t";
        // line 14
        if (((isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")) != "")) {
            // line 15
            echo "\t\t\t<table>
\t\t\t\t<th>Hora</th><th>fecha</th>
\t\t\t
\t\t\t\t<div id=\"div\">";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("tabla", $context)) ? (_twig_default_filter((isset($context["tabla"]) ? $context["tabla"] : $this->getContext($context, "tabla")), " ")) : (" ")));
            foreach ($context['_seq'] as $context["_key"] => $context["citas"]) {
                // line 19
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["citas"], "hora", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["citas"], "fecha", array()), "html", null, true);
                echo "</td>
\t\t\t\t</tr>\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['citas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "</div>
\t\t\t</table>
\t\t\t";
        }
        // line 26
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reservar", array()), 'widget');
        echo "
\t\t\t";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</form>
\t</body>
</html>";
        
        $__internal_a32251c71999bc878a21651fa58858c4093da1b9509c47b17ea84edab1997dea->leave($__internal_a32251c71999bc878a21651fa58858c4093da1b9509c47b17ea84edab1997dea_prof);

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
        return array (  86 => 27,  81 => 26,  76 => 23,  67 => 21,  63 => 20,  60 => 19,  56 => 18,  51 => 15,  49 => 14,  45 => 13,  41 => 12,  35 => 9,  27 => 4,  22 => 1,);
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
/* 			{{ form_start(form) }}*/
/* 			{{ form_widget(form.dueDate) }}*/
/* 			{% if tabla != "" %}*/
/* 			<table>*/
/* 				<th>Hora</th><th>fecha</th>*/
/* 			*/
/* 				<div id="div">{% for citas in tabla | default(' ') %}*/
/* 				<tr>*/
/* 					<td>{{citas.hora}}</td>*/
/* 					<td>{{citas.fecha}}</td>*/
/* 				</tr>		*/
/* 			{%endfor%}</div>*/
/* 			</table>*/
/* 			{% endif %}*/
/* 			{{ form_widget(form.reservar) }}*/
/* 			{{ form_end(form) }}*/
/* 		</form>*/
/* 	</body>*/
/* </html>*/
