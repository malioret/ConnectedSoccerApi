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
        $__internal_3ec82839a49d11d8dc2a6dce2324cacea1f0c63761fee9d342604e3ef315ce91 = $this->env->getExtension("native_profiler");
        $__internal_3ec82839a49d11d8dc2a6dce2324cacea1f0c63761fee9d342604e3ef315ce91->enter($__internal_3ec82839a49d11d8dc2a6dce2324cacea1f0c63761fee9d342604e3ef315ce91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec82839a49d11d8dc2a6dce2324cacea1f0c63761fee9d342604e3ef315ce91->leave($__internal_3ec82839a49d11d8dc2a6dce2324cacea1f0c63761fee9d342604e3ef315ce91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26013d8ef5a20ad0b9658391170facbeec4a3c9e2ca193deff6c811c1f9e7b4a = $this->env->getExtension("native_profiler");
        $__internal_26013d8ef5a20ad0b9658391170facbeec4a3c9e2ca193deff6c811c1f9e7b4a->enter($__internal_26013d8ef5a20ad0b9658391170facbeec4a3c9e2ca193deff6c811c1f9e7b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_26013d8ef5a20ad0b9658391170facbeec4a3c9e2ca193deff6c811c1f9e7b4a->leave($__internal_26013d8ef5a20ad0b9658391170facbeec4a3c9e2ca193deff6c811c1f9e7b4a_prof);

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
