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
        $__internal_31ae1a91354054dd2f9386976d6a9c2f35060df92057d795a60ddc8d4b5bdc06 = $this->env->getExtension("native_profiler");
        $__internal_31ae1a91354054dd2f9386976d6a9c2f35060df92057d795a60ddc8d4b5bdc06->enter($__internal_31ae1a91354054dd2f9386976d6a9c2f35060df92057d795a60ddc8d4b5bdc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ae1a91354054dd2f9386976d6a9c2f35060df92057d795a60ddc8d4b5bdc06->leave($__internal_31ae1a91354054dd2f9386976d6a9c2f35060df92057d795a60ddc8d4b5bdc06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00a8d6c6c0e46fcb1d0e5c4e12644a822f5c10a8786b3901640b36bc68f91213 = $this->env->getExtension("native_profiler");
        $__internal_00a8d6c6c0e46fcb1d0e5c4e12644a822f5c10a8786b3901640b36bc68f91213->enter($__internal_00a8d6c6c0e46fcb1d0e5c4e12644a822f5c10a8786b3901640b36bc68f91213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_00a8d6c6c0e46fcb1d0e5c4e12644a822f5c10a8786b3901640b36bc68f91213->leave($__internal_00a8d6c6c0e46fcb1d0e5c4e12644a822f5c10a8786b3901640b36bc68f91213_prof);

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
