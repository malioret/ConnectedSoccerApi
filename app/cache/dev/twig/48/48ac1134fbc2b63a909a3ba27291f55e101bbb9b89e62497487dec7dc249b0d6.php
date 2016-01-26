<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_699e23e5b896cff34f9e0bb26b2fd2972d4ac4cfd6ff5b9f01d46dca18573c59 extends Twig_Template
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
        $__internal_f54729c5f9959d142feac6cced6bef13b562040c043c963b4397c15dac2cb4f8 = $this->env->getExtension("native_profiler");
        $__internal_f54729c5f9959d142feac6cced6bef13b562040c043c963b4397c15dac2cb4f8->enter($__internal_f54729c5f9959d142feac6cced6bef13b562040c043c963b4397c15dac2cb4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f54729c5f9959d142feac6cced6bef13b562040c043c963b4397c15dac2cb4f8->leave($__internal_f54729c5f9959d142feac6cced6bef13b562040c043c963b4397c15dac2cb4f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
