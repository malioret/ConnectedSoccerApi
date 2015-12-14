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
        $__internal_1d6302bdd9d7478aab3899106e79d6d5767a1f522f0b0836fc05f6174d21ab60 = $this->env->getExtension("native_profiler");
        $__internal_1d6302bdd9d7478aab3899106e79d6d5767a1f522f0b0836fc05f6174d21ab60->enter($__internal_1d6302bdd9d7478aab3899106e79d6d5767a1f522f0b0836fc05f6174d21ab60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1d6302bdd9d7478aab3899106e79d6d5767a1f522f0b0836fc05f6174d21ab60->leave($__internal_1d6302bdd9d7478aab3899106e79d6d5767a1f522f0b0836fc05f6174d21ab60_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3053dd2166bf81de124c18108d9e39f2b1a692b1099336fbb4f0b47ad16d009 = $this->env->getExtension("native_profiler");
        $__internal_f3053dd2166bf81de124c18108d9e39f2b1a692b1099336fbb4f0b47ad16d009->enter($__internal_f3053dd2166bf81de124c18108d9e39f2b1a692b1099336fbb4f0b47ad16d009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f3053dd2166bf81de124c18108d9e39f2b1a692b1099336fbb4f0b47ad16d009->leave($__internal_f3053dd2166bf81de124c18108d9e39f2b1a692b1099336fbb4f0b47ad16d009_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e8b91d229e8cb5a735e6f65bb5b92024cfa0c898c84035ab1a1ca076bbb421d9 = $this->env->getExtension("native_profiler");
        $__internal_e8b91d229e8cb5a735e6f65bb5b92024cfa0c898c84035ab1a1ca076bbb421d9->enter($__internal_e8b91d229e8cb5a735e6f65bb5b92024cfa0c898c84035ab1a1ca076bbb421d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e8b91d229e8cb5a735e6f65bb5b92024cfa0c898c84035ab1a1ca076bbb421d9->leave($__internal_e8b91d229e8cb5a735e6f65bb5b92024cfa0c898c84035ab1a1ca076bbb421d9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_21a5997e2f9e7fad6997b7a2e93b6436aacbfa5811237b78f6d825d5cb785870 = $this->env->getExtension("native_profiler");
        $__internal_21a5997e2f9e7fad6997b7a2e93b6436aacbfa5811237b78f6d825d5cb785870->enter($__internal_21a5997e2f9e7fad6997b7a2e93b6436aacbfa5811237b78f6d825d5cb785870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_21a5997e2f9e7fad6997b7a2e93b6436aacbfa5811237b78f6d825d5cb785870->leave($__internal_21a5997e2f9e7fad6997b7a2e93b6436aacbfa5811237b78f6d825d5cb785870_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a8de21488ca99efb9577a05a649606b23e777aa36f0a8a84bec806d84641f523 = $this->env->getExtension("native_profiler");
        $__internal_a8de21488ca99efb9577a05a649606b23e777aa36f0a8a84bec806d84641f523->enter($__internal_a8de21488ca99efb9577a05a649606b23e777aa36f0a8a84bec806d84641f523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a8de21488ca99efb9577a05a649606b23e777aa36f0a8a84bec806d84641f523->leave($__internal_a8de21488ca99efb9577a05a649606b23e777aa36f0a8a84bec806d84641f523_prof);

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
