<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2ef2b772862b199af7d181c3ede85ed4c7ae7b7e8558a169b10f01dd1b046c38 extends Twig_Template
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
        $__internal_7879b191301e16564906369d1d11e32e3b87b94c27bbe762d1fe303515cb35ba = $this->env->getExtension("native_profiler");
        $__internal_7879b191301e16564906369d1d11e32e3b87b94c27bbe762d1fe303515cb35ba->enter($__internal_7879b191301e16564906369d1d11e32e3b87b94c27bbe762d1fe303515cb35ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7879b191301e16564906369d1d11e32e3b87b94c27bbe762d1fe303515cb35ba->leave($__internal_7879b191301e16564906369d1d11e32e3b87b94c27bbe762d1fe303515cb35ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
