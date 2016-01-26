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
        $__internal_769d11592fc66197a54c76a6d59c22d2f4da7cded5b838b5bfc3ddc528ed278d = $this->env->getExtension("native_profiler");
        $__internal_769d11592fc66197a54c76a6d59c22d2f4da7cded5b838b5bfc3ddc528ed278d->enter($__internal_769d11592fc66197a54c76a6d59c22d2f4da7cded5b838b5bfc3ddc528ed278d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_769d11592fc66197a54c76a6d59c22d2f4da7cded5b838b5bfc3ddc528ed278d->leave($__internal_769d11592fc66197a54c76a6d59c22d2f4da7cded5b838b5bfc3ddc528ed278d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e3739970eab26ad42c2d6121e41aa1d5c554ae594e119f24fef37cdc80ba114 = $this->env->getExtension("native_profiler");
        $__internal_9e3739970eab26ad42c2d6121e41aa1d5c554ae594e119f24fef37cdc80ba114->enter($__internal_9e3739970eab26ad42c2d6121e41aa1d5c554ae594e119f24fef37cdc80ba114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e3739970eab26ad42c2d6121e41aa1d5c554ae594e119f24fef37cdc80ba114->leave($__internal_9e3739970eab26ad42c2d6121e41aa1d5c554ae594e119f24fef37cdc80ba114_prof);

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
