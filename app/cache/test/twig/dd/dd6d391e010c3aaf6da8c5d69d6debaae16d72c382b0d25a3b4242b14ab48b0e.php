<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_42a6d60ac9ebf546bb8e82f9475e286649bc2cac55b6ae074ec9ca68e1145a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_c780572158521be28ad933d1562183409b2cbb7512a0a4479a54a29b26e23a81 = $this->env->getExtension("native_profiler");
        $__internal_c780572158521be28ad933d1562183409b2cbb7512a0a4479a54a29b26e23a81->enter($__internal_c780572158521be28ad933d1562183409b2cbb7512a0a4479a54a29b26e23a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c780572158521be28ad933d1562183409b2cbb7512a0a4479a54a29b26e23a81->leave($__internal_c780572158521be28ad933d1562183409b2cbb7512a0a4479a54a29b26e23a81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d69eddcc33cc59dffbcff12dc80c4ae9c428aa913811263984f0ea3293eef01e = $this->env->getExtension("native_profiler");
        $__internal_d69eddcc33cc59dffbcff12dc80c4ae9c428aa913811263984f0ea3293eef01e->enter($__internal_d69eddcc33cc59dffbcff12dc80c4ae9c428aa913811263984f0ea3293eef01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d69eddcc33cc59dffbcff12dc80c4ae9c428aa913811263984f0ea3293eef01e->leave($__internal_d69eddcc33cc59dffbcff12dc80c4ae9c428aa913811263984f0ea3293eef01e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
