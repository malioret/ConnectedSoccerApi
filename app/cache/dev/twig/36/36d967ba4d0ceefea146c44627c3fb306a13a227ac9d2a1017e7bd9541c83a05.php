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
        $__internal_b44b13c1d5797adb425665b4164804edf7da88fba07127eb07a1e62a83b2fc2f = $this->env->getExtension("native_profiler");
        $__internal_b44b13c1d5797adb425665b4164804edf7da88fba07127eb07a1e62a83b2fc2f->enter($__internal_b44b13c1d5797adb425665b4164804edf7da88fba07127eb07a1e62a83b2fc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b44b13c1d5797adb425665b4164804edf7da88fba07127eb07a1e62a83b2fc2f->leave($__internal_b44b13c1d5797adb425665b4164804edf7da88fba07127eb07a1e62a83b2fc2f_prof);

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
