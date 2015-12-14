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
        $__internal_19b4a5163a79148431b237778f80028053a9dc3a043f1cd50dbf05990da633ba = $this->env->getExtension("native_profiler");
        $__internal_19b4a5163a79148431b237778f80028053a9dc3a043f1cd50dbf05990da633ba->enter($__internal_19b4a5163a79148431b237778f80028053a9dc3a043f1cd50dbf05990da633ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b4a5163a79148431b237778f80028053a9dc3a043f1cd50dbf05990da633ba->leave($__internal_19b4a5163a79148431b237778f80028053a9dc3a043f1cd50dbf05990da633ba_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b56277bd4526b9e3d58c8214a0c5175bcbf1b77fadaafb1d46abdf58a81f42ad = $this->env->getExtension("native_profiler");
        $__internal_b56277bd4526b9e3d58c8214a0c5175bcbf1b77fadaafb1d46abdf58a81f42ad->enter($__internal_b56277bd4526b9e3d58c8214a0c5175bcbf1b77fadaafb1d46abdf58a81f42ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b56277bd4526b9e3d58c8214a0c5175bcbf1b77fadaafb1d46abdf58a81f42ad->leave($__internal_b56277bd4526b9e3d58c8214a0c5175bcbf1b77fadaafb1d46abdf58a81f42ad_prof);

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
