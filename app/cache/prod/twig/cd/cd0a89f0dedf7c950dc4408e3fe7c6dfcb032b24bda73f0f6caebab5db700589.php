<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0ccf0ce6e2352d8a731941108f4a1424632e0dcd62007a767a63483283d50667 extends Twig_Template
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
        $__internal_030b5bb7149446afa99062b3cb0ccb99aecd739dae3b8463f77e91c5a79b2bf6 = $this->env->getExtension("native_profiler");
        $__internal_030b5bb7149446afa99062b3cb0ccb99aecd739dae3b8463f77e91c5a79b2bf6->enter($__internal_030b5bb7149446afa99062b3cb0ccb99aecd739dae3b8463f77e91c5a79b2bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_030b5bb7149446afa99062b3cb0ccb99aecd739dae3b8463f77e91c5a79b2bf6->leave($__internal_030b5bb7149446afa99062b3cb0ccb99aecd739dae3b8463f77e91c5a79b2bf6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
