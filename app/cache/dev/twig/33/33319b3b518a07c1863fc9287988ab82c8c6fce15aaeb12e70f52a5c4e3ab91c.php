<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_95c543c4de8a7399089bb697a2ea9fa0283790e5cf2c67dbc03a2b127b901776 extends Twig_Template
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
        $__internal_a51615e756b63ac630e87107cfbef7ce541e116653dc6ad2f61ca7e8fa1e1928 = $this->env->getExtension("native_profiler");
        $__internal_a51615e756b63ac630e87107cfbef7ce541e116653dc6ad2f61ca7e8fa1e1928->enter($__internal_a51615e756b63ac630e87107cfbef7ce541e116653dc6ad2f61ca7e8fa1e1928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a51615e756b63ac630e87107cfbef7ce541e116653dc6ad2f61ca7e8fa1e1928->leave($__internal_a51615e756b63ac630e87107cfbef7ce541e116653dc6ad2f61ca7e8fa1e1928_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
