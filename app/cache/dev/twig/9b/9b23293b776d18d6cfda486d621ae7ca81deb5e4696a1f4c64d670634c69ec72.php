<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_d8d492acb02a81d6866685cc20466154c8f9ca6f6110065b457e12fd2a06ec01 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91372b52948c44f43a6d995e839bf9372798e40fdb6b3a7709c4c136a411bb5d = $this->env->getExtension("native_profiler");
        $__internal_91372b52948c44f43a6d995e839bf9372798e40fdb6b3a7709c4c136a411bb5d->enter($__internal_91372b52948c44f43a6d995e839bf9372798e40fdb6b3a7709c4c136a411bb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91372b52948c44f43a6d995e839bf9372798e40fdb6b3a7709c4c136a411bb5d->leave($__internal_91372b52948c44f43a6d995e839bf9372798e40fdb6b3a7709c4c136a411bb5d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e9e91e5781b5d15cf5f684f294d208fdbd44d22927d370b585ae468d7902b12d = $this->env->getExtension("native_profiler");
        $__internal_e9e91e5781b5d15cf5f684f294d208fdbd44d22927d370b585ae468d7902b12d->enter($__internal_e9e91e5781b5d15cf5f684f294d208fdbd44d22927d370b585ae468d7902b12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_e9e91e5781b5d15cf5f684f294d208fdbd44d22927d370b585ae468d7902b12d->leave($__internal_e9e91e5781b5d15cf5f684f294d208fdbd44d22927d370b585ae468d7902b12d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
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
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
