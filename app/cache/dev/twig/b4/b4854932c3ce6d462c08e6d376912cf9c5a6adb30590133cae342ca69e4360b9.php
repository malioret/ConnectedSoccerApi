<?php

/* SoccerEventBundle:Default:index.html.twig */
class __TwigTemplate_79092808f627d0383355ff3cfeff36c403474bb9dff657e88ea026e1870d4074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad97126ee43c2fc673b99bc3abb52cd3a994d212a21b5810acd10725c4d71f02 = $this->env->getExtension("native_profiler");
        $__internal_ad97126ee43c2fc673b99bc3abb52cd3a994d212a21b5810acd10725c4d71f02->enter($__internal_ad97126ee43c2fc673b99bc3abb52cd3a994d212a21b5810acd10725c4d71f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerEventBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_ad97126ee43c2fc673b99bc3abb52cd3a994d212a21b5810acd10725c4d71f02->leave($__internal_ad97126ee43c2fc673b99bc3abb52cd3a994d212a21b5810acd10725c4d71f02_prof);

    }

    public function getTemplateName()
    {
        return "SoccerEventBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
