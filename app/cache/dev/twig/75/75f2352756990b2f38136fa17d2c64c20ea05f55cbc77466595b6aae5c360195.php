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
        $__internal_6f86b5e496073c97fb8e966f7af2a62ef69b6f254bb545256da6f6ccfaadb77c = $this->env->getExtension("native_profiler");
        $__internal_6f86b5e496073c97fb8e966f7af2a62ef69b6f254bb545256da6f6ccfaadb77c->enter($__internal_6f86b5e496073c97fb8e966f7af2a62ef69b6f254bb545256da6f6ccfaadb77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f86b5e496073c97fb8e966f7af2a62ef69b6f254bb545256da6f6ccfaadb77c->leave($__internal_6f86b5e496073c97fb8e966f7af2a62ef69b6f254bb545256da6f6ccfaadb77c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac9e23466b6e8561ad8aa3cadf05c86c508705846325c65f95cbd3a5f61d990f = $this->env->getExtension("native_profiler");
        $__internal_ac9e23466b6e8561ad8aa3cadf05c86c508705846325c65f95cbd3a5f61d990f->enter($__internal_ac9e23466b6e8561ad8aa3cadf05c86c508705846325c65f95cbd3a5f61d990f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ac9e23466b6e8561ad8aa3cadf05c86c508705846325c65f95cbd3a5f61d990f->leave($__internal_ac9e23466b6e8561ad8aa3cadf05c86c508705846325c65f95cbd3a5f61d990f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6b87e9a074b6df0973f1ccbc330b0e9824e434b63aafe7fb62c4dd4c42396ef = $this->env->getExtension("native_profiler");
        $__internal_f6b87e9a074b6df0973f1ccbc330b0e9824e434b63aafe7fb62c4dd4c42396ef->enter($__internal_f6b87e9a074b6df0973f1ccbc330b0e9824e434b63aafe7fb62c4dd4c42396ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f6b87e9a074b6df0973f1ccbc330b0e9824e434b63aafe7fb62c4dd4c42396ef->leave($__internal_f6b87e9a074b6df0973f1ccbc330b0e9824e434b63aafe7fb62c4dd4c42396ef_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5b5f0279a22abbd77d5df7ebaa0597d67a9ebb8447fa3bdd9ce3df8f72e6eab = $this->env->getExtension("native_profiler");
        $__internal_f5b5f0279a22abbd77d5df7ebaa0597d67a9ebb8447fa3bdd9ce3df8f72e6eab->enter($__internal_f5b5f0279a22abbd77d5df7ebaa0597d67a9ebb8447fa3bdd9ce3df8f72e6eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f5b5f0279a22abbd77d5df7ebaa0597d67a9ebb8447fa3bdd9ce3df8f72e6eab->leave($__internal_f5b5f0279a22abbd77d5df7ebaa0597d67a9ebb8447fa3bdd9ce3df8f72e6eab_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_3f06f4bedd5abf01ac925449b9d617cf573e74459fc5c485d2b4b669277c8a9b = $this->env->getExtension("native_profiler");
        $__internal_3f06f4bedd5abf01ac925449b9d617cf573e74459fc5c485d2b4b669277c8a9b->enter($__internal_3f06f4bedd5abf01ac925449b9d617cf573e74459fc5c485d2b4b669277c8a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3f06f4bedd5abf01ac925449b9d617cf573e74459fc5c485d2b4b669277c8a9b->leave($__internal_3f06f4bedd5abf01ac925449b9d617cf573e74459fc5c485d2b4b669277c8a9b_prof);

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
