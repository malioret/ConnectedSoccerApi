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
        $__internal_6761acfae7db6c5588d6860280d31f4f79922d53d82c01619f74fc9221ccbbe9 = $this->env->getExtension("native_profiler");
        $__internal_6761acfae7db6c5588d6860280d31f4f79922d53d82c01619f74fc9221ccbbe9->enter($__internal_6761acfae7db6c5588d6860280d31f4f79922d53d82c01619f74fc9221ccbbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_6761acfae7db6c5588d6860280d31f4f79922d53d82c01619f74fc9221ccbbe9->leave($__internal_6761acfae7db6c5588d6860280d31f4f79922d53d82c01619f74fc9221ccbbe9_prof);

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
