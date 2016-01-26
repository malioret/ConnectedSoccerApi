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
        $__internal_809a9d90c5a3786733be6725a256d67ac4d0104a3861385237b5b5e1ed4c5ee4 = $this->env->getExtension("native_profiler");
        $__internal_809a9d90c5a3786733be6725a256d67ac4d0104a3861385237b5b5e1ed4c5ee4->enter($__internal_809a9d90c5a3786733be6725a256d67ac4d0104a3861385237b5b5e1ed4c5ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_809a9d90c5a3786733be6725a256d67ac4d0104a3861385237b5b5e1ed4c5ee4->leave($__internal_809a9d90c5a3786733be6725a256d67ac4d0104a3861385237b5b5e1ed4c5ee4_prof);

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
