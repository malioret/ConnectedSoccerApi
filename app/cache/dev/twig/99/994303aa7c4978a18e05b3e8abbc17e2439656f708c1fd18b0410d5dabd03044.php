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
        $__internal_a225ac8c1b56f3fcf1555245b55a4d470aaee6eec83b1c3681308011e3506168 = $this->env->getExtension("native_profiler");
        $__internal_a225ac8c1b56f3fcf1555245b55a4d470aaee6eec83b1c3681308011e3506168->enter($__internal_a225ac8c1b56f3fcf1555245b55a4d470aaee6eec83b1c3681308011e3506168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a225ac8c1b56f3fcf1555245b55a4d470aaee6eec83b1c3681308011e3506168->leave($__internal_a225ac8c1b56f3fcf1555245b55a4d470aaee6eec83b1c3681308011e3506168_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eda9512c04693000eb89abe722bbf7a79aa597a806fad122d883fb6e0099e652 = $this->env->getExtension("native_profiler");
        $__internal_eda9512c04693000eb89abe722bbf7a79aa597a806fad122d883fb6e0099e652->enter($__internal_eda9512c04693000eb89abe722bbf7a79aa597a806fad122d883fb6e0099e652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_eda9512c04693000eb89abe722bbf7a79aa597a806fad122d883fb6e0099e652->leave($__internal_eda9512c04693000eb89abe722bbf7a79aa597a806fad122d883fb6e0099e652_prof);

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
