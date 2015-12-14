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
        $__internal_55a0ec3d05eb1ffd385afdf2ef8f163d508f1a8710881ea95fc036a7ea439f23 = $this->env->getExtension("native_profiler");
        $__internal_55a0ec3d05eb1ffd385afdf2ef8f163d508f1a8710881ea95fc036a7ea439f23->enter($__internal_55a0ec3d05eb1ffd385afdf2ef8f163d508f1a8710881ea95fc036a7ea439f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55a0ec3d05eb1ffd385afdf2ef8f163d508f1a8710881ea95fc036a7ea439f23->leave($__internal_55a0ec3d05eb1ffd385afdf2ef8f163d508f1a8710881ea95fc036a7ea439f23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc3472f88c7535552b80869f1f866feba637ed32429bfbfc3ced5874a0093334 = $this->env->getExtension("native_profiler");
        $__internal_cc3472f88c7535552b80869f1f866feba637ed32429bfbfc3ced5874a0093334->enter($__internal_cc3472f88c7535552b80869f1f866feba637ed32429bfbfc3ced5874a0093334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_cc3472f88c7535552b80869f1f866feba637ed32429bfbfc3ced5874a0093334->leave($__internal_cc3472f88c7535552b80869f1f866feba637ed32429bfbfc3ced5874a0093334_prof);

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
