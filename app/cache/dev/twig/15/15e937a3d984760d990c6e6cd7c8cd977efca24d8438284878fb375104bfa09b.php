<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1dba1c397c80d36ba13b0190a5afafdf6fd7c09e16c61dcfec6d7b285d0effad extends Twig_Template
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
        $__internal_9b55718ad83a62b70b34a1a1ddc0995cb4cf80f045d33e36ad30e6628d09c838 = $this->env->getExtension("native_profiler");
        $__internal_9b55718ad83a62b70b34a1a1ddc0995cb4cf80f045d33e36ad30e6628d09c838->enter($__internal_9b55718ad83a62b70b34a1a1ddc0995cb4cf80f045d33e36ad30e6628d09c838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9b55718ad83a62b70b34a1a1ddc0995cb4cf80f045d33e36ad30e6628d09c838->leave($__internal_9b55718ad83a62b70b34a1a1ddc0995cb4cf80f045d33e36ad30e6628d09c838_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
