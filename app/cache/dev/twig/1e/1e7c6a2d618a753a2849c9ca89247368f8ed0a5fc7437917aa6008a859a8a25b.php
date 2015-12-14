<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_1de1087ec5c73cd4b5908d9bbc0f1d07a46aeb58784a6024913c81fea73d5a2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_cbc0cb444963f05fc9b08425fc4323a7a87544cd51cfa375d80cc1bce83563c2 = $this->env->getExtension("native_profiler");
        $__internal_cbc0cb444963f05fc9b08425fc4323a7a87544cd51cfa375d80cc1bce83563c2->enter($__internal_cbc0cb444963f05fc9b08425fc4323a7a87544cd51cfa375d80cc1bce83563c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbc0cb444963f05fc9b08425fc4323a7a87544cd51cfa375d80cc1bce83563c2->leave($__internal_cbc0cb444963f05fc9b08425fc4323a7a87544cd51cfa375d80cc1bce83563c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67e5c9d70634068124de8a7be8ef8e5af942a696f386570921774f3a013dfc3c = $this->env->getExtension("native_profiler");
        $__internal_67e5c9d70634068124de8a7be8ef8e5af942a696f386570921774f3a013dfc3c->enter($__internal_67e5c9d70634068124de8a7be8ef8e5af942a696f386570921774f3a013dfc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_67e5c9d70634068124de8a7be8ef8e5af942a696f386570921774f3a013dfc3c->leave($__internal_67e5c9d70634068124de8a7be8ef8e5af942a696f386570921774f3a013dfc3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
