<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c26ed13be06482ee6a872f454e982f103e514dea2971aabf2c6e036ad461e7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1640c0077fb249fca54beae03db362b78456585b26e4c53abf0ef776566b0a47 = $this->env->getExtension("native_profiler");
        $__internal_1640c0077fb249fca54beae03db362b78456585b26e4c53abf0ef776566b0a47->enter($__internal_1640c0077fb249fca54beae03db362b78456585b26e4c53abf0ef776566b0a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1640c0077fb249fca54beae03db362b78456585b26e4c53abf0ef776566b0a47->leave($__internal_1640c0077fb249fca54beae03db362b78456585b26e4c53abf0ef776566b0a47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78ce52d49dc85dc07026945ae106695d90c0c02020e8703e7841ed04131a1aae = $this->env->getExtension("native_profiler");
        $__internal_78ce52d49dc85dc07026945ae106695d90c0c02020e8703e7841ed04131a1aae->enter($__internal_78ce52d49dc85dc07026945ae106695d90c0c02020e8703e7841ed04131a1aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_78ce52d49dc85dc07026945ae106695d90c0c02020e8703e7841ed04131a1aae->leave($__internal_78ce52d49dc85dc07026945ae106695d90c0c02020e8703e7841ed04131a1aae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
