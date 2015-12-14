<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_ccf0e73a2846675fc93dc9a541639219d19ec502c40e78b3a4eef7b27ae58b6a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdeb9dbd7ebd0872dd6d3683bc0564cae8d8441167bfc18dda1511f88b2cbac6 = $this->env->getExtension("native_profiler");
        $__internal_bdeb9dbd7ebd0872dd6d3683bc0564cae8d8441167bfc18dda1511f88b2cbac6->enter($__internal_bdeb9dbd7ebd0872dd6d3683bc0564cae8d8441167bfc18dda1511f88b2cbac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdeb9dbd7ebd0872dd6d3683bc0564cae8d8441167bfc18dda1511f88b2cbac6->leave($__internal_bdeb9dbd7ebd0872dd6d3683bc0564cae8d8441167bfc18dda1511f88b2cbac6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6c2651e4d3acfeff033f8f603571afc66e82bd8678205ac91ec8ba0739a24c28 = $this->env->getExtension("native_profiler");
        $__internal_6c2651e4d3acfeff033f8f603571afc66e82bd8678205ac91ec8ba0739a24c28->enter($__internal_6c2651e4d3acfeff033f8f603571afc66e82bd8678205ac91ec8ba0739a24c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_6c2651e4d3acfeff033f8f603571afc66e82bd8678205ac91ec8ba0739a24c28->leave($__internal_6c2651e4d3acfeff033f8f603571afc66e82bd8678205ac91ec8ba0739a24c28_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field%}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date('F j, Y') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
