<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_57ad38c391d77080d2179a1df031e7a38c0e75286d35c8c4bd75646f1eb5bbf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_14278f4f18338c2ec18e0738b5f612180b37e02438bd4c6fa342bba830b54d4d = $this->env->getExtension("native_profiler");
        $__internal_14278f4f18338c2ec18e0738b5f612180b37e02438bd4c6fa342bba830b54d4d->enter($__internal_14278f4f18338c2ec18e0738b5f612180b37e02438bd4c6fa342bba830b54d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14278f4f18338c2ec18e0738b5f612180b37e02438bd4c6fa342bba830b54d4d->leave($__internal_14278f4f18338c2ec18e0738b5f612180b37e02438bd4c6fa342bba830b54d4d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92c8f9d8be8c9308a9feb07e2c4ca7e52c57af1995c2707099fddbef5167ef38 = $this->env->getExtension("native_profiler");
        $__internal_92c8f9d8be8c9308a9feb07e2c4ca7e52c57af1995c2707099fddbef5167ef38->enter($__internal_92c8f9d8be8c9308a9feb07e2c4ca7e52c57af1995c2707099fddbef5167ef38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_92c8f9d8be8c9308a9feb07e2c4ca7e52c57af1995c2707099fddbef5167ef38->leave($__internal_92c8f9d8be8c9308a9feb07e2c4ca7e52c57af1995c2707099fddbef5167ef38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
