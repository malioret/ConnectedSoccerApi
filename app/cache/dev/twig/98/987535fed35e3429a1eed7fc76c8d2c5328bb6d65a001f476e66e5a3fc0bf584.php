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
        $__internal_b3ef7550e6d5c8ffe1c7bf335c076082d7ecb4d195e6d9c37206adb124498630 = $this->env->getExtension("native_profiler");
        $__internal_b3ef7550e6d5c8ffe1c7bf335c076082d7ecb4d195e6d9c37206adb124498630->enter($__internal_b3ef7550e6d5c8ffe1c7bf335c076082d7ecb4d195e6d9c37206adb124498630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3ef7550e6d5c8ffe1c7bf335c076082d7ecb4d195e6d9c37206adb124498630->leave($__internal_b3ef7550e6d5c8ffe1c7bf335c076082d7ecb4d195e6d9c37206adb124498630_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38375b303a93b85abc64e65542c4c8fef3172b08aadcd3a66c74798f209bb355 = $this->env->getExtension("native_profiler");
        $__internal_38375b303a93b85abc64e65542c4c8fef3172b08aadcd3a66c74798f209bb355->enter($__internal_38375b303a93b85abc64e65542c4c8fef3172b08aadcd3a66c74798f209bb355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_38375b303a93b85abc64e65542c4c8fef3172b08aadcd3a66c74798f209bb355->leave($__internal_38375b303a93b85abc64e65542c4c8fef3172b08aadcd3a66c74798f209bb355_prof);

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
