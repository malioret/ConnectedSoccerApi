<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b3d7bac07f097ec4d00c36b15488f61d9809a8f4f591c898687afaa8b2f97d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_850dba25c4efa3745f87964ee17ab9f7f5547e84816014e2f25e3cfe56e9aaca = $this->env->getExtension("native_profiler");
        $__internal_850dba25c4efa3745f87964ee17ab9f7f5547e84816014e2f25e3cfe56e9aaca->enter($__internal_850dba25c4efa3745f87964ee17ab9f7f5547e84816014e2f25e3cfe56e9aaca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_850dba25c4efa3745f87964ee17ab9f7f5547e84816014e2f25e3cfe56e9aaca->leave($__internal_850dba25c4efa3745f87964ee17ab9f7f5547e84816014e2f25e3cfe56e9aaca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62f92df58917719236b4a5c8371431688866087ff88f47b3c11d049b71d3ccd9 = $this->env->getExtension("native_profiler");
        $__internal_62f92df58917719236b4a5c8371431688866087ff88f47b3c11d049b71d3ccd9->enter($__internal_62f92df58917719236b4a5c8371431688866087ff88f47b3c11d049b71d3ccd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_62f92df58917719236b4a5c8371431688866087ff88f47b3c11d049b71d3ccd9->leave($__internal_62f92df58917719236b4a5c8371431688866087ff88f47b3c11d049b71d3ccd9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
