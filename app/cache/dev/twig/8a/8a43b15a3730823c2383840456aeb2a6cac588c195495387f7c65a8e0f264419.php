<?php

/* SoccerLandingBundle:Default:index.html.twig */
class __TwigTemplate_e1b75180b50353e3d81f1f6f637b486792e64309df7fa119f00108706203f447 extends Twig_Template
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
        $__internal_5ac062d24b5bd2cb05f849adcb9bacbd8a0b491ef063457c4b02c35bcdb40d57 = $this->env->getExtension("native_profiler");
        $__internal_5ac062d24b5bd2cb05f849adcb9bacbd8a0b491ef063457c4b02c35bcdb40d57->enter($__internal_5ac062d24b5bd2cb05f849adcb9bacbd8a0b491ef063457c4b02c35bcdb40d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerLandingBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_5ac062d24b5bd2cb05f849adcb9bacbd8a0b491ef063457c4b02c35bcdb40d57->leave($__internal_5ac062d24b5bd2cb05f849adcb9bacbd8a0b491ef063457c4b02c35bcdb40d57_prof);

    }

    public function getTemplateName()
    {
        return "SoccerLandingBundle:Default:index.html.twig";
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
