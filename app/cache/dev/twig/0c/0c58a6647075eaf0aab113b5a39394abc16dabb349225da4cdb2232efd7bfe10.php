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
        $__internal_68b6551f813e772a3d5f49105cbd1aba6383754bafcf675cf21c9c25bee2282b = $this->env->getExtension("native_profiler");
        $__internal_68b6551f813e772a3d5f49105cbd1aba6383754bafcf675cf21c9c25bee2282b->enter($__internal_68b6551f813e772a3d5f49105cbd1aba6383754bafcf675cf21c9c25bee2282b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_68b6551f813e772a3d5f49105cbd1aba6383754bafcf675cf21c9c25bee2282b->leave($__internal_68b6551f813e772a3d5f49105cbd1aba6383754bafcf675cf21c9c25bee2282b_prof);

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
