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
        $__internal_713abc7c0734f59fc561667e403eb182993b3ba571715d6d6fc469206e341c94 = $this->env->getExtension("native_profiler");
        $__internal_713abc7c0734f59fc561667e403eb182993b3ba571715d6d6fc469206e341c94->enter($__internal_713abc7c0734f59fc561667e403eb182993b3ba571715d6d6fc469206e341c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_713abc7c0734f59fc561667e403eb182993b3ba571715d6d6fc469206e341c94->leave($__internal_713abc7c0734f59fc561667e403eb182993b3ba571715d6d6fc469206e341c94_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0bfcc63e0657cdd79330d7dea69c86b583d3b7f3cc1bf6e2526255a95abcf03 = $this->env->getExtension("native_profiler");
        $__internal_b0bfcc63e0657cdd79330d7dea69c86b583d3b7f3cc1bf6e2526255a95abcf03->enter($__internal_b0bfcc63e0657cdd79330d7dea69c86b583d3b7f3cc1bf6e2526255a95abcf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b0bfcc63e0657cdd79330d7dea69c86b583d3b7f3cc1bf6e2526255a95abcf03->leave($__internal_b0bfcc63e0657cdd79330d7dea69c86b583d3b7f3cc1bf6e2526255a95abcf03_prof);

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
