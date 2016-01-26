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
        $__internal_21e67033527d9b1e59042709ccd457a4dbb44f59b4a437ec2197819aa47874b0 = $this->env->getExtension("native_profiler");
        $__internal_21e67033527d9b1e59042709ccd457a4dbb44f59b4a437ec2197819aa47874b0->enter($__internal_21e67033527d9b1e59042709ccd457a4dbb44f59b4a437ec2197819aa47874b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_21e67033527d9b1e59042709ccd457a4dbb44f59b4a437ec2197819aa47874b0->leave($__internal_21e67033527d9b1e59042709ccd457a4dbb44f59b4a437ec2197819aa47874b0_prof);

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
