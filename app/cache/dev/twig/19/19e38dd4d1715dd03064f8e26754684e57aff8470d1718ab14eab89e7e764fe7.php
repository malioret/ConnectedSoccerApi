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
        $__internal_6eda5393ff8b6787a8b9cd7177b988cfd552dab1242907d8b751c3708befc2d5 = $this->env->getExtension("native_profiler");
        $__internal_6eda5393ff8b6787a8b9cd7177b988cfd552dab1242907d8b751c3708befc2d5->enter($__internal_6eda5393ff8b6787a8b9cd7177b988cfd552dab1242907d8b751c3708befc2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eda5393ff8b6787a8b9cd7177b988cfd552dab1242907d8b751c3708befc2d5->leave($__internal_6eda5393ff8b6787a8b9cd7177b988cfd552dab1242907d8b751c3708befc2d5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b96853d97ce23cf8b0267319082d20fdbcba10373eca558301bd43dec14f7ce8 = $this->env->getExtension("native_profiler");
        $__internal_b96853d97ce23cf8b0267319082d20fdbcba10373eca558301bd43dec14f7ce8->enter($__internal_b96853d97ce23cf8b0267319082d20fdbcba10373eca558301bd43dec14f7ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_b96853d97ce23cf8b0267319082d20fdbcba10373eca558301bd43dec14f7ce8->leave($__internal_b96853d97ce23cf8b0267319082d20fdbcba10373eca558301bd43dec14f7ce8_prof);

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
