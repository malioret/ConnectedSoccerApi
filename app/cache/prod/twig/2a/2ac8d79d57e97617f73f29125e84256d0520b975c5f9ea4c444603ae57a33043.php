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
        $__internal_36f7ab7a1f616af04139e725b6ceee986baf5d9ca7fe6d4fdfd8471c38d55bc3 = $this->env->getExtension("native_profiler");
        $__internal_36f7ab7a1f616af04139e725b6ceee986baf5d9ca7fe6d4fdfd8471c38d55bc3->enter($__internal_36f7ab7a1f616af04139e725b6ceee986baf5d9ca7fe6d4fdfd8471c38d55bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36f7ab7a1f616af04139e725b6ceee986baf5d9ca7fe6d4fdfd8471c38d55bc3->leave($__internal_36f7ab7a1f616af04139e725b6ceee986baf5d9ca7fe6d4fdfd8471c38d55bc3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79e64ec4b31b778f9cb28287ac53740c0ea0e1d892d247641b60054953e2d250 = $this->env->getExtension("native_profiler");
        $__internal_79e64ec4b31b778f9cb28287ac53740c0ea0e1d892d247641b60054953e2d250->enter($__internal_79e64ec4b31b778f9cb28287ac53740c0ea0e1d892d247641b60054953e2d250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_79e64ec4b31b778f9cb28287ac53740c0ea0e1d892d247641b60054953e2d250->leave($__internal_79e64ec4b31b778f9cb28287ac53740c0ea0e1d892d247641b60054953e2d250_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc364f39c0dd67454b55acb396db57db05cdbfd1aff9006d13a2b3e6307ceb6d = $this->env->getExtension("native_profiler");
        $__internal_dc364f39c0dd67454b55acb396db57db05cdbfd1aff9006d13a2b3e6307ceb6d->enter($__internal_dc364f39c0dd67454b55acb396db57db05cdbfd1aff9006d13a2b3e6307ceb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc364f39c0dd67454b55acb396db57db05cdbfd1aff9006d13a2b3e6307ceb6d->leave($__internal_dc364f39c0dd67454b55acb396db57db05cdbfd1aff9006d13a2b3e6307ceb6d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff4e3e00f5109cac8f0d52f778a344a1e6c561dd111253f4edefe6f879df8aa5 = $this->env->getExtension("native_profiler");
        $__internal_ff4e3e00f5109cac8f0d52f778a344a1e6c561dd111253f4edefe6f879df8aa5->enter($__internal_ff4e3e00f5109cac8f0d52f778a344a1e6c561dd111253f4edefe6f879df8aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ff4e3e00f5109cac8f0d52f778a344a1e6c561dd111253f4edefe6f879df8aa5->leave($__internal_ff4e3e00f5109cac8f0d52f778a344a1e6c561dd111253f4edefe6f879df8aa5_prof);

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
