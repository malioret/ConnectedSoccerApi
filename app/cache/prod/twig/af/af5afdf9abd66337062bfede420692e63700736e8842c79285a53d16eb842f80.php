<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b4240d0f1088e5e518fc000c56697e6070a9db0bbf0366701011daad3a5c8f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_52abcbf7bede7e1f76e2f284f4019133c9ea890b418f0f6e2aabe30ae671e3ec = $this->env->getExtension("native_profiler");
        $__internal_52abcbf7bede7e1f76e2f284f4019133c9ea890b418f0f6e2aabe30ae671e3ec->enter($__internal_52abcbf7bede7e1f76e2f284f4019133c9ea890b418f0f6e2aabe30ae671e3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52abcbf7bede7e1f76e2f284f4019133c9ea890b418f0f6e2aabe30ae671e3ec->leave($__internal_52abcbf7bede7e1f76e2f284f4019133c9ea890b418f0f6e2aabe30ae671e3ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_272f01957cca3fa45d6779776034d4ac90a4d8286c47781ab66695c1e458b790 = $this->env->getExtension("native_profiler");
        $__internal_272f01957cca3fa45d6779776034d4ac90a4d8286c47781ab66695c1e458b790->enter($__internal_272f01957cca3fa45d6779776034d4ac90a4d8286c47781ab66695c1e458b790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_272f01957cca3fa45d6779776034d4ac90a4d8286c47781ab66695c1e458b790->leave($__internal_272f01957cca3fa45d6779776034d4ac90a4d8286c47781ab66695c1e458b790_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
