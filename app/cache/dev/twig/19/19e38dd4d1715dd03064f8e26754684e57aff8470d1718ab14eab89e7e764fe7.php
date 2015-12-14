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
        $__internal_a3063be65718a56eb0e7373d29602d22928782309deadb6c116b717ba7eb151a = $this->env->getExtension("native_profiler");
        $__internal_a3063be65718a56eb0e7373d29602d22928782309deadb6c116b717ba7eb151a->enter($__internal_a3063be65718a56eb0e7373d29602d22928782309deadb6c116b717ba7eb151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3063be65718a56eb0e7373d29602d22928782309deadb6c116b717ba7eb151a->leave($__internal_a3063be65718a56eb0e7373d29602d22928782309deadb6c116b717ba7eb151a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2a0e9d3e808cd8639edb45c8623a9d63319554999ffdac12b490229e1b00bbda = $this->env->getExtension("native_profiler");
        $__internal_2a0e9d3e808cd8639edb45c8623a9d63319554999ffdac12b490229e1b00bbda->enter($__internal_2a0e9d3e808cd8639edb45c8623a9d63319554999ffdac12b490229e1b00bbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_2a0e9d3e808cd8639edb45c8623a9d63319554999ffdac12b490229e1b00bbda->leave($__internal_2a0e9d3e808cd8639edb45c8623a9d63319554999ffdac12b490229e1b00bbda_prof);

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
