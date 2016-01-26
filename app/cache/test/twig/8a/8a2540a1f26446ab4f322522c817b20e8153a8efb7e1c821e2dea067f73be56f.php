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
        $__internal_df627f503162f2d0aed90a658da40b80fd975f011d69bac020d792f22877d97c = $this->env->getExtension("native_profiler");
        $__internal_df627f503162f2d0aed90a658da40b80fd975f011d69bac020d792f22877d97c->enter($__internal_df627f503162f2d0aed90a658da40b80fd975f011d69bac020d792f22877d97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df627f503162f2d0aed90a658da40b80fd975f011d69bac020d792f22877d97c->leave($__internal_df627f503162f2d0aed90a658da40b80fd975f011d69bac020d792f22877d97c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a997c72de305b55b935a75101ecd8230a6d0bba0c22f629a7337d06b9327b45f = $this->env->getExtension("native_profiler");
        $__internal_a997c72de305b55b935a75101ecd8230a6d0bba0c22f629a7337d06b9327b45f->enter($__internal_a997c72de305b55b935a75101ecd8230a6d0bba0c22f629a7337d06b9327b45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a997c72de305b55b935a75101ecd8230a6d0bba0c22f629a7337d06b9327b45f->leave($__internal_a997c72de305b55b935a75101ecd8230a6d0bba0c22f629a7337d06b9327b45f_prof);

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
