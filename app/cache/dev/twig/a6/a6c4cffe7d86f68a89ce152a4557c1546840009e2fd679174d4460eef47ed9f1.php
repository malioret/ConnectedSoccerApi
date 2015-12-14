<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_cf9f915c5754e4c0c551fa39d0d6bc6a1896f52ef541dc134c1eb8a4c08c9f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44649d27aa5607fc856d065285d99c6faffe8fb743be65f80868ce9a43d37333 = $this->env->getExtension("native_profiler");
        $__internal_44649d27aa5607fc856d065285d99c6faffe8fb743be65f80868ce9a43d37333->enter($__internal_44649d27aa5607fc856d065285d99c6faffe8fb743be65f80868ce9a43d37333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44649d27aa5607fc856d065285d99c6faffe8fb743be65f80868ce9a43d37333->leave($__internal_44649d27aa5607fc856d065285d99c6faffe8fb743be65f80868ce9a43d37333_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_58a620cf25e51318f20e9c9eefcfca02c9d9db96b8dacb1f9285a694a379d779 = $this->env->getExtension("native_profiler");
        $__internal_58a620cf25e51318f20e9c9eefcfca02c9d9db96b8dacb1f9285a694a379d779->enter($__internal_58a620cf25e51318f20e9c9eefcfca02c9d9db96b8dacb1f9285a694a379d779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_58a620cf25e51318f20e9c9eefcfca02c9d9db96b8dacb1f9285a694a379d779->leave($__internal_58a620cf25e51318f20e9c9eefcfca02c9d9db96b8dacb1f9285a694a379d779_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
