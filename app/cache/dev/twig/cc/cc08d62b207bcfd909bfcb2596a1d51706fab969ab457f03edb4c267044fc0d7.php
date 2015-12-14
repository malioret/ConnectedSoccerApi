<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9bec0f3caf2dd6bdd551218365bc0e1debf44c5c647a1b5ed67e78550731321a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_5b047e9d3b1fc3888867e77cf2971f83f7ed7797e109c91bf6727ea152099be5 = $this->env->getExtension("native_profiler");
        $__internal_5b047e9d3b1fc3888867e77cf2971f83f7ed7797e109c91bf6727ea152099be5->enter($__internal_5b047e9d3b1fc3888867e77cf2971f83f7ed7797e109c91bf6727ea152099be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b047e9d3b1fc3888867e77cf2971f83f7ed7797e109c91bf6727ea152099be5->leave($__internal_5b047e9d3b1fc3888867e77cf2971f83f7ed7797e109c91bf6727ea152099be5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7647de4b35cf70ce44c0cb3bee64301515948ac4e38720984c4a5226f5c819aa = $this->env->getExtension("native_profiler");
        $__internal_7647de4b35cf70ce44c0cb3bee64301515948ac4e38720984c4a5226f5c819aa->enter($__internal_7647de4b35cf70ce44c0cb3bee64301515948ac4e38720984c4a5226f5c819aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7647de4b35cf70ce44c0cb3bee64301515948ac4e38720984c4a5226f5c819aa->leave($__internal_7647de4b35cf70ce44c0cb3bee64301515948ac4e38720984c4a5226f5c819aa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
