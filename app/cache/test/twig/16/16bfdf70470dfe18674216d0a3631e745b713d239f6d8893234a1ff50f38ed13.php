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
        $__internal_aa4562271e442c2ecb99e2bf3548157768e119d1a1f29f6693aeb8075183116b = $this->env->getExtension("native_profiler");
        $__internal_aa4562271e442c2ecb99e2bf3548157768e119d1a1f29f6693aeb8075183116b->enter($__internal_aa4562271e442c2ecb99e2bf3548157768e119d1a1f29f6693aeb8075183116b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa4562271e442c2ecb99e2bf3548157768e119d1a1f29f6693aeb8075183116b->leave($__internal_aa4562271e442c2ecb99e2bf3548157768e119d1a1f29f6693aeb8075183116b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a43088a690704c53b570704953490e8fbb9c7e6fc8d2cf9f9d331ebd633c861a = $this->env->getExtension("native_profiler");
        $__internal_a43088a690704c53b570704953490e8fbb9c7e6fc8d2cf9f9d331ebd633c861a->enter($__internal_a43088a690704c53b570704953490e8fbb9c7e6fc8d2cf9f9d331ebd633c861a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a43088a690704c53b570704953490e8fbb9c7e6fc8d2cf9f9d331ebd633c861a->leave($__internal_a43088a690704c53b570704953490e8fbb9c7e6fc8d2cf9f9d331ebd633c861a_prof);

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
