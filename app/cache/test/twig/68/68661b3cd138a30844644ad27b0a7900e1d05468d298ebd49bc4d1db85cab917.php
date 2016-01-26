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
        $__internal_3d803fda0a35770de87f01a035c771bdb7a86606a8a7fda7ce47411b44d01847 = $this->env->getExtension("native_profiler");
        $__internal_3d803fda0a35770de87f01a035c771bdb7a86606a8a7fda7ce47411b44d01847->enter($__internal_3d803fda0a35770de87f01a035c771bdb7a86606a8a7fda7ce47411b44d01847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3d803fda0a35770de87f01a035c771bdb7a86606a8a7fda7ce47411b44d01847->leave($__internal_3d803fda0a35770de87f01a035c771bdb7a86606a8a7fda7ce47411b44d01847_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_238124e4ac6a80abe1a64a55c2191b82debb04c351b1c0e43ff58f5932e1a00c = $this->env->getExtension("native_profiler");
        $__internal_238124e4ac6a80abe1a64a55c2191b82debb04c351b1c0e43ff58f5932e1a00c->enter($__internal_238124e4ac6a80abe1a64a55c2191b82debb04c351b1c0e43ff58f5932e1a00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_238124e4ac6a80abe1a64a55c2191b82debb04c351b1c0e43ff58f5932e1a00c->leave($__internal_238124e4ac6a80abe1a64a55c2191b82debb04c351b1c0e43ff58f5932e1a00c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_502c5b2bee038e94952a03dd54559340f5fedbaf7fa81887254192ca08f76e59 = $this->env->getExtension("native_profiler");
        $__internal_502c5b2bee038e94952a03dd54559340f5fedbaf7fa81887254192ca08f76e59->enter($__internal_502c5b2bee038e94952a03dd54559340f5fedbaf7fa81887254192ca08f76e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_502c5b2bee038e94952a03dd54559340f5fedbaf7fa81887254192ca08f76e59->leave($__internal_502c5b2bee038e94952a03dd54559340f5fedbaf7fa81887254192ca08f76e59_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a57b495f82b075443aa2a2353fa4a8f260f934492f001ee3db54a054b09d7b9 = $this->env->getExtension("native_profiler");
        $__internal_6a57b495f82b075443aa2a2353fa4a8f260f934492f001ee3db54a054b09d7b9->enter($__internal_6a57b495f82b075443aa2a2353fa4a8f260f934492f001ee3db54a054b09d7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a57b495f82b075443aa2a2353fa4a8f260f934492f001ee3db54a054b09d7b9->leave($__internal_6a57b495f82b075443aa2a2353fa4a8f260f934492f001ee3db54a054b09d7b9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97ea70e273eca4aa1d136f7511f67219aaa163a0363f6c8a0dcbdaa2ac90060b = $this->env->getExtension("native_profiler");
        $__internal_97ea70e273eca4aa1d136f7511f67219aaa163a0363f6c8a0dcbdaa2ac90060b->enter($__internal_97ea70e273eca4aa1d136f7511f67219aaa163a0363f6c8a0dcbdaa2ac90060b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_97ea70e273eca4aa1d136f7511f67219aaa163a0363f6c8a0dcbdaa2ac90060b->leave($__internal_97ea70e273eca4aa1d136f7511f67219aaa163a0363f6c8a0dcbdaa2ac90060b_prof);

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
