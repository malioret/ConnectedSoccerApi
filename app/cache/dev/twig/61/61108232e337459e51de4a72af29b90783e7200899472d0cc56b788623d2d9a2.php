<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_ac5e8b118471322c237ff2e3125a051a2f89dc2a5c45b9770c1c47f79b629c7f extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ed9dc5f1909c45b9c579f2a8d3de95415786d171d8a2d816772791e2a517e9c = $this->env->getExtension("native_profiler");
        $__internal_6ed9dc5f1909c45b9c579f2a8d3de95415786d171d8a2d816772791e2a517e9c->enter($__internal_6ed9dc5f1909c45b9c579f2a8d3de95415786d171d8a2d816772791e2a517e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ed9dc5f1909c45b9c579f2a8d3de95415786d171d8a2d816772791e2a517e9c->leave($__internal_6ed9dc5f1909c45b9c579f2a8d3de95415786d171d8a2d816772791e2a517e9c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ac1e31fa94fe89b864b461582130d9f67a43ac8964372a2145c06b921f29f462 = $this->env->getExtension("native_profiler");
        $__internal_ac1e31fa94fe89b864b461582130d9f67a43ac8964372a2145c06b921f29f462->enter($__internal_ac1e31fa94fe89b864b461582130d9f67a43ac8964372a2145c06b921f29f462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ac1e31fa94fe89b864b461582130d9f67a43ac8964372a2145c06b921f29f462->leave($__internal_ac1e31fa94fe89b864b461582130d9f67a43ac8964372a2145c06b921f29f462_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
