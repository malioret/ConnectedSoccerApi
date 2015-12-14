<?php

/* SoccerTeamBundle:Default:index.html.twig */
class __TwigTemplate_1cb70edcb9b8f90b67e803e4f21b585ebacd0efa04531eab36e12719fd4a8247 extends Twig_Template
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
        $__internal_65c898edad7b4384a19852d8a501d9a435985da99bd4c760add89d1641d6100a = $this->env->getExtension("native_profiler");
        $__internal_65c898edad7b4384a19852d8a501d9a435985da99bd4c760add89d1641d6100a->enter($__internal_65c898edad7b4384a19852d8a501d9a435985da99bd4c760add89d1641d6100a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerTeamBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_65c898edad7b4384a19852d8a501d9a435985da99bd4c760add89d1641d6100a->leave($__internal_65c898edad7b4384a19852d8a501d9a435985da99bd4c760add89d1641d6100a_prof);

    }

    public function getTemplateName()
    {
        return "SoccerTeamBundle:Default:index.html.twig";
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
