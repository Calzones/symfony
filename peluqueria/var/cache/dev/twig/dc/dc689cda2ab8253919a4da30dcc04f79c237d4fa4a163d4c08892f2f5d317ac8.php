<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c50c741376514d5a2480e643a6995db6ab7275db156f4dffeae57fe30a0b4138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8a99c071cc2c2b0b616f66ae4229b315706db5cd7f511a82ea856d5c33b8588 = $this->env->getExtension("native_profiler");
        $__internal_c8a99c071cc2c2b0b616f66ae4229b315706db5cd7f511a82ea856d5c33b8588->enter($__internal_c8a99c071cc2c2b0b616f66ae4229b315706db5cd7f511a82ea856d5c33b8588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a99c071cc2c2b0b616f66ae4229b315706db5cd7f511a82ea856d5c33b8588->leave($__internal_c8a99c071cc2c2b0b616f66ae4229b315706db5cd7f511a82ea856d5c33b8588_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ae3dfae109c4dad685645cb8e4d2e905e142056df447e610d81296956f333ac9 = $this->env->getExtension("native_profiler");
        $__internal_ae3dfae109c4dad685645cb8e4d2e905e142056df447e610d81296956f333ac9->enter($__internal_ae3dfae109c4dad685645cb8e4d2e905e142056df447e610d81296956f333ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ae3dfae109c4dad685645cb8e4d2e905e142056df447e610d81296956f333ac9->leave($__internal_ae3dfae109c4dad685645cb8e4d2e905e142056df447e610d81296956f333ac9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df63cd3fb8ca3880c49783d5d6317dcfb1de7c1f5f04d5a7049fb40be1ad7e46 = $this->env->getExtension("native_profiler");
        $__internal_df63cd3fb8ca3880c49783d5d6317dcfb1de7c1f5f04d5a7049fb40be1ad7e46->enter($__internal_df63cd3fb8ca3880c49783d5d6317dcfb1de7c1f5f04d5a7049fb40be1ad7e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df63cd3fb8ca3880c49783d5d6317dcfb1de7c1f5f04d5a7049fb40be1ad7e46->leave($__internal_df63cd3fb8ca3880c49783d5d6317dcfb1de7c1f5f04d5a7049fb40be1ad7e46_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd4fbf682c706766b9956118731b2fb751df430d933e835e7944f8f33d2fc3ee = $this->env->getExtension("native_profiler");
        $__internal_dd4fbf682c706766b9956118731b2fb751df430d933e835e7944f8f33d2fc3ee->enter($__internal_dd4fbf682c706766b9956118731b2fb751df430d933e835e7944f8f33d2fc3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd4fbf682c706766b9956118731b2fb751df430d933e835e7944f8f33d2fc3ee->leave($__internal_dd4fbf682c706766b9956118731b2fb751df430d933e835e7944f8f33d2fc3ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
