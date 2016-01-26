<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3e3cf32850bd1ca3f4a12443ace4ee2266af0f785fcb6506801ca7154e6c635f extends Twig_Template
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
        $__internal_38142a523338ce056fa025d24084f0b6d0328feab8212522cbd237b5a7e43fbb = $this->env->getExtension("native_profiler");
        $__internal_38142a523338ce056fa025d24084f0b6d0328feab8212522cbd237b5a7e43fbb->enter($__internal_38142a523338ce056fa025d24084f0b6d0328feab8212522cbd237b5a7e43fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_38142a523338ce056fa025d24084f0b6d0328feab8212522cbd237b5a7e43fbb->leave($__internal_38142a523338ce056fa025d24084f0b6d0328feab8212522cbd237b5a7e43fbb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
