<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2f6cf51e14e569eb90956c764d339c9a9df9a8d6fa9db11d853b2a933383476c extends Twig_Template
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
        $__internal_730f6da68b7d7b3dc28ab355b77a3772cb0130b0dcc2bfe024b0843fdf0e944d = $this->env->getExtension("native_profiler");
        $__internal_730f6da68b7d7b3dc28ab355b77a3772cb0130b0dcc2bfe024b0843fdf0e944d->enter($__internal_730f6da68b7d7b3dc28ab355b77a3772cb0130b0dcc2bfe024b0843fdf0e944d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_730f6da68b7d7b3dc28ab355b77a3772cb0130b0dcc2bfe024b0843fdf0e944d->leave($__internal_730f6da68b7d7b3dc28ab355b77a3772cb0130b0dcc2bfe024b0843fdf0e944d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
