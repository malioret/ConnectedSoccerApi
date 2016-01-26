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
        $__internal_839e8d716f0c2dfb50f52faed8bdd3484ff957fffa6899e91fa6895760b2eada = $this->env->getExtension("native_profiler");
        $__internal_839e8d716f0c2dfb50f52faed8bdd3484ff957fffa6899e91fa6895760b2eada->enter($__internal_839e8d716f0c2dfb50f52faed8bdd3484ff957fffa6899e91fa6895760b2eada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_839e8d716f0c2dfb50f52faed8bdd3484ff957fffa6899e91fa6895760b2eada->leave($__internal_839e8d716f0c2dfb50f52faed8bdd3484ff957fffa6899e91fa6895760b2eada_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45c1c27f1b3812a4d2362a0f55f2a988a05cbac1be2f383dc7115be4a74fd5a9 = $this->env->getExtension("native_profiler");
        $__internal_45c1c27f1b3812a4d2362a0f55f2a988a05cbac1be2f383dc7115be4a74fd5a9->enter($__internal_45c1c27f1b3812a4d2362a0f55f2a988a05cbac1be2f383dc7115be4a74fd5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_45c1c27f1b3812a4d2362a0f55f2a988a05cbac1be2f383dc7115be4a74fd5a9->leave($__internal_45c1c27f1b3812a4d2362a0f55f2a988a05cbac1be2f383dc7115be4a74fd5a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_260e7f9f631dcbc2c8f04cb7e3172b1685b71e9dc9ac64b1e3158d73d6d1832f = $this->env->getExtension("native_profiler");
        $__internal_260e7f9f631dcbc2c8f04cb7e3172b1685b71e9dc9ac64b1e3158d73d6d1832f->enter($__internal_260e7f9f631dcbc2c8f04cb7e3172b1685b71e9dc9ac64b1e3158d73d6d1832f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_260e7f9f631dcbc2c8f04cb7e3172b1685b71e9dc9ac64b1e3158d73d6d1832f->leave($__internal_260e7f9f631dcbc2c8f04cb7e3172b1685b71e9dc9ac64b1e3158d73d6d1832f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_411e6fa73b265599e02047f32fb32b976fa0a8faf9d9930509921fc9ec89920b = $this->env->getExtension("native_profiler");
        $__internal_411e6fa73b265599e02047f32fb32b976fa0a8faf9d9930509921fc9ec89920b->enter($__internal_411e6fa73b265599e02047f32fb32b976fa0a8faf9d9930509921fc9ec89920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_411e6fa73b265599e02047f32fb32b976fa0a8faf9d9930509921fc9ec89920b->leave($__internal_411e6fa73b265599e02047f32fb32b976fa0a8faf9d9930509921fc9ec89920b_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_872a54c7228892cdc0741905bbe19def343ff18d3e461c364d0e123e93dd4b99 = $this->env->getExtension("native_profiler");
        $__internal_872a54c7228892cdc0741905bbe19def343ff18d3e461c364d0e123e93dd4b99->enter($__internal_872a54c7228892cdc0741905bbe19def343ff18d3e461c364d0e123e93dd4b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_872a54c7228892cdc0741905bbe19def343ff18d3e461c364d0e123e93dd4b99->leave($__internal_872a54c7228892cdc0741905bbe19def343ff18d3e461c364d0e123e93dd4b99_prof);

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
