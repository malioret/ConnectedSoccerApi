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
        $__internal_996d71e99b2e3e46a17fad9d361bd841ea84e782ddf64aac27e83d675b4ce44c = $this->env->getExtension("native_profiler");
        $__internal_996d71e99b2e3e46a17fad9d361bd841ea84e782ddf64aac27e83d675b4ce44c->enter($__internal_996d71e99b2e3e46a17fad9d361bd841ea84e782ddf64aac27e83d675b4ce44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_996d71e99b2e3e46a17fad9d361bd841ea84e782ddf64aac27e83d675b4ce44c->leave($__internal_996d71e99b2e3e46a17fad9d361bd841ea84e782ddf64aac27e83d675b4ce44c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96e426ef71beaa167afcb240e411fbc4bee37f7f80bba754b4ab129142a4dadf = $this->env->getExtension("native_profiler");
        $__internal_96e426ef71beaa167afcb240e411fbc4bee37f7f80bba754b4ab129142a4dadf->enter($__internal_96e426ef71beaa167afcb240e411fbc4bee37f7f80bba754b4ab129142a4dadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_96e426ef71beaa167afcb240e411fbc4bee37f7f80bba754b4ab129142a4dadf->leave($__internal_96e426ef71beaa167afcb240e411fbc4bee37f7f80bba754b4ab129142a4dadf_prof);

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
