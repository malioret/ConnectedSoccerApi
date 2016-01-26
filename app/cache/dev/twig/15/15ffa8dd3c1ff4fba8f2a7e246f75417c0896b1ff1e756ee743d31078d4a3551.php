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
        $__internal_240a8672cb50a225bb3e7adc1f3f7363901ee188ccfc4ba7c040876978d07e07 = $this->env->getExtension("native_profiler");
        $__internal_240a8672cb50a225bb3e7adc1f3f7363901ee188ccfc4ba7c040876978d07e07->enter($__internal_240a8672cb50a225bb3e7adc1f3f7363901ee188ccfc4ba7c040876978d07e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_240a8672cb50a225bb3e7adc1f3f7363901ee188ccfc4ba7c040876978d07e07->leave($__internal_240a8672cb50a225bb3e7adc1f3f7363901ee188ccfc4ba7c040876978d07e07_prof);

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
