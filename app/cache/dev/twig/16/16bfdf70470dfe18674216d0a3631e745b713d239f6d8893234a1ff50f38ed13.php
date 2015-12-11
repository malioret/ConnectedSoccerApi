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
        $__internal_26fccedf8b9b24e687e0cda152891a2c0ec04782d2e3c302e37a63c5f3f0ab13 = $this->env->getExtension("native_profiler");
        $__internal_26fccedf8b9b24e687e0cda152891a2c0ec04782d2e3c302e37a63c5f3f0ab13->enter($__internal_26fccedf8b9b24e687e0cda152891a2c0ec04782d2e3c302e37a63c5f3f0ab13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26fccedf8b9b24e687e0cda152891a2c0ec04782d2e3c302e37a63c5f3f0ab13->leave($__internal_26fccedf8b9b24e687e0cda152891a2c0ec04782d2e3c302e37a63c5f3f0ab13_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1637e96f17f4236a71e23cd3b0212bfbf121451d86ef788c5340d0eb6219ffb0 = $this->env->getExtension("native_profiler");
        $__internal_1637e96f17f4236a71e23cd3b0212bfbf121451d86ef788c5340d0eb6219ffb0->enter($__internal_1637e96f17f4236a71e23cd3b0212bfbf121451d86ef788c5340d0eb6219ffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1637e96f17f4236a71e23cd3b0212bfbf121451d86ef788c5340d0eb6219ffb0->leave($__internal_1637e96f17f4236a71e23cd3b0212bfbf121451d86ef788c5340d0eb6219ffb0_prof);

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
