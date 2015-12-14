<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_62a51268fb8a921e6c67e99539b4c69ca2c1fbe7895e4770c9abd6318d08c47b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c943c03b426c8be41bf63a5675be677be3e7008b5313d18e2d399ec3f4c38e0 = $this->env->getExtension("native_profiler");
        $__internal_0c943c03b426c8be41bf63a5675be677be3e7008b5313d18e2d399ec3f4c38e0->enter($__internal_0c943c03b426c8be41bf63a5675be677be3e7008b5313d18e2d399ec3f4c38e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c943c03b426c8be41bf63a5675be677be3e7008b5313d18e2d399ec3f4c38e0->leave($__internal_0c943c03b426c8be41bf63a5675be677be3e7008b5313d18e2d399ec3f4c38e0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_021715d1daec361761da9ae9d58013c813668a7e3d0075f54d3bf50f3a418b35 = $this->env->getExtension("native_profiler");
        $__internal_021715d1daec361761da9ae9d58013c813668a7e3d0075f54d3bf50f3a418b35->enter($__internal_021715d1daec361761da9ae9d58013c813668a7e3d0075f54d3bf50f3a418b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_021715d1daec361761da9ae9d58013c813668a7e3d0075f54d3bf50f3a418b35->leave($__internal_021715d1daec361761da9ae9d58013c813668a7e3d0075f54d3bf50f3a418b35_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
