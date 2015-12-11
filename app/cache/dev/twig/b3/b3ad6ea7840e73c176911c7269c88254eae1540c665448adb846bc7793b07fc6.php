<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_58d03113013ec38ce6b1054c4ef0bf3f1fa8cd68edbb400ab6639f312ae8106b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_678cc216e0453d096b860ce325a7a5e1d6076fa287fac32057eb1d6067cc853d = $this->env->getExtension("native_profiler");
        $__internal_678cc216e0453d096b860ce325a7a5e1d6076fa287fac32057eb1d6067cc853d->enter($__internal_678cc216e0453d096b860ce325a7a5e1d6076fa287fac32057eb1d6067cc853d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_678cc216e0453d096b860ce325a7a5e1d6076fa287fac32057eb1d6067cc853d->leave($__internal_678cc216e0453d096b860ce325a7a5e1d6076fa287fac32057eb1d6067cc853d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46084fa3ce3fc979b7f4e2797db3e044a1f883f92929e426cdbaf7f9415e0d0a = $this->env->getExtension("native_profiler");
        $__internal_46084fa3ce3fc979b7f4e2797db3e044a1f883f92929e426cdbaf7f9415e0d0a->enter($__internal_46084fa3ce3fc979b7f4e2797db3e044a1f883f92929e426cdbaf7f9415e0d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_46084fa3ce3fc979b7f4e2797db3e044a1f883f92929e426cdbaf7f9415e0d0a->leave($__internal_46084fa3ce3fc979b7f4e2797db3e044a1f883f92929e426cdbaf7f9415e0d0a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
