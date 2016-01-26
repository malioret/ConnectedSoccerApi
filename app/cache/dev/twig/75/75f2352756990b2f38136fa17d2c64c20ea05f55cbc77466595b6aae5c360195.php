<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_62ebd7f432dd6c649b6afb096c9f02acc65c0ae8135d0966a9b721d1504acb83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc8abd7e04bd8adbbd6333e7025342a9e66e97ede0c967fae36f6e5b626468d1 = $this->env->getExtension("native_profiler");
        $__internal_bc8abd7e04bd8adbbd6333e7025342a9e66e97ede0c967fae36f6e5b626468d1->enter($__internal_bc8abd7e04bd8adbbd6333e7025342a9e66e97ede0c967fae36f6e5b626468d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8abd7e04bd8adbbd6333e7025342a9e66e97ede0c967fae36f6e5b626468d1->leave($__internal_bc8abd7e04bd8adbbd6333e7025342a9e66e97ede0c967fae36f6e5b626468d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee385230b4408f12a3a772815243042960ef272eeb1b2e52fd2de012881393e9 = $this->env->getExtension("native_profiler");
        $__internal_ee385230b4408f12a3a772815243042960ef272eeb1b2e52fd2de012881393e9->enter($__internal_ee385230b4408f12a3a772815243042960ef272eeb1b2e52fd2de012881393e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ee385230b4408f12a3a772815243042960ef272eeb1b2e52fd2de012881393e9->leave($__internal_ee385230b4408f12a3a772815243042960ef272eeb1b2e52fd2de012881393e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_573bac945b21f63318d5cd05504107ad681671955c83115cc4a532f0f812890a = $this->env->getExtension("native_profiler");
        $__internal_573bac945b21f63318d5cd05504107ad681671955c83115cc4a532f0f812890a->enter($__internal_573bac945b21f63318d5cd05504107ad681671955c83115cc4a532f0f812890a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_573bac945b21f63318d5cd05504107ad681671955c83115cc4a532f0f812890a->leave($__internal_573bac945b21f63318d5cd05504107ad681671955c83115cc4a532f0f812890a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_58c38c525b89a8c131cdec362f435c25fb2b9808b964a1b6c886d7a416af9b5f = $this->env->getExtension("native_profiler");
        $__internal_58c38c525b89a8c131cdec362f435c25fb2b9808b964a1b6c886d7a416af9b5f->enter($__internal_58c38c525b89a8c131cdec362f435c25fb2b9808b964a1b6c886d7a416af9b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_58c38c525b89a8c131cdec362f435c25fb2b9808b964a1b6c886d7a416af9b5f->leave($__internal_58c38c525b89a8c131cdec362f435c25fb2b9808b964a1b6c886d7a416af9b5f_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_53da5e240a7bcb4fdc0ee3d29724d334302ddd7b731eb059bcebd57e323a7105 = $this->env->getExtension("native_profiler");
        $__internal_53da5e240a7bcb4fdc0ee3d29724d334302ddd7b731eb059bcebd57e323a7105->enter($__internal_53da5e240a7bcb4fdc0ee3d29724d334302ddd7b731eb059bcebd57e323a7105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_53da5e240a7bcb4fdc0ee3d29724d334302ddd7b731eb059bcebd57e323a7105->leave($__internal_53da5e240a7bcb4fdc0ee3d29724d334302ddd7b731eb059bcebd57e323a7105_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
