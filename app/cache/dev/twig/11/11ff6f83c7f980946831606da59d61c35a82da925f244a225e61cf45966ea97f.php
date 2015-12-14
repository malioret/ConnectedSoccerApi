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
        $__internal_c2d4d4f9652418ce6a9db440af27ea3449821b8a68bc695d00664f9c21ed155a = $this->env->getExtension("native_profiler");
        $__internal_c2d4d4f9652418ce6a9db440af27ea3449821b8a68bc695d00664f9c21ed155a->enter($__internal_c2d4d4f9652418ce6a9db440af27ea3449821b8a68bc695d00664f9c21ed155a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2d4d4f9652418ce6a9db440af27ea3449821b8a68bc695d00664f9c21ed155a->leave($__internal_c2d4d4f9652418ce6a9db440af27ea3449821b8a68bc695d00664f9c21ed155a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_066283d35d0816cc661ae3ef2bcedf31a3e54fc7d8077ef712f0ebe3800e0bfa = $this->env->getExtension("native_profiler");
        $__internal_066283d35d0816cc661ae3ef2bcedf31a3e54fc7d8077ef712f0ebe3800e0bfa->enter($__internal_066283d35d0816cc661ae3ef2bcedf31a3e54fc7d8077ef712f0ebe3800e0bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_066283d35d0816cc661ae3ef2bcedf31a3e54fc7d8077ef712f0ebe3800e0bfa->leave($__internal_066283d35d0816cc661ae3ef2bcedf31a3e54fc7d8077ef712f0ebe3800e0bfa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7acdc57557338f7e9d1ebc9a3502a472223851c2eb7a346da36a8f46ea68f2d = $this->env->getExtension("native_profiler");
        $__internal_f7acdc57557338f7e9d1ebc9a3502a472223851c2eb7a346da36a8f46ea68f2d->enter($__internal_f7acdc57557338f7e9d1ebc9a3502a472223851c2eb7a346da36a8f46ea68f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7acdc57557338f7e9d1ebc9a3502a472223851c2eb7a346da36a8f46ea68f2d->leave($__internal_f7acdc57557338f7e9d1ebc9a3502a472223851c2eb7a346da36a8f46ea68f2d_prof);

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
