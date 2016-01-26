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
        $__internal_5ee3bc56d78cec44b57d6ea88242d8d816e4a5aa7712b33c269d51c969d69ccc = $this->env->getExtension("native_profiler");
        $__internal_5ee3bc56d78cec44b57d6ea88242d8d816e4a5aa7712b33c269d51c969d69ccc->enter($__internal_5ee3bc56d78cec44b57d6ea88242d8d816e4a5aa7712b33c269d51c969d69ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5ee3bc56d78cec44b57d6ea88242d8d816e4a5aa7712b33c269d51c969d69ccc->leave($__internal_5ee3bc56d78cec44b57d6ea88242d8d816e4a5aa7712b33c269d51c969d69ccc_prof);

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
