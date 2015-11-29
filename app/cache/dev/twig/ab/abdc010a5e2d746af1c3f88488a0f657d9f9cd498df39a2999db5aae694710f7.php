<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7c41e8d50436a2e57b7d0bdac7ac4b420ba1e5174259a71b4fc299a34820ea81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d9332107cea2caf29a75b9e53a9e32720fe0ce14d2dee1c3b7a34ae38d5ae89 = $this->env->getExtension("native_profiler");
        $__internal_0d9332107cea2caf29a75b9e53a9e32720fe0ce14d2dee1c3b7a34ae38d5ae89->enter($__internal_0d9332107cea2caf29a75b9e53a9e32720fe0ce14d2dee1c3b7a34ae38d5ae89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d9332107cea2caf29a75b9e53a9e32720fe0ce14d2dee1c3b7a34ae38d5ae89->leave($__internal_0d9332107cea2caf29a75b9e53a9e32720fe0ce14d2dee1c3b7a34ae38d5ae89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37881dea7d100a1a633882994f2c90bd88abdec74bffbc9803427a3a09bcaa37 = $this->env->getExtension("native_profiler");
        $__internal_37881dea7d100a1a633882994f2c90bd88abdec74bffbc9803427a3a09bcaa37->enter($__internal_37881dea7d100a1a633882994f2c90bd88abdec74bffbc9803427a3a09bcaa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_37881dea7d100a1a633882994f2c90bd88abdec74bffbc9803427a3a09bcaa37->leave($__internal_37881dea7d100a1a633882994f2c90bd88abdec74bffbc9803427a3a09bcaa37_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca539d10dd32de87311256561f0dac906f3e19c67f1802d14f86e58d944e7667 = $this->env->getExtension("native_profiler");
        $__internal_ca539d10dd32de87311256561f0dac906f3e19c67f1802d14f86e58d944e7667->enter($__internal_ca539d10dd32de87311256561f0dac906f3e19c67f1802d14f86e58d944e7667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca539d10dd32de87311256561f0dac906f3e19c67f1802d14f86e58d944e7667->leave($__internal_ca539d10dd32de87311256561f0dac906f3e19c67f1802d14f86e58d944e7667_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a32787c990a22cb34ea7010577cf7c571ffad85bdaa93970cc4ebb92964be5d9 = $this->env->getExtension("native_profiler");
        $__internal_a32787c990a22cb34ea7010577cf7c571ffad85bdaa93970cc4ebb92964be5d9->enter($__internal_a32787c990a22cb34ea7010577cf7c571ffad85bdaa93970cc4ebb92964be5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a32787c990a22cb34ea7010577cf7c571ffad85bdaa93970cc4ebb92964be5d9->leave($__internal_a32787c990a22cb34ea7010577cf7c571ffad85bdaa93970cc4ebb92964be5d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
