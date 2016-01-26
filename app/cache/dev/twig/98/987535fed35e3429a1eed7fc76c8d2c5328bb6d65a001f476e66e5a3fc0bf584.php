<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_75c24075d98f3fb61f814372fd3369f11f4a130f700be145ad523ff2f9d829d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b65030ac4d28b5321f5e36d48edad3d7f71bbd03115ca622624a4ceab9484811 = $this->env->getExtension("native_profiler");
        $__internal_b65030ac4d28b5321f5e36d48edad3d7f71bbd03115ca622624a4ceab9484811->enter($__internal_b65030ac4d28b5321f5e36d48edad3d7f71bbd03115ca622624a4ceab9484811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b65030ac4d28b5321f5e36d48edad3d7f71bbd03115ca622624a4ceab9484811->leave($__internal_b65030ac4d28b5321f5e36d48edad3d7f71bbd03115ca622624a4ceab9484811_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cea7aa29a3dd09eb2690ed085179bee31a8db79e6f80c3491094c648d966a0ac = $this->env->getExtension("native_profiler");
        $__internal_cea7aa29a3dd09eb2690ed085179bee31a8db79e6f80c3491094c648d966a0ac->enter($__internal_cea7aa29a3dd09eb2690ed085179bee31a8db79e6f80c3491094c648d966a0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_cea7aa29a3dd09eb2690ed085179bee31a8db79e6f80c3491094c648d966a0ac->leave($__internal_cea7aa29a3dd09eb2690ed085179bee31a8db79e6f80c3491094c648d966a0ac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
