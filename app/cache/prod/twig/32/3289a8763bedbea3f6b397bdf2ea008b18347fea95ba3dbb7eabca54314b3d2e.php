<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8709b6dc0e99079a0c7d855a407a88a76a68c405988258ed4eafc84c4832e618 extends Twig_Template
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
        $__internal_7ec19a5908a5a965afb9df3bddd10a8a1c0865dc4190688187b671360da18e08 = $this->env->getExtension("native_profiler");
        $__internal_7ec19a5908a5a965afb9df3bddd10a8a1c0865dc4190688187b671360da18e08->enter($__internal_7ec19a5908a5a965afb9df3bddd10a8a1c0865dc4190688187b671360da18e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ec19a5908a5a965afb9df3bddd10a8a1c0865dc4190688187b671360da18e08->leave($__internal_7ec19a5908a5a965afb9df3bddd10a8a1c0865dc4190688187b671360da18e08_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9462d4de118fc779d93de3f5aa5fba583f85ac9258d07da5fcad8c5137aea4d = $this->env->getExtension("native_profiler");
        $__internal_c9462d4de118fc779d93de3f5aa5fba583f85ac9258d07da5fcad8c5137aea4d->enter($__internal_c9462d4de118fc779d93de3f5aa5fba583f85ac9258d07da5fcad8c5137aea4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c9462d4de118fc779d93de3f5aa5fba583f85ac9258d07da5fcad8c5137aea4d->leave($__internal_c9462d4de118fc779d93de3f5aa5fba583f85ac9258d07da5fcad8c5137aea4d_prof);

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
