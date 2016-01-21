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
        $__internal_cb1080c14e723f4fad2c3be4d7759a20a3cbb139f7e168d1e4a2426d1d681243 = $this->env->getExtension("native_profiler");
        $__internal_cb1080c14e723f4fad2c3be4d7759a20a3cbb139f7e168d1e4a2426d1d681243->enter($__internal_cb1080c14e723f4fad2c3be4d7759a20a3cbb139f7e168d1e4a2426d1d681243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1080c14e723f4fad2c3be4d7759a20a3cbb139f7e168d1e4a2426d1d681243->leave($__internal_cb1080c14e723f4fad2c3be4d7759a20a3cbb139f7e168d1e4a2426d1d681243_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7863b85f90234f413081f48fc3dbb43cd70fe9b4532feb6f4ab9faf545c1b709 = $this->env->getExtension("native_profiler");
        $__internal_7863b85f90234f413081f48fc3dbb43cd70fe9b4532feb6f4ab9faf545c1b709->enter($__internal_7863b85f90234f413081f48fc3dbb43cd70fe9b4532feb6f4ab9faf545c1b709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7863b85f90234f413081f48fc3dbb43cd70fe9b4532feb6f4ab9faf545c1b709->leave($__internal_7863b85f90234f413081f48fc3dbb43cd70fe9b4532feb6f4ab9faf545c1b709_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b647efa29c85950a6c1fe7a34206adf63266f98f94e76cd52febd27e77db2470 = $this->env->getExtension("native_profiler");
        $__internal_b647efa29c85950a6c1fe7a34206adf63266f98f94e76cd52febd27e77db2470->enter($__internal_b647efa29c85950a6c1fe7a34206adf63266f98f94e76cd52febd27e77db2470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b647efa29c85950a6c1fe7a34206adf63266f98f94e76cd52febd27e77db2470->leave($__internal_b647efa29c85950a6c1fe7a34206adf63266f98f94e76cd52febd27e77db2470_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_986d02ccf8357cb0dd5016d059d4eac1e1a138c1df4e55f8b0066efcf4b6957d = $this->env->getExtension("native_profiler");
        $__internal_986d02ccf8357cb0dd5016d059d4eac1e1a138c1df4e55f8b0066efcf4b6957d->enter($__internal_986d02ccf8357cb0dd5016d059d4eac1e1a138c1df4e55f8b0066efcf4b6957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_986d02ccf8357cb0dd5016d059d4eac1e1a138c1df4e55f8b0066efcf4b6957d->leave($__internal_986d02ccf8357cb0dd5016d059d4eac1e1a138c1df4e55f8b0066efcf4b6957d_prof);

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
