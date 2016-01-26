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
        $__internal_0f39a6de95e7a1ce7d2569a21e29abe400e09f317f2f7219a0a9ac966e1f5c9e = $this->env->getExtension("native_profiler");
        $__internal_0f39a6de95e7a1ce7d2569a21e29abe400e09f317f2f7219a0a9ac966e1f5c9e->enter($__internal_0f39a6de95e7a1ce7d2569a21e29abe400e09f317f2f7219a0a9ac966e1f5c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f39a6de95e7a1ce7d2569a21e29abe400e09f317f2f7219a0a9ac966e1f5c9e->leave($__internal_0f39a6de95e7a1ce7d2569a21e29abe400e09f317f2f7219a0a9ac966e1f5c9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53634d46951cf9dc239d37c51f51c3c1a5bfccb82e4a7c050adfef5c437f7d69 = $this->env->getExtension("native_profiler");
        $__internal_53634d46951cf9dc239d37c51f51c3c1a5bfccb82e4a7c050adfef5c437f7d69->enter($__internal_53634d46951cf9dc239d37c51f51c3c1a5bfccb82e4a7c050adfef5c437f7d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_53634d46951cf9dc239d37c51f51c3c1a5bfccb82e4a7c050adfef5c437f7d69->leave($__internal_53634d46951cf9dc239d37c51f51c3c1a5bfccb82e4a7c050adfef5c437f7d69_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_50e11e782ed261546b65004ec2094bd9340418cc02c3be62def4f12b0a817be7 = $this->env->getExtension("native_profiler");
        $__internal_50e11e782ed261546b65004ec2094bd9340418cc02c3be62def4f12b0a817be7->enter($__internal_50e11e782ed261546b65004ec2094bd9340418cc02c3be62def4f12b0a817be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50e11e782ed261546b65004ec2094bd9340418cc02c3be62def4f12b0a817be7->leave($__internal_50e11e782ed261546b65004ec2094bd9340418cc02c3be62def4f12b0a817be7_prof);

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
