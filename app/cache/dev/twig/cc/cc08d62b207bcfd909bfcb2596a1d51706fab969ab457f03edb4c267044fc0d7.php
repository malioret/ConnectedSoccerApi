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
        $__internal_8e3af7be188c0041131606173ac021e67fe8b4161763c3f17aa7b57b18d796ff = $this->env->getExtension("native_profiler");
        $__internal_8e3af7be188c0041131606173ac021e67fe8b4161763c3f17aa7b57b18d796ff->enter($__internal_8e3af7be188c0041131606173ac021e67fe8b4161763c3f17aa7b57b18d796ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e3af7be188c0041131606173ac021e67fe8b4161763c3f17aa7b57b18d796ff->leave($__internal_8e3af7be188c0041131606173ac021e67fe8b4161763c3f17aa7b57b18d796ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc32fc1578457f859c5177c10df420640b9f9d95a45f96fcb159c123ee2910cf = $this->env->getExtension("native_profiler");
        $__internal_dc32fc1578457f859c5177c10df420640b9f9d95a45f96fcb159c123ee2910cf->enter($__internal_dc32fc1578457f859c5177c10df420640b9f9d95a45f96fcb159c123ee2910cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_dc32fc1578457f859c5177c10df420640b9f9d95a45f96fcb159c123ee2910cf->leave($__internal_dc32fc1578457f859c5177c10df420640b9f9d95a45f96fcb159c123ee2910cf_prof);

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
