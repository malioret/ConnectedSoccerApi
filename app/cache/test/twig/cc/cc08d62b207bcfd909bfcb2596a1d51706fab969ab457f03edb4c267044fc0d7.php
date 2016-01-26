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
        $__internal_d28528e22c5f68c3af5970a13efd4abb37cfa3f4b61980933c5747b2b1bc4d1a = $this->env->getExtension("native_profiler");
        $__internal_d28528e22c5f68c3af5970a13efd4abb37cfa3f4b61980933c5747b2b1bc4d1a->enter($__internal_d28528e22c5f68c3af5970a13efd4abb37cfa3f4b61980933c5747b2b1bc4d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28528e22c5f68c3af5970a13efd4abb37cfa3f4b61980933c5747b2b1bc4d1a->leave($__internal_d28528e22c5f68c3af5970a13efd4abb37cfa3f4b61980933c5747b2b1bc4d1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54149a544d79d57fac9e3d1be5f24e25f993bc3e1fe9466624244d68c9fb0931 = $this->env->getExtension("native_profiler");
        $__internal_54149a544d79d57fac9e3d1be5f24e25f993bc3e1fe9466624244d68c9fb0931->enter($__internal_54149a544d79d57fac9e3d1be5f24e25f993bc3e1fe9466624244d68c9fb0931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_54149a544d79d57fac9e3d1be5f24e25f993bc3e1fe9466624244d68c9fb0931->leave($__internal_54149a544d79d57fac9e3d1be5f24e25f993bc3e1fe9466624244d68c9fb0931_prof);

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
