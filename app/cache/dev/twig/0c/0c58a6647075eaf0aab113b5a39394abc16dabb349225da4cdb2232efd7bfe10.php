<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_162ab19eb3a3e49a4902cf57e464e8d5a853b36f48ae9e5dda1cdb5a85c3df95 extends Twig_Template
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
        $__internal_eb69fa4cbc6d33860cb433bf2f1dd8feb3e065605b14fd13779d287447838310 = $this->env->getExtension("native_profiler");
        $__internal_eb69fa4cbc6d33860cb433bf2f1dd8feb3e065605b14fd13779d287447838310->enter($__internal_eb69fa4cbc6d33860cb433bf2f1dd8feb3e065605b14fd13779d287447838310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_eb69fa4cbc6d33860cb433bf2f1dd8feb3e065605b14fd13779d287447838310->leave($__internal_eb69fa4cbc6d33860cb433bf2f1dd8feb3e065605b14fd13779d287447838310_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
