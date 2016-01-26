<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_162ab19eb3a3e49a4902cf57e464e8d5a853b36f48ae9e5dda1cdb5a85c3df95 extends Twig_Template
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
        $__internal_f64249ebaffdcdbcc0ffe807d337f9e5ea330a109ffb3e6163204a1192e69b4f = $this->env->getExtension("native_profiler");
        $__internal_f64249ebaffdcdbcc0ffe807d337f9e5ea330a109ffb3e6163204a1192e69b4f->enter($__internal_f64249ebaffdcdbcc0ffe807d337f9e5ea330a109ffb3e6163204a1192e69b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f64249ebaffdcdbcc0ffe807d337f9e5ea330a109ffb3e6163204a1192e69b4f->leave($__internal_f64249ebaffdcdbcc0ffe807d337f9e5ea330a109ffb3e6163204a1192e69b4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
