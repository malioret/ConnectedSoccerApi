<?php

/* SoccerUtilBundle:Default:index.html.twig */
class __TwigTemplate_7bfa2ed552171eb64f751c87308cf9badf5356d3b0199c5afe447890b52f116f extends Twig_Template
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
        $__internal_5ccab162edeaf1c3cad0269995cb9469757de1c9c0fb39afecbd274bdc847779 = $this->env->getExtension("native_profiler");
        $__internal_5ccab162edeaf1c3cad0269995cb9469757de1c9c0fb39afecbd274bdc847779->enter($__internal_5ccab162edeaf1c3cad0269995cb9469757de1c9c0fb39afecbd274bdc847779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerUtilBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_5ccab162edeaf1c3cad0269995cb9469757de1c9c0fb39afecbd274bdc847779->leave($__internal_5ccab162edeaf1c3cad0269995cb9469757de1c9c0fb39afecbd274bdc847779_prof);

    }

    public function getTemplateName()
    {
        return "SoccerUtilBundle:Default:index.html.twig";
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
