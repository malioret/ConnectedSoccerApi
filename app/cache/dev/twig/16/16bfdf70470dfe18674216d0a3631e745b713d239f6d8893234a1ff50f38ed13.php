<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_98cbbe13a811ee81e3f603333b94ef03571f238d69098559803bba41b0eb26ad extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bd0cf21f8dcfebc37a239b4ae0a15bb845b412b5880080a8f418e65a3d94102 = $this->env->getExtension("native_profiler");
        $__internal_9bd0cf21f8dcfebc37a239b4ae0a15bb845b412b5880080a8f418e65a3d94102->enter($__internal_9bd0cf21f8dcfebc37a239b4ae0a15bb845b412b5880080a8f418e65a3d94102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bd0cf21f8dcfebc37a239b4ae0a15bb845b412b5880080a8f418e65a3d94102->leave($__internal_9bd0cf21f8dcfebc37a239b4ae0a15bb845b412b5880080a8f418e65a3d94102_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ead67a3d068a4df5d9fd1de3ad8eea03bfac5896bf7959a032a3832765972b29 = $this->env->getExtension("native_profiler");
        $__internal_ead67a3d068a4df5d9fd1de3ad8eea03bfac5896bf7959a032a3832765972b29->enter($__internal_ead67a3d068a4df5d9fd1de3ad8eea03bfac5896bf7959a032a3832765972b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ead67a3d068a4df5d9fd1de3ad8eea03bfac5896bf7959a032a3832765972b29->leave($__internal_ead67a3d068a4df5d9fd1de3ad8eea03bfac5896bf7959a032a3832765972b29_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
