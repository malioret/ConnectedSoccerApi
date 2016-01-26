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
        $__internal_09b7be948c0e60649e591f5f3b04233dfaa59660073898b40f94c65e5fd871d5 = $this->env->getExtension("native_profiler");
        $__internal_09b7be948c0e60649e591f5f3b04233dfaa59660073898b40f94c65e5fd871d5->enter($__internal_09b7be948c0e60649e591f5f3b04233dfaa59660073898b40f94c65e5fd871d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09b7be948c0e60649e591f5f3b04233dfaa59660073898b40f94c65e5fd871d5->leave($__internal_09b7be948c0e60649e591f5f3b04233dfaa59660073898b40f94c65e5fd871d5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b1bae547cd14c9b7538526c686181232691737bdc9424a73c9087685ea74b44d = $this->env->getExtension("native_profiler");
        $__internal_b1bae547cd14c9b7538526c686181232691737bdc9424a73c9087685ea74b44d->enter($__internal_b1bae547cd14c9b7538526c686181232691737bdc9424a73c9087685ea74b44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b1bae547cd14c9b7538526c686181232691737bdc9424a73c9087685ea74b44d->leave($__internal_b1bae547cd14c9b7538526c686181232691737bdc9424a73c9087685ea74b44d_prof);

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
