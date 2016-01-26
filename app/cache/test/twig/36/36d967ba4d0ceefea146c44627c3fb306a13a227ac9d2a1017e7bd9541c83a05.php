<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_25ec3d019e31bf87a6d2428decb6803d052cb2a98b90b1243fbd8e3c8675faca extends Twig_Template
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
        $__internal_e9b13841e7766cf9f593312f6acd7d29564443b9b8e9baf43727d5a1b8770b17 = $this->env->getExtension("native_profiler");
        $__internal_e9b13841e7766cf9f593312f6acd7d29564443b9b8e9baf43727d5a1b8770b17->enter($__internal_e9b13841e7766cf9f593312f6acd7d29564443b9b8e9baf43727d5a1b8770b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e9b13841e7766cf9f593312f6acd7d29564443b9b8e9baf43727d5a1b8770b17->leave($__internal_e9b13841e7766cf9f593312f6acd7d29564443b9b8e9baf43727d5a1b8770b17_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
