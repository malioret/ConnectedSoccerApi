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
        $__internal_278a640036746b8ef2165b7f5f4cbd07f0b570317905feb3efd947b50fc93435 = $this->env->getExtension("native_profiler");
        $__internal_278a640036746b8ef2165b7f5f4cbd07f0b570317905feb3efd947b50fc93435->enter($__internal_278a640036746b8ef2165b7f5f4cbd07f0b570317905feb3efd947b50fc93435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_278a640036746b8ef2165b7f5f4cbd07f0b570317905feb3efd947b50fc93435->leave($__internal_278a640036746b8ef2165b7f5f4cbd07f0b570317905feb3efd947b50fc93435_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb36a7b907e1ec794d909eaa94ee9ce3a5d6e8fa3dca13fe18da7b93893aab38 = $this->env->getExtension("native_profiler");
        $__internal_fb36a7b907e1ec794d909eaa94ee9ce3a5d6e8fa3dca13fe18da7b93893aab38->enter($__internal_fb36a7b907e1ec794d909eaa94ee9ce3a5d6e8fa3dca13fe18da7b93893aab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fb36a7b907e1ec794d909eaa94ee9ce3a5d6e8fa3dca13fe18da7b93893aab38->leave($__internal_fb36a7b907e1ec794d909eaa94ee9ce3a5d6e8fa3dca13fe18da7b93893aab38_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62546d1b3e24e413917ba4eabc0729e631e23e126073cd75d1750df9174e561e = $this->env->getExtension("native_profiler");
        $__internal_62546d1b3e24e413917ba4eabc0729e631e23e126073cd75d1750df9174e561e->enter($__internal_62546d1b3e24e413917ba4eabc0729e631e23e126073cd75d1750df9174e561e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_62546d1b3e24e413917ba4eabc0729e631e23e126073cd75d1750df9174e561e->leave($__internal_62546d1b3e24e413917ba4eabc0729e631e23e126073cd75d1750df9174e561e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e610f1f50e06cfbf575f4d4f1e0353073a2bcda66fedaceaa52ba868a9043e38 = $this->env->getExtension("native_profiler");
        $__internal_e610f1f50e06cfbf575f4d4f1e0353073a2bcda66fedaceaa52ba868a9043e38->enter($__internal_e610f1f50e06cfbf575f4d4f1e0353073a2bcda66fedaceaa52ba868a9043e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e610f1f50e06cfbf575f4d4f1e0353073a2bcda66fedaceaa52ba868a9043e38->leave($__internal_e610f1f50e06cfbf575f4d4f1e0353073a2bcda66fedaceaa52ba868a9043e38_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d1f83a5682dadfea315038a31b96034cbf0df044b05fe376545060d068d49e9 = $this->env->getExtension("native_profiler");
        $__internal_3d1f83a5682dadfea315038a31b96034cbf0df044b05fe376545060d068d49e9->enter($__internal_3d1f83a5682dadfea315038a31b96034cbf0df044b05fe376545060d068d49e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3d1f83a5682dadfea315038a31b96034cbf0df044b05fe376545060d068d49e9->leave($__internal_3d1f83a5682dadfea315038a31b96034cbf0df044b05fe376545060d068d49e9_prof);

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
