<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_e07ee13d1949d9714c8f98ccff42219e7e3b1c9310473614f042e28128ea9eed extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e66ae15a166c52e945cc4736efc8bcf98101cc860911d8dc2dbf7b02761597c5 = $this->env->getExtension("native_profiler");
        $__internal_e66ae15a166c52e945cc4736efc8bcf98101cc860911d8dc2dbf7b02761597c5->enter($__internal_e66ae15a166c52e945cc4736efc8bcf98101cc860911d8dc2dbf7b02761597c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e66ae15a166c52e945cc4736efc8bcf98101cc860911d8dc2dbf7b02761597c5->leave($__internal_e66ae15a166c52e945cc4736efc8bcf98101cc860911d8dc2dbf7b02761597c5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_762374a7daf91818e5a0e5258f73124fce7f5a9ccb299d1b8e3a3e7c7666ab87 = $this->env->getExtension("native_profiler");
        $__internal_762374a7daf91818e5a0e5258f73124fce7f5a9ccb299d1b8e3a3e7c7666ab87->enter($__internal_762374a7daf91818e5a0e5258f73124fce7f5a9ccb299d1b8e3a3e7c7666ab87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_762374a7daf91818e5a0e5258f73124fce7f5a9ccb299d1b8e3a3e7c7666ab87->leave($__internal_762374a7daf91818e5a0e5258f73124fce7f5a9ccb299d1b8e3a3e7c7666ab87_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
