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
        $__internal_0f87c811c9be23e163bd7546b74b579bd055a9737abd872d0e1b693e2d21c5cd = $this->env->getExtension("native_profiler");
        $__internal_0f87c811c9be23e163bd7546b74b579bd055a9737abd872d0e1b693e2d21c5cd->enter($__internal_0f87c811c9be23e163bd7546b74b579bd055a9737abd872d0e1b693e2d21c5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f87c811c9be23e163bd7546b74b579bd055a9737abd872d0e1b693e2d21c5cd->leave($__internal_0f87c811c9be23e163bd7546b74b579bd055a9737abd872d0e1b693e2d21c5cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce1337802362d44afaa0637adc3124820360e9cc9ff564c7144ba12059408070 = $this->env->getExtension("native_profiler");
        $__internal_ce1337802362d44afaa0637adc3124820360e9cc9ff564c7144ba12059408070->enter($__internal_ce1337802362d44afaa0637adc3124820360e9cc9ff564c7144ba12059408070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ce1337802362d44afaa0637adc3124820360e9cc9ff564c7144ba12059408070->leave($__internal_ce1337802362d44afaa0637adc3124820360e9cc9ff564c7144ba12059408070_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_434b4421cd8be311ee4b63fe0eb1e306b89d6f9ba2cd42139c9aa71f41c0fe4b = $this->env->getExtension("native_profiler");
        $__internal_434b4421cd8be311ee4b63fe0eb1e306b89d6f9ba2cd42139c9aa71f41c0fe4b->enter($__internal_434b4421cd8be311ee4b63fe0eb1e306b89d6f9ba2cd42139c9aa71f41c0fe4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_434b4421cd8be311ee4b63fe0eb1e306b89d6f9ba2cd42139c9aa71f41c0fe4b->leave($__internal_434b4421cd8be311ee4b63fe0eb1e306b89d6f9ba2cd42139c9aa71f41c0fe4b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_229fc62cd33c815cf603cc37d2c88f883bb2c79413487b8165c887ae6a7513c8 = $this->env->getExtension("native_profiler");
        $__internal_229fc62cd33c815cf603cc37d2c88f883bb2c79413487b8165c887ae6a7513c8->enter($__internal_229fc62cd33c815cf603cc37d2c88f883bb2c79413487b8165c887ae6a7513c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_229fc62cd33c815cf603cc37d2c88f883bb2c79413487b8165c887ae6a7513c8->leave($__internal_229fc62cd33c815cf603cc37d2c88f883bb2c79413487b8165c887ae6a7513c8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4eab947a9ebc160fc93ee462be23da8382ed253e3c5381e7f17a07bc4d090eb4 = $this->env->getExtension("native_profiler");
        $__internal_4eab947a9ebc160fc93ee462be23da8382ed253e3c5381e7f17a07bc4d090eb4->enter($__internal_4eab947a9ebc160fc93ee462be23da8382ed253e3c5381e7f17a07bc4d090eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4eab947a9ebc160fc93ee462be23da8382ed253e3c5381e7f17a07bc4d090eb4->leave($__internal_4eab947a9ebc160fc93ee462be23da8382ed253e3c5381e7f17a07bc4d090eb4_prof);

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
