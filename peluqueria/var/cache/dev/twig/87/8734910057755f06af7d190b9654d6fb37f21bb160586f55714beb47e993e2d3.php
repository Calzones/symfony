<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_47ea4c40bb7daab3dc0cf79b6427ebb441f8d683464cd38776c0b5659714a6f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01d9cb334b90b206184e3d7d3f70f68b66c9797ce186e552beec691482ebea76 = $this->env->getExtension("native_profiler");
        $__internal_01d9cb334b90b206184e3d7d3f70f68b66c9797ce186e552beec691482ebea76->enter($__internal_01d9cb334b90b206184e3d7d3f70f68b66c9797ce186e552beec691482ebea76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d9cb334b90b206184e3d7d3f70f68b66c9797ce186e552beec691482ebea76->leave($__internal_01d9cb334b90b206184e3d7d3f70f68b66c9797ce186e552beec691482ebea76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2088c553e6b4f86e2f7eb836c22077b1e14a5a98e5af5c7691250d4bea47f91d = $this->env->getExtension("native_profiler");
        $__internal_2088c553e6b4f86e2f7eb836c22077b1e14a5a98e5af5c7691250d4bea47f91d->enter($__internal_2088c553e6b4f86e2f7eb836c22077b1e14a5a98e5af5c7691250d4bea47f91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2088c553e6b4f86e2f7eb836c22077b1e14a5a98e5af5c7691250d4bea47f91d->leave($__internal_2088c553e6b4f86e2f7eb836c22077b1e14a5a98e5af5c7691250d4bea47f91d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4326cf67d603bdaa30547375e7e4692bbce28619e6a7a26061f66e548ddbcd4c = $this->env->getExtension("native_profiler");
        $__internal_4326cf67d603bdaa30547375e7e4692bbce28619e6a7a26061f66e548ddbcd4c->enter($__internal_4326cf67d603bdaa30547375e7e4692bbce28619e6a7a26061f66e548ddbcd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4326cf67d603bdaa30547375e7e4692bbce28619e6a7a26061f66e548ddbcd4c->leave($__internal_4326cf67d603bdaa30547375e7e4692bbce28619e6a7a26061f66e548ddbcd4c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_acda34071cc2a0207adba1a841d0da42e63e28e19de67c41979c6f92c89a2d4b = $this->env->getExtension("native_profiler");
        $__internal_acda34071cc2a0207adba1a841d0da42e63e28e19de67c41979c6f92c89a2d4b->enter($__internal_acda34071cc2a0207adba1a841d0da42e63e28e19de67c41979c6f92c89a2d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_acda34071cc2a0207adba1a841d0da42e63e28e19de67c41979c6f92c89a2d4b->leave($__internal_acda34071cc2a0207adba1a841d0da42e63e28e19de67c41979c6f92c89a2d4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
