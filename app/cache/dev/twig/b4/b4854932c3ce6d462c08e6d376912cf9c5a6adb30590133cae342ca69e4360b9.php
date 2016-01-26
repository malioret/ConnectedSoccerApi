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
        $__internal_5b2d348ff7999eb5560f7c0ff20035f7909ebd102d0df7e2d22a62dc58f17737 = $this->env->getExtension("native_profiler");
        $__internal_5b2d348ff7999eb5560f7c0ff20035f7909ebd102d0df7e2d22a62dc58f17737->enter($__internal_5b2d348ff7999eb5560f7c0ff20035f7909ebd102d0df7e2d22a62dc58f17737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerEventBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_5b2d348ff7999eb5560f7c0ff20035f7909ebd102d0df7e2d22a62dc58f17737->leave($__internal_5b2d348ff7999eb5560f7c0ff20035f7909ebd102d0df7e2d22a62dc58f17737_prof);

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
