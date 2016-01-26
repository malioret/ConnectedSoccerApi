<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_5b3b811a9ba286ee1fa24bd17b5ef4372d3d095e51bf74f953a65a95e07caadf extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbdd2d05834720979f03b0da8accc71c1cdff184202e6a99310300ff22ddbc45 = $this->env->getExtension("native_profiler");
        $__internal_fbdd2d05834720979f03b0da8accc71c1cdff184202e6a99310300ff22ddbc45->enter($__internal_fbdd2d05834720979f03b0da8accc71c1cdff184202e6a99310300ff22ddbc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbdd2d05834720979f03b0da8accc71c1cdff184202e6a99310300ff22ddbc45->leave($__internal_fbdd2d05834720979f03b0da8accc71c1cdff184202e6a99310300ff22ddbc45_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cd4352f599456f564ca498f2dd67d2230e5f3e5e2f3fb598b98f3e778f34db31 = $this->env->getExtension("native_profiler");
        $__internal_cd4352f599456f564ca498f2dd67d2230e5f3e5e2f3fb598b98f3e778f34db31->enter($__internal_cd4352f599456f564ca498f2dd67d2230e5f3e5e2f3fb598b98f3e778f34db31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_cd4352f599456f564ca498f2dd67d2230e5f3e5e2f3fb598b98f3e778f34db31->leave($__internal_cd4352f599456f564ca498f2dd67d2230e5f3e5e2f3fb598b98f3e778f34db31_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
