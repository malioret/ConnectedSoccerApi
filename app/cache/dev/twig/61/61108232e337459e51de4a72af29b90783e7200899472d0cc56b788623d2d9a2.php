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
        $__internal_88369ee88ac38723caf8a5b179eb37798cf248bc5563bdc9163ea63e610cbcb4 = $this->env->getExtension("native_profiler");
        $__internal_88369ee88ac38723caf8a5b179eb37798cf248bc5563bdc9163ea63e610cbcb4->enter($__internal_88369ee88ac38723caf8a5b179eb37798cf248bc5563bdc9163ea63e610cbcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88369ee88ac38723caf8a5b179eb37798cf248bc5563bdc9163ea63e610cbcb4->leave($__internal_88369ee88ac38723caf8a5b179eb37798cf248bc5563bdc9163ea63e610cbcb4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_869e3df8afb3298de4f8bfe40807492a7861e05711a2d937e3197efa1a9dc682 = $this->env->getExtension("native_profiler");
        $__internal_869e3df8afb3298de4f8bfe40807492a7861e05711a2d937e3197efa1a9dc682->enter($__internal_869e3df8afb3298de4f8bfe40807492a7861e05711a2d937e3197efa1a9dc682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_869e3df8afb3298de4f8bfe40807492a7861e05711a2d937e3197efa1a9dc682->leave($__internal_869e3df8afb3298de4f8bfe40807492a7861e05711a2d937e3197efa1a9dc682_prof);

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
