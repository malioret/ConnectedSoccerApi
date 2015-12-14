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
        $__internal_daea605fb8aab6dd2bbc375a23ef7b0d56ea8c32c584f5bc7260b0f031b4575a = $this->env->getExtension("native_profiler");
        $__internal_daea605fb8aab6dd2bbc375a23ef7b0d56ea8c32c584f5bc7260b0f031b4575a->enter($__internal_daea605fb8aab6dd2bbc375a23ef7b0d56ea8c32c584f5bc7260b0f031b4575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_daea605fb8aab6dd2bbc375a23ef7b0d56ea8c32c584f5bc7260b0f031b4575a->leave($__internal_daea605fb8aab6dd2bbc375a23ef7b0d56ea8c32c584f5bc7260b0f031b4575a_prof);

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
