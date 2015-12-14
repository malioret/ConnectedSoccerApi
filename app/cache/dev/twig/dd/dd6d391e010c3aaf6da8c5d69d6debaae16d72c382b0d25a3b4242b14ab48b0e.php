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
        $__internal_b441bdc066ee1d4869d75c3c0466ad7a921f53d9441de8b9250ac0b972293884 = $this->env->getExtension("native_profiler");
        $__internal_b441bdc066ee1d4869d75c3c0466ad7a921f53d9441de8b9250ac0b972293884->enter($__internal_b441bdc066ee1d4869d75c3c0466ad7a921f53d9441de8b9250ac0b972293884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b441bdc066ee1d4869d75c3c0466ad7a921f53d9441de8b9250ac0b972293884->leave($__internal_b441bdc066ee1d4869d75c3c0466ad7a921f53d9441de8b9250ac0b972293884_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cb9eab49a45d78dfab56832ca7df923a583ebeae340e643f45629f6311e566d4 = $this->env->getExtension("native_profiler");
        $__internal_cb9eab49a45d78dfab56832ca7df923a583ebeae340e643f45629f6311e566d4->enter($__internal_cb9eab49a45d78dfab56832ca7df923a583ebeae340e643f45629f6311e566d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_cb9eab49a45d78dfab56832ca7df923a583ebeae340e643f45629f6311e566d4->leave($__internal_cb9eab49a45d78dfab56832ca7df923a583ebeae340e643f45629f6311e566d4_prof);

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
