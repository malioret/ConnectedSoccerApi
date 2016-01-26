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
        $__internal_1eed09cbdf2d3cd58e75f46780ac016c775725606f0c57934b3488ce1ade8a45 = $this->env->getExtension("native_profiler");
        $__internal_1eed09cbdf2d3cd58e75f46780ac016c775725606f0c57934b3488ce1ade8a45->enter($__internal_1eed09cbdf2d3cd58e75f46780ac016c775725606f0c57934b3488ce1ade8a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eed09cbdf2d3cd58e75f46780ac016c775725606f0c57934b3488ce1ade8a45->leave($__internal_1eed09cbdf2d3cd58e75f46780ac016c775725606f0c57934b3488ce1ade8a45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6473e9a39afbf0ded9d9411fded1f15f0d17e287f2548fc07beb92c2f41c2082 = $this->env->getExtension("native_profiler");
        $__internal_6473e9a39afbf0ded9d9411fded1f15f0d17e287f2548fc07beb92c2f41c2082->enter($__internal_6473e9a39afbf0ded9d9411fded1f15f0d17e287f2548fc07beb92c2f41c2082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6473e9a39afbf0ded9d9411fded1f15f0d17e287f2548fc07beb92c2f41c2082->leave($__internal_6473e9a39afbf0ded9d9411fded1f15f0d17e287f2548fc07beb92c2f41c2082_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f2e1b5a67057789eec2e500b9eef1cfea7088122207e93edc8b308e462353ec = $this->env->getExtension("native_profiler");
        $__internal_7f2e1b5a67057789eec2e500b9eef1cfea7088122207e93edc8b308e462353ec->enter($__internal_7f2e1b5a67057789eec2e500b9eef1cfea7088122207e93edc8b308e462353ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f2e1b5a67057789eec2e500b9eef1cfea7088122207e93edc8b308e462353ec->leave($__internal_7f2e1b5a67057789eec2e500b9eef1cfea7088122207e93edc8b308e462353ec_prof);

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
