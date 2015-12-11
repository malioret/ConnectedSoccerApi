<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_3cc0c0bc048adcb5557efbed84351f31db35c90ccfb686d9e14b0b222b841c88 extends Twig_Template
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
        $__internal_316233a852b39c2a7af1e89bab4cb5a43c7784526b4808e3110ac40d7617892b = $this->env->getExtension("native_profiler");
        $__internal_316233a852b39c2a7af1e89bab4cb5a43c7784526b4808e3110ac40d7617892b->enter($__internal_316233a852b39c2a7af1e89bab4cb5a43c7784526b4808e3110ac40d7617892b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_316233a852b39c2a7af1e89bab4cb5a43c7784526b4808e3110ac40d7617892b->leave($__internal_316233a852b39c2a7af1e89bab4cb5a43c7784526b4808e3110ac40d7617892b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
