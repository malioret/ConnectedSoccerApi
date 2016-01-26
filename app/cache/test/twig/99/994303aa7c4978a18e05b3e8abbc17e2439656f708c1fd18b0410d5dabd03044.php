<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b3d7bac07f097ec4d00c36b15488f61d9809a8f4f591c898687afaa8b2f97d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_912943314b1170f0bb45ea94076fa6bdf9511060c477b86ccd47f59eaceae485 = $this->env->getExtension("native_profiler");
        $__internal_912943314b1170f0bb45ea94076fa6bdf9511060c477b86ccd47f59eaceae485->enter($__internal_912943314b1170f0bb45ea94076fa6bdf9511060c477b86ccd47f59eaceae485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_912943314b1170f0bb45ea94076fa6bdf9511060c477b86ccd47f59eaceae485->leave($__internal_912943314b1170f0bb45ea94076fa6bdf9511060c477b86ccd47f59eaceae485_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a84a2502ac9ef5fef88786528211941f87194de54d10a84d1689202794b86ccd = $this->env->getExtension("native_profiler");
        $__internal_a84a2502ac9ef5fef88786528211941f87194de54d10a84d1689202794b86ccd->enter($__internal_a84a2502ac9ef5fef88786528211941f87194de54d10a84d1689202794b86ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a84a2502ac9ef5fef88786528211941f87194de54d10a84d1689202794b86ccd->leave($__internal_a84a2502ac9ef5fef88786528211941f87194de54d10a84d1689202794b86ccd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
