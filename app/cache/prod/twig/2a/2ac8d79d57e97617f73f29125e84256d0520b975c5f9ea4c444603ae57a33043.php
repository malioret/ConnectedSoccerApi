<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5b317e1bb62f384ce0e5ff7a0656c8c611ad764568a371cecec5af7f26683444 extends Twig_Template
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
        $__internal_f50c8c12b1ec524465b9dc719da306c168595af644eaeb3675a199c38cc64717 = $this->env->getExtension("native_profiler");
        $__internal_f50c8c12b1ec524465b9dc719da306c168595af644eaeb3675a199c38cc64717->enter($__internal_f50c8c12b1ec524465b9dc719da306c168595af644eaeb3675a199c38cc64717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f50c8c12b1ec524465b9dc719da306c168595af644eaeb3675a199c38cc64717->leave($__internal_f50c8c12b1ec524465b9dc719da306c168595af644eaeb3675a199c38cc64717_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_925e309fe69acaf9409ca298724e23b9f51e9d06b7653edc0779c896f1f071bb = $this->env->getExtension("native_profiler");
        $__internal_925e309fe69acaf9409ca298724e23b9f51e9d06b7653edc0779c896f1f071bb->enter($__internal_925e309fe69acaf9409ca298724e23b9f51e9d06b7653edc0779c896f1f071bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_925e309fe69acaf9409ca298724e23b9f51e9d06b7653edc0779c896f1f071bb->leave($__internal_925e309fe69acaf9409ca298724e23b9f51e9d06b7653edc0779c896f1f071bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fa89d0ca01a48ddcaee95fe99a0cc055c1d8869edd0d3849167259221a8f823 = $this->env->getExtension("native_profiler");
        $__internal_6fa89d0ca01a48ddcaee95fe99a0cc055c1d8869edd0d3849167259221a8f823->enter($__internal_6fa89d0ca01a48ddcaee95fe99a0cc055c1d8869edd0d3849167259221a8f823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6fa89d0ca01a48ddcaee95fe99a0cc055c1d8869edd0d3849167259221a8f823->leave($__internal_6fa89d0ca01a48ddcaee95fe99a0cc055c1d8869edd0d3849167259221a8f823_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c74c070a67043d90b7e91cdd97dbe2e4752ce2ef4182535cfa1c5737e9433c2f = $this->env->getExtension("native_profiler");
        $__internal_c74c070a67043d90b7e91cdd97dbe2e4752ce2ef4182535cfa1c5737e9433c2f->enter($__internal_c74c070a67043d90b7e91cdd97dbe2e4752ce2ef4182535cfa1c5737e9433c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c74c070a67043d90b7e91cdd97dbe2e4752ce2ef4182535cfa1c5737e9433c2f->leave($__internal_c74c070a67043d90b7e91cdd97dbe2e4752ce2ef4182535cfa1c5737e9433c2f_prof);

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
