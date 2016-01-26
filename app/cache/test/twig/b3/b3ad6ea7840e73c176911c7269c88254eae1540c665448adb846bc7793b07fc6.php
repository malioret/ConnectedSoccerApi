<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_58d03113013ec38ce6b1054c4ef0bf3f1fa8cd68edbb400ab6639f312ae8106b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_745085b903a89ab157088f47f2726eed1e9783f2ba8c86b532632d109977cd53 = $this->env->getExtension("native_profiler");
        $__internal_745085b903a89ab157088f47f2726eed1e9783f2ba8c86b532632d109977cd53->enter($__internal_745085b903a89ab157088f47f2726eed1e9783f2ba8c86b532632d109977cd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_745085b903a89ab157088f47f2726eed1e9783f2ba8c86b532632d109977cd53->leave($__internal_745085b903a89ab157088f47f2726eed1e9783f2ba8c86b532632d109977cd53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d3417ccbd6f7d2c713cf9ba51a0b0096610e7a4f71c1a591c31a85eeb8bd462 = $this->env->getExtension("native_profiler");
        $__internal_4d3417ccbd6f7d2c713cf9ba51a0b0096610e7a4f71c1a591c31a85eeb8bd462->enter($__internal_4d3417ccbd6f7d2c713cf9ba51a0b0096610e7a4f71c1a591c31a85eeb8bd462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_4d3417ccbd6f7d2c713cf9ba51a0b0096610e7a4f71c1a591c31a85eeb8bd462->leave($__internal_4d3417ccbd6f7d2c713cf9ba51a0b0096610e7a4f71c1a591c31a85eeb8bd462_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
