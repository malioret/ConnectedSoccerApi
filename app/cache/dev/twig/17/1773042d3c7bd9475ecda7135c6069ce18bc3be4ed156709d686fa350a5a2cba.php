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
        $__internal_4f0992ab44e7c51319aa4c22a245cc0979a375e2a32c545651b0a7c3fef62bb1 = $this->env->getExtension("native_profiler");
        $__internal_4f0992ab44e7c51319aa4c22a245cc0979a375e2a32c545651b0a7c3fef62bb1->enter($__internal_4f0992ab44e7c51319aa4c22a245cc0979a375e2a32c545651b0a7c3fef62bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f0992ab44e7c51319aa4c22a245cc0979a375e2a32c545651b0a7c3fef62bb1->leave($__internal_4f0992ab44e7c51319aa4c22a245cc0979a375e2a32c545651b0a7c3fef62bb1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8319e5a27c4cee63e07aac281ec4aba5347763793b4847df292b524a287627d8 = $this->env->getExtension("native_profiler");
        $__internal_8319e5a27c4cee63e07aac281ec4aba5347763793b4847df292b524a287627d8->enter($__internal_8319e5a27c4cee63e07aac281ec4aba5347763793b4847df292b524a287627d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_8319e5a27c4cee63e07aac281ec4aba5347763793b4847df292b524a287627d8->leave($__internal_8319e5a27c4cee63e07aac281ec4aba5347763793b4847df292b524a287627d8_prof);

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
