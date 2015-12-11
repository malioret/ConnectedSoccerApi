<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_164766bdce32bef6763f4e7fb6368f4dd9d7452b430ccf1a83874fae37ed43e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7cb1a65c33267e3d3010d28b772aab8dd6d4b7a8dd26bd077f73b002e270135e = $this->env->getExtension("native_profiler");
        $__internal_7cb1a65c33267e3d3010d28b772aab8dd6d4b7a8dd26bd077f73b002e270135e->enter($__internal_7cb1a65c33267e3d3010d28b772aab8dd6d4b7a8dd26bd077f73b002e270135e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb1a65c33267e3d3010d28b772aab8dd6d4b7a8dd26bd077f73b002e270135e->leave($__internal_7cb1a65c33267e3d3010d28b772aab8dd6d4b7a8dd26bd077f73b002e270135e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_992f015ec26a3afb8a40ec6fbc6971d90f7abce62bd3f12d3e0e36bcbf72ff56 = $this->env->getExtension("native_profiler");
        $__internal_992f015ec26a3afb8a40ec6fbc6971d90f7abce62bd3f12d3e0e36bcbf72ff56->enter($__internal_992f015ec26a3afb8a40ec6fbc6971d90f7abce62bd3f12d3e0e36bcbf72ff56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_992f015ec26a3afb8a40ec6fbc6971d90f7abce62bd3f12d3e0e36bcbf72ff56->leave($__internal_992f015ec26a3afb8a40ec6fbc6971d90f7abce62bd3f12d3e0e36bcbf72ff56_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_91ade51507e5cdedaebc32eef634f83dbc61233f6bb0fa6cf033b77452fd5fc3 = $this->env->getExtension("native_profiler");
        $__internal_91ade51507e5cdedaebc32eef634f83dbc61233f6bb0fa6cf033b77452fd5fc3->enter($__internal_91ade51507e5cdedaebc32eef634f83dbc61233f6bb0fa6cf033b77452fd5fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_91ade51507e5cdedaebc32eef634f83dbc61233f6bb0fa6cf033b77452fd5fc3->leave($__internal_91ade51507e5cdedaebc32eef634f83dbc61233f6bb0fa6cf033b77452fd5fc3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
