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
        $__internal_6bb8fe8e762badc621ad1d0220c998a251370de495bae9b20c014c2d73f8f6be = $this->env->getExtension("native_profiler");
        $__internal_6bb8fe8e762badc621ad1d0220c998a251370de495bae9b20c014c2d73f8f6be->enter($__internal_6bb8fe8e762badc621ad1d0220c998a251370de495bae9b20c014c2d73f8f6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6bb8fe8e762badc621ad1d0220c998a251370de495bae9b20c014c2d73f8f6be->leave($__internal_6bb8fe8e762badc621ad1d0220c998a251370de495bae9b20c014c2d73f8f6be_prof);

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
