<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_531676a5290d09229497f75b11ee20df55f948d445dea8423808e3fcf99fd837 extends Twig_Template
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
        $__internal_edbc0784f16043c481cef4aa57d4f2e5c37e37a8768f1bb4d8062e3ca0c16e0c = $this->env->getExtension("native_profiler");
        $__internal_edbc0784f16043c481cef4aa57d4f2e5c37e37a8768f1bb4d8062e3ca0c16e0c->enter($__internal_edbc0784f16043c481cef4aa57d4f2e5c37e37a8768f1bb4d8062e3ca0c16e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_edbc0784f16043c481cef4aa57d4f2e5c37e37a8768f1bb4d8062e3ca0c16e0c->leave($__internal_edbc0784f16043c481cef4aa57d4f2e5c37e37a8768f1bb4d8062e3ca0c16e0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
