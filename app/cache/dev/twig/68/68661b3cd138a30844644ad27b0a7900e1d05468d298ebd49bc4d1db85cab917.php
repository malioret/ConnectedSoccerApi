<?php

/* base.html.twig */
class __TwigTemplate_24f3c1a4d5d9c206cabb8733a486e93793068d636606e55405ce96ee82fe726c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f13aa8e2ed33d3b9e9cffda1df1a2c1d4e7682d94f8c398921c2cd18c5d49b7 = $this->env->getExtension("native_profiler");
        $__internal_0f13aa8e2ed33d3b9e9cffda1df1a2c1d4e7682d94f8c398921c2cd18c5d49b7->enter($__internal_0f13aa8e2ed33d3b9e9cffda1df1a2c1d4e7682d94f8c398921c2cd18c5d49b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0f13aa8e2ed33d3b9e9cffda1df1a2c1d4e7682d94f8c398921c2cd18c5d49b7->leave($__internal_0f13aa8e2ed33d3b9e9cffda1df1a2c1d4e7682d94f8c398921c2cd18c5d49b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7976a1085b2ef8d570f7e219c8eaf52b3e7c40b29d4fc1f55d021aaec0251781 = $this->env->getExtension("native_profiler");
        $__internal_7976a1085b2ef8d570f7e219c8eaf52b3e7c40b29d4fc1f55d021aaec0251781->enter($__internal_7976a1085b2ef8d570f7e219c8eaf52b3e7c40b29d4fc1f55d021aaec0251781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7976a1085b2ef8d570f7e219c8eaf52b3e7c40b29d4fc1f55d021aaec0251781->leave($__internal_7976a1085b2ef8d570f7e219c8eaf52b3e7c40b29d4fc1f55d021aaec0251781_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89be70aec7e7722ff3ccbfbc6f2ca2c5bd7b7491d48f1dad8a820fe347aff436 = $this->env->getExtension("native_profiler");
        $__internal_89be70aec7e7722ff3ccbfbc6f2ca2c5bd7b7491d48f1dad8a820fe347aff436->enter($__internal_89be70aec7e7722ff3ccbfbc6f2ca2c5bd7b7491d48f1dad8a820fe347aff436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_89be70aec7e7722ff3ccbfbc6f2ca2c5bd7b7491d48f1dad8a820fe347aff436->leave($__internal_89be70aec7e7722ff3ccbfbc6f2ca2c5bd7b7491d48f1dad8a820fe347aff436_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f968d15cb784913d27a46b8550c587e0a8555a471c640fc3b2bd26b72d95ad9 = $this->env->getExtension("native_profiler");
        $__internal_0f968d15cb784913d27a46b8550c587e0a8555a471c640fc3b2bd26b72d95ad9->enter($__internal_0f968d15cb784913d27a46b8550c587e0a8555a471c640fc3b2bd26b72d95ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f968d15cb784913d27a46b8550c587e0a8555a471c640fc3b2bd26b72d95ad9->leave($__internal_0f968d15cb784913d27a46b8550c587e0a8555a471c640fc3b2bd26b72d95ad9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d0219a16a5edb499f79fff1c7a2bbc762e3a213c2ece8278d57c7fc54cb7c7d = $this->env->getExtension("native_profiler");
        $__internal_8d0219a16a5edb499f79fff1c7a2bbc762e3a213c2ece8278d57c7fc54cb7c7d->enter($__internal_8d0219a16a5edb499f79fff1c7a2bbc762e3a213c2ece8278d57c7fc54cb7c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8d0219a16a5edb499f79fff1c7a2bbc762e3a213c2ece8278d57c7fc54cb7c7d->leave($__internal_8d0219a16a5edb499f79fff1c7a2bbc762e3a213c2ece8278d57c7fc54cb7c7d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
