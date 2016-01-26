<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_c9b7cb3c799e3d6fbc5edb6b1e4d2d70d242d408133a653c95499870e63eaa50 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b656e5b8a6712e13810d1a7588836e66ef29d51694c8866dd1e82ccf4583efe8 = $this->env->getExtension("native_profiler");
        $__internal_b656e5b8a6712e13810d1a7588836e66ef29d51694c8866dd1e82ccf4583efe8->enter($__internal_b656e5b8a6712e13810d1a7588836e66ef29d51694c8866dd1e82ccf4583efe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b656e5b8a6712e13810d1a7588836e66ef29d51694c8866dd1e82ccf4583efe8->leave($__internal_b656e5b8a6712e13810d1a7588836e66ef29d51694c8866dd1e82ccf4583efe8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0a65ede15669e8645f628c9b08531ff276128617190d50e120068a93d3acd89f = $this->env->getExtension("native_profiler");
        $__internal_0a65ede15669e8645f628c9b08531ff276128617190d50e120068a93d3acd89f->enter($__internal_0a65ede15669e8645f628c9b08531ff276128617190d50e120068a93d3acd89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_0a65ede15669e8645f628c9b08531ff276128617190d50e120068a93d3acd89f->leave($__internal_0a65ede15669e8645f628c9b08531ff276128617190d50e120068a93d3acd89f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
