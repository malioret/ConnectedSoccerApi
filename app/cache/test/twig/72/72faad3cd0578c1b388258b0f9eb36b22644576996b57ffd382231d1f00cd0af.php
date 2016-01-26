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
        $__internal_a6b12a8d93aabe6dc69e1398b982e8ec39975a59103bdd91dca889a4d0d0ffb9 = $this->env->getExtension("native_profiler");
        $__internal_a6b12a8d93aabe6dc69e1398b982e8ec39975a59103bdd91dca889a4d0d0ffb9->enter($__internal_a6b12a8d93aabe6dc69e1398b982e8ec39975a59103bdd91dca889a4d0d0ffb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6b12a8d93aabe6dc69e1398b982e8ec39975a59103bdd91dca889a4d0d0ffb9->leave($__internal_a6b12a8d93aabe6dc69e1398b982e8ec39975a59103bdd91dca889a4d0d0ffb9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd4b9345c07fb789ae485bcbc7a5d7bcea2317d48563e01f66d3ab562dbbaa54 = $this->env->getExtension("native_profiler");
        $__internal_bd4b9345c07fb789ae485bcbc7a5d7bcea2317d48563e01f66d3ab562dbbaa54->enter($__internal_bd4b9345c07fb789ae485bcbc7a5d7bcea2317d48563e01f66d3ab562dbbaa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bd4b9345c07fb789ae485bcbc7a5d7bcea2317d48563e01f66d3ab562dbbaa54->leave($__internal_bd4b9345c07fb789ae485bcbc7a5d7bcea2317d48563e01f66d3ab562dbbaa54_prof);

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
