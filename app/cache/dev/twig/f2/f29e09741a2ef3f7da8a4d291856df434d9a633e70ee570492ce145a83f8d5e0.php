<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_071eb10350e752bf74deb40e54d3077048fca934dcb783e0de2742c3e9894970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_051101e4b3b7854b381a54f16f5ec36c58f4c43e8e7c8ec9cf9cc24c3bab83d1 = $this->env->getExtension("native_profiler");
        $__internal_051101e4b3b7854b381a54f16f5ec36c58f4c43e8e7c8ec9cf9cc24c3bab83d1->enter($__internal_051101e4b3b7854b381a54f16f5ec36c58f4c43e8e7c8ec9cf9cc24c3bab83d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_051101e4b3b7854b381a54f16f5ec36c58f4c43e8e7c8ec9cf9cc24c3bab83d1->leave($__internal_051101e4b3b7854b381a54f16f5ec36c58f4c43e8e7c8ec9cf9cc24c3bab83d1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3806ce751dab414c198429d1c8baec72c87b66cfb83cfbc9f662e2a0c919cd8 = $this->env->getExtension("native_profiler");
        $__internal_d3806ce751dab414c198429d1c8baec72c87b66cfb83cfbc9f662e2a0c919cd8->enter($__internal_d3806ce751dab414c198429d1c8baec72c87b66cfb83cfbc9f662e2a0c919cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d3806ce751dab414c198429d1c8baec72c87b66cfb83cfbc9f662e2a0c919cd8->leave($__internal_d3806ce751dab414c198429d1c8baec72c87b66cfb83cfbc9f662e2a0c919cd8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
