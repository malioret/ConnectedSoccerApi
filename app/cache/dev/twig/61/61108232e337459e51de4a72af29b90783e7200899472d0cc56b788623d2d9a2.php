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
        $__internal_2141125c361c47692ef4862b24e1208b8a8a9011db7967540973aeab9cd1fd9d = $this->env->getExtension("native_profiler");
        $__internal_2141125c361c47692ef4862b24e1208b8a8a9011db7967540973aeab9cd1fd9d->enter($__internal_2141125c361c47692ef4862b24e1208b8a8a9011db7967540973aeab9cd1fd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2141125c361c47692ef4862b24e1208b8a8a9011db7967540973aeab9cd1fd9d->leave($__internal_2141125c361c47692ef4862b24e1208b8a8a9011db7967540973aeab9cd1fd9d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_325c19ba1ba8c9474bb695654d57b9e6954fb556bd2324d5d6a490be72cee27c = $this->env->getExtension("native_profiler");
        $__internal_325c19ba1ba8c9474bb695654d57b9e6954fb556bd2324d5d6a490be72cee27c->enter($__internal_325c19ba1ba8c9474bb695654d57b9e6954fb556bd2324d5d6a490be72cee27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_325c19ba1ba8c9474bb695654d57b9e6954fb556bd2324d5d6a490be72cee27c->leave($__internal_325c19ba1ba8c9474bb695654d57b9e6954fb556bd2324d5d6a490be72cee27c_prof);

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
