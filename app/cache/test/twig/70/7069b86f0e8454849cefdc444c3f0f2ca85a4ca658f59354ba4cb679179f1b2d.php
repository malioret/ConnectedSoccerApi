<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_0b05ede015ba24ce1160a76367eddef7eea8b3e0898c4a000471d3c0f10a1e02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_679dcb9be9f0302c328600d248a9655bc1b7fa561a5ef3bc623ae6307bc56d47 = $this->env->getExtension("native_profiler");
        $__internal_679dcb9be9f0302c328600d248a9655bc1b7fa561a5ef3bc623ae6307bc56d47->enter($__internal_679dcb9be9f0302c328600d248a9655bc1b7fa561a5ef3bc623ae6307bc56d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_679dcb9be9f0302c328600d248a9655bc1b7fa561a5ef3bc623ae6307bc56d47->leave($__internal_679dcb9be9f0302c328600d248a9655bc1b7fa561a5ef3bc623ae6307bc56d47_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c75d4a66539e87f79192b6a20e166e956247709b6ee734f13042751f94c938d9 = $this->env->getExtension("native_profiler");
        $__internal_c75d4a66539e87f79192b6a20e166e956247709b6ee734f13042751f94c938d9->enter($__internal_c75d4a66539e87f79192b6a20e166e956247709b6ee734f13042751f94c938d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_c75d4a66539e87f79192b6a20e166e956247709b6ee734f13042751f94c938d9->leave($__internal_c75d4a66539e87f79192b6a20e166e956247709b6ee734f13042751f94c938d9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
