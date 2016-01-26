<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_cfed57c5e55aee2c098413e8be0abc685fa15c529f62d9dfb228d3eafcda03d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_160494536547665b524b9adb8efe29504cd53a124af4f67d8b6fa151d6c26722 = $this->env->getExtension("native_profiler");
        $__internal_160494536547665b524b9adb8efe29504cd53a124af4f67d8b6fa151d6c26722->enter($__internal_160494536547665b524b9adb8efe29504cd53a124af4f67d8b6fa151d6c26722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_160494536547665b524b9adb8efe29504cd53a124af4f67d8b6fa151d6c26722->leave($__internal_160494536547665b524b9adb8efe29504cd53a124af4f67d8b6fa151d6c26722_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4eb44c621cdecedd604b1f99ca28239454b60f1819a3219bd7d14306b74daf18 = $this->env->getExtension("native_profiler");
        $__internal_4eb44c621cdecedd604b1f99ca28239454b60f1819a3219bd7d14306b74daf18->enter($__internal_4eb44c621cdecedd604b1f99ca28239454b60f1819a3219bd7d14306b74daf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_4eb44c621cdecedd604b1f99ca28239454b60f1819a3219bd7d14306b74daf18->leave($__internal_4eb44c621cdecedd604b1f99ca28239454b60f1819a3219bd7d14306b74daf18_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
