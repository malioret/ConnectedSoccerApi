<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_74198ee53af5c05809a8ff5da44560481bbb115b90adf7635341b4dfc118131d extends Twig_Template
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
        $__internal_c6791008158e59a787628942f3f85f390430752bf745730f62864b812d1d1a6f = $this->env->getExtension("native_profiler");
        $__internal_c6791008158e59a787628942f3f85f390430752bf745730f62864b812d1d1a6f->enter($__internal_c6791008158e59a787628942f3f85f390430752bf745730f62864b812d1d1a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6791008158e59a787628942f3f85f390430752bf745730f62864b812d1d1a6f->leave($__internal_c6791008158e59a787628942f3f85f390430752bf745730f62864b812d1d1a6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1e3e3ecad3cf669194e7d540a41b55630bda8e30fba359b5ece1376ef24a9c6 = $this->env->getExtension("native_profiler");
        $__internal_a1e3e3ecad3cf669194e7d540a41b55630bda8e30fba359b5ece1376ef24a9c6->enter($__internal_a1e3e3ecad3cf669194e7d540a41b55630bda8e30fba359b5ece1376ef24a9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a1e3e3ecad3cf669194e7d540a41b55630bda8e30fba359b5ece1376ef24a9c6->leave($__internal_a1e3e3ecad3cf669194e7d540a41b55630bda8e30fba359b5ece1376ef24a9c6_prof);

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
