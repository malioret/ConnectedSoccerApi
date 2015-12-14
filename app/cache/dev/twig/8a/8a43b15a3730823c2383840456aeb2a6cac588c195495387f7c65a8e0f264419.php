<?php

/* SoccerLandingBundle:Default:index.html.twig */
class __TwigTemplate_e1b75180b50353e3d81f1f6f637b486792e64309df7fa119f00108706203f447 extends Twig_Template
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
        $__internal_ee17ea11f9b28ee37fa12cc945b691c71ef64b89de209ea32c8a438aa1504789 = $this->env->getExtension("native_profiler");
        $__internal_ee17ea11f9b28ee37fa12cc945b691c71ef64b89de209ea32c8a438aa1504789->enter($__internal_ee17ea11f9b28ee37fa12cc945b691c71ef64b89de209ea32c8a438aa1504789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerLandingBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_ee17ea11f9b28ee37fa12cc945b691c71ef64b89de209ea32c8a438aa1504789->leave($__internal_ee17ea11f9b28ee37fa12cc945b691c71ef64b89de209ea32c8a438aa1504789_prof);

    }

    public function getTemplateName()
    {
        return "SoccerLandingBundle:Default:index.html.twig";
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
