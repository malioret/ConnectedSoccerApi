<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fae58d95a4b4f98300676c490138b3e97ba5e06e3dd3174879719e48938733d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c98fe3426e582103066f1efc6739d1fbb00eb3e531a4cb0abcb037d4363651be = $this->env->getExtension("native_profiler");
        $__internal_c98fe3426e582103066f1efc6739d1fbb00eb3e531a4cb0abcb037d4363651be->enter($__internal_c98fe3426e582103066f1efc6739d1fbb00eb3e531a4cb0abcb037d4363651be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c98fe3426e582103066f1efc6739d1fbb00eb3e531a4cb0abcb037d4363651be->leave($__internal_c98fe3426e582103066f1efc6739d1fbb00eb3e531a4cb0abcb037d4363651be_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fa164bce30dcb9cc34fc11ed410a066196f7bbe0519e7e3e63eb7ba7434a59b = $this->env->getExtension("native_profiler");
        $__internal_8fa164bce30dcb9cc34fc11ed410a066196f7bbe0519e7e3e63eb7ba7434a59b->enter($__internal_8fa164bce30dcb9cc34fc11ed410a066196f7bbe0519e7e3e63eb7ba7434a59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8fa164bce30dcb9cc34fc11ed410a066196f7bbe0519e7e3e63eb7ba7434a59b->leave($__internal_8fa164bce30dcb9cc34fc11ed410a066196f7bbe0519e7e3e63eb7ba7434a59b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
