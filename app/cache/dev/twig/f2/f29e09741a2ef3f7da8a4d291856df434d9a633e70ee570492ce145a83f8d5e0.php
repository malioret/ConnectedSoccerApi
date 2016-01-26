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
        $__internal_07971015f66efc9839b296e3465375a8357db439849994f2d2ec7a4f310ab167 = $this->env->getExtension("native_profiler");
        $__internal_07971015f66efc9839b296e3465375a8357db439849994f2d2ec7a4f310ab167->enter($__internal_07971015f66efc9839b296e3465375a8357db439849994f2d2ec7a4f310ab167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_07971015f66efc9839b296e3465375a8357db439849994f2d2ec7a4f310ab167->leave($__internal_07971015f66efc9839b296e3465375a8357db439849994f2d2ec7a4f310ab167_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a50bced6017b7d90ec75a6c0d9e16d71c44bb09a91b32d8ce5be02c3c34f37d6 = $this->env->getExtension("native_profiler");
        $__internal_a50bced6017b7d90ec75a6c0d9e16d71c44bb09a91b32d8ce5be02c3c34f37d6->enter($__internal_a50bced6017b7d90ec75a6c0d9e16d71c44bb09a91b32d8ce5be02c3c34f37d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a50bced6017b7d90ec75a6c0d9e16d71c44bb09a91b32d8ce5be02c3c34f37d6->leave($__internal_a50bced6017b7d90ec75a6c0d9e16d71c44bb09a91b32d8ce5be02c3c34f37d6_prof);

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
