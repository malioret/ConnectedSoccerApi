<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_779ac714a250a0a17d34f583b2dabf0ce778a91b2f9f0048cfa661587788762c extends Twig_Template
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
        $__internal_822e9a1b72f44d605f78d4a73bb217362c1d3e05060f808d851ab932c4c2c0b7 = $this->env->getExtension("native_profiler");
        $__internal_822e9a1b72f44d605f78d4a73bb217362c1d3e05060f808d851ab932c4c2c0b7->enter($__internal_822e9a1b72f44d605f78d4a73bb217362c1d3e05060f808d851ab932c4c2c0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_822e9a1b72f44d605f78d4a73bb217362c1d3e05060f808d851ab932c4c2c0b7->leave($__internal_822e9a1b72f44d605f78d4a73bb217362c1d3e05060f808d851ab932c4c2c0b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fca16fb027d482b83d023d4936f9fa36f00ee78f6d8069177fbd2dc25f0ad8f4 = $this->env->getExtension("native_profiler");
        $__internal_fca16fb027d482b83d023d4936f9fa36f00ee78f6d8069177fbd2dc25f0ad8f4->enter($__internal_fca16fb027d482b83d023d4936f9fa36f00ee78f6d8069177fbd2dc25f0ad8f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fca16fb027d482b83d023d4936f9fa36f00ee78f6d8069177fbd2dc25f0ad8f4->leave($__internal_fca16fb027d482b83d023d4936f9fa36f00ee78f6d8069177fbd2dc25f0ad8f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d00fe174e793e8b6d97bf6436a618f6e94ccb836f86bca8022698697af2e11f = $this->env->getExtension("native_profiler");
        $__internal_7d00fe174e793e8b6d97bf6436a618f6e94ccb836f86bca8022698697af2e11f->enter($__internal_7d00fe174e793e8b6d97bf6436a618f6e94ccb836f86bca8022698697af2e11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d00fe174e793e8b6d97bf6436a618f6e94ccb836f86bca8022698697af2e11f->leave($__internal_7d00fe174e793e8b6d97bf6436a618f6e94ccb836f86bca8022698697af2e11f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e437253869442c674759b05010f86a347a6faf43e512f1c16a38cafffce9ca9d = $this->env->getExtension("native_profiler");
        $__internal_e437253869442c674759b05010f86a347a6faf43e512f1c16a38cafffce9ca9d->enter($__internal_e437253869442c674759b05010f86a347a6faf43e512f1c16a38cafffce9ca9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e437253869442c674759b05010f86a347a6faf43e512f1c16a38cafffce9ca9d->leave($__internal_e437253869442c674759b05010f86a347a6faf43e512f1c16a38cafffce9ca9d_prof);

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
