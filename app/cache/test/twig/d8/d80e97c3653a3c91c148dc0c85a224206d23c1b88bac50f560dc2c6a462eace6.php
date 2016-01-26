<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_8f3ccb4c007f918488bdabca20eca783a3f9f2cb5e1ac1f0eb1e486c2561a6db extends Twig_Template
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
        $__internal_ff764db22c14a8109f62b8e5724228a539c8e9507213bd8d5486a5cc7cfd3214 = $this->env->getExtension("native_profiler");
        $__internal_ff764db22c14a8109f62b8e5724228a539c8e9507213bd8d5486a5cc7cfd3214->enter($__internal_ff764db22c14a8109f62b8e5724228a539c8e9507213bd8d5486a5cc7cfd3214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ff764db22c14a8109f62b8e5724228a539c8e9507213bd8d5486a5cc7cfd3214->leave($__internal_ff764db22c14a8109f62b8e5724228a539c8e9507213bd8d5486a5cc7cfd3214_prof);

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
