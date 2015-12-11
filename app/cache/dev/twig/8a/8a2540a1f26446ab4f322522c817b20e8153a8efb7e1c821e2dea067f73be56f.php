<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_0f3394d7edce185703664267dc4ccd15f922f1f94c9076aca2ccbbf11cb9a56b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb667dcf02148d549ee9d280aa15640c4d8f3d27b087e108e53eaba5ec41dbd = $this->env->getExtension("native_profiler");
        $__internal_3bb667dcf02148d549ee9d280aa15640c4d8f3d27b087e108e53eaba5ec41dbd->enter($__internal_3bb667dcf02148d549ee9d280aa15640c4d8f3d27b087e108e53eaba5ec41dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb667dcf02148d549ee9d280aa15640c4d8f3d27b087e108e53eaba5ec41dbd->leave($__internal_3bb667dcf02148d549ee9d280aa15640c4d8f3d27b087e108e53eaba5ec41dbd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d03b676dfe80f42d40718445f94e07de37021e98b20559cb8a4998a211a20235 = $this->env->getExtension("native_profiler");
        $__internal_d03b676dfe80f42d40718445f94e07de37021e98b20559cb8a4998a211a20235->enter($__internal_d03b676dfe80f42d40718445f94e07de37021e98b20559cb8a4998a211a20235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_d03b676dfe80f42d40718445f94e07de37021e98b20559cb8a4998a211a20235->leave($__internal_d03b676dfe80f42d40718445f94e07de37021e98b20559cb8a4998a211a20235_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
