<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5d26c768d2de02626c4dfd969fb1a9bd50547bf8340f89e88600935662382f76 extends Twig_Template
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
        $__internal_0043e631049542975b7c69d62a3173e72a68bbdc33eaf39c4116c73f97c37aed = $this->env->getExtension("native_profiler");
        $__internal_0043e631049542975b7c69d62a3173e72a68bbdc33eaf39c4116c73f97c37aed->enter($__internal_0043e631049542975b7c69d62a3173e72a68bbdc33eaf39c4116c73f97c37aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0043e631049542975b7c69d62a3173e72a68bbdc33eaf39c4116c73f97c37aed->leave($__internal_0043e631049542975b7c69d62a3173e72a68bbdc33eaf39c4116c73f97c37aed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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