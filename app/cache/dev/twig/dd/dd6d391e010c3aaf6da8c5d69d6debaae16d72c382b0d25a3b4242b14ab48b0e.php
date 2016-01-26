<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_42a6d60ac9ebf546bb8e82f9475e286649bc2cac55b6ae074ec9ca68e1145a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_944d6eeac4f8460236bdea2ee671c004b4198668bcd96f5e443f50d3bf338bad = $this->env->getExtension("native_profiler");
        $__internal_944d6eeac4f8460236bdea2ee671c004b4198668bcd96f5e443f50d3bf338bad->enter($__internal_944d6eeac4f8460236bdea2ee671c004b4198668bcd96f5e443f50d3bf338bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944d6eeac4f8460236bdea2ee671c004b4198668bcd96f5e443f50d3bf338bad->leave($__internal_944d6eeac4f8460236bdea2ee671c004b4198668bcd96f5e443f50d3bf338bad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e3ca8409b8f738edea01b819020676adefa07fc5d86cee516ff96178d5abd82 = $this->env->getExtension("native_profiler");
        $__internal_5e3ca8409b8f738edea01b819020676adefa07fc5d86cee516ff96178d5abd82->enter($__internal_5e3ca8409b8f738edea01b819020676adefa07fc5d86cee516ff96178d5abd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_5e3ca8409b8f738edea01b819020676adefa07fc5d86cee516ff96178d5abd82->leave($__internal_5e3ca8409b8f738edea01b819020676adefa07fc5d86cee516ff96178d5abd82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
