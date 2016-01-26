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
        $__internal_e2ad3351c3636c29ea9475abbc783797f657985e40fc0fc57137a2e21a64fb67 = $this->env->getExtension("native_profiler");
        $__internal_e2ad3351c3636c29ea9475abbc783797f657985e40fc0fc57137a2e21a64fb67->enter($__internal_e2ad3351c3636c29ea9475abbc783797f657985e40fc0fc57137a2e21a64fb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2ad3351c3636c29ea9475abbc783797f657985e40fc0fc57137a2e21a64fb67->leave($__internal_e2ad3351c3636c29ea9475abbc783797f657985e40fc0fc57137a2e21a64fb67_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_02fc69b9b4ac0438819ec3300d00b829033e3d7dea9111a8c5267a7aec1b6c78 = $this->env->getExtension("native_profiler");
        $__internal_02fc69b9b4ac0438819ec3300d00b829033e3d7dea9111a8c5267a7aec1b6c78->enter($__internal_02fc69b9b4ac0438819ec3300d00b829033e3d7dea9111a8c5267a7aec1b6c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_02fc69b9b4ac0438819ec3300d00b829033e3d7dea9111a8c5267a7aec1b6c78->leave($__internal_02fc69b9b4ac0438819ec3300d00b829033e3d7dea9111a8c5267a7aec1b6c78_prof);

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
