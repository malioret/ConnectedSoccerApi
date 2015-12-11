<?php

/* ::layout.html.twig */
class __TwigTemplate_05f8e397a3f6bc332cfbf4ee29d395b3c1e8c8167287975662c38c79c7c884ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styleheets' => array($this, 'block_styleheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffc124b5b5add814be15ddfb70f80326620a98b2e290a8507c458b6146167c8c = $this->env->getExtension("native_profiler");
        $__internal_ffc124b5b5add814be15ddfb70f80326620a98b2e290a8507c458b6146167c8c->enter($__internal_ffc124b5b5add814be15ddfb70f80326620a98b2e290a8507c458b6146167c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    
    ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "    
    
       
\t\t
\t<!-- CSS Files -->
\t\t
\t
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/css/landing-page.css"), "html", null, true);
        echo "\" />
    
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">
    
        
        
       ";
        // line 27
        $this->displayBlock('styleheets', $context, $blocks);
        // line 29
        echo "    
</head><!--/head-->



<body>
    ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "    
    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "    
          <!-- Bootstrap Core JavaScript -->
        <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
       
     
    
    
        
        ";
        // line 51
        $this->displayBlock('javascript', $context, $blocks);
        // line 55
        echo "</body>
</html>";
        
        $__internal_ffc124b5b5add814be15ddfb70f80326620a98b2e290a8507c458b6146167c8c->leave($__internal_ffc124b5b5add814be15ddfb70f80326620a98b2e290a8507c458b6146167c8c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_62237d2b854f327f8a79d54eb3ffddeca297d955d003c185ed3d68f930317b87 = $this->env->getExtension("native_profiler");
        $__internal_62237d2b854f327f8a79d54eb3ffddeca297d955d003c185ed3d68f930317b87->enter($__internal_62237d2b854f327f8a79d54eb3ffddeca297d955d003c185ed3d68f930317b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    <title id=\"title\">Connected Soccer</title>
    ";
        
        $__internal_62237d2b854f327f8a79d54eb3ffddeca297d955d003c185ed3d68f930317b87->leave($__internal_62237d2b854f327f8a79d54eb3ffddeca297d955d003c185ed3d68f930317b87_prof);

    }

    // line 27
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_f2612bfa3882fbd2bcceb681320cb0e767e359dc52b92fe602482efc65d00054 = $this->env->getExtension("native_profiler");
        $__internal_f2612bfa3882fbd2bcceb681320cb0e767e359dc52b92fe602482efc65d00054->enter($__internal_f2612bfa3882fbd2bcceb681320cb0e767e359dc52b92fe602482efc65d00054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 28
        echo "    ";
        
        $__internal_f2612bfa3882fbd2bcceb681320cb0e767e359dc52b92fe602482efc65d00054->leave($__internal_f2612bfa3882fbd2bcceb681320cb0e767e359dc52b92fe602482efc65d00054_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_63e529cde2ba7eef5cf4efa6fe2c629c144a33c05a278c9232b2a7ffdba7529d = $this->env->getExtension("native_profiler");
        $__internal_63e529cde2ba7eef5cf4efa6fe2c629c144a33c05a278c9232b2a7ffdba7529d->enter($__internal_63e529cde2ba7eef5cf4efa6fe2c629c144a33c05a278c9232b2a7ffdba7529d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "   
    ";
        
        $__internal_63e529cde2ba7eef5cf4efa6fe2c629c144a33c05a278c9232b2a7ffdba7529d->leave($__internal_63e529cde2ba7eef5cf4efa6fe2c629c144a33c05a278c9232b2a7ffdba7529d_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_3196b1b63d519bf87e067e0b4a6ccc9e2c5cae39150fc7294988a5d39883bbf4 = $this->env->getExtension("native_profiler");
        $__internal_3196b1b63d519bf87e067e0b4a6ccc9e2c5cae39150fc7294988a5d39883bbf4->enter($__internal_3196b1b63d519bf87e067e0b4a6ccc9e2c5cae39150fc7294988a5d39883bbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "   
    ";
        
        $__internal_3196b1b63d519bf87e067e0b4a6ccc9e2c5cae39150fc7294988a5d39883bbf4->leave($__internal_3196b1b63d519bf87e067e0b4a6ccc9e2c5cae39150fc7294988a5d39883bbf4_prof);

    }

    // line 51
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_044297cb502e27f6a8ecca3d3c26c9f56c7a7796cdf9c8344b58d6bb2a112f2b = $this->env->getExtension("native_profiler");
        $__internal_044297cb502e27f6a8ecca3d3c26c9f56c7a7796cdf9c8344b58d6bb2a112f2b->enter($__internal_044297cb502e27f6a8ecca3d3c26c9f56c7a7796cdf9c8344b58d6bb2a112f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 52
        echo "        
        
        ";
        
        $__internal_044297cb502e27f6a8ecca3d3c26c9f56c7a7796cdf9c8344b58d6bb2a112f2b->leave($__internal_044297cb502e27f6a8ecca3d3c26c9f56c7a7796cdf9c8344b58d6bb2a112f2b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 52,  164 => 51,  156 => 40,  150 => 39,  142 => 36,  136 => 35,  129 => 28,  123 => 27,  115 => 10,  109 => 9,  101 => 55,  99 => 51,  90 => 45,  86 => 44,  82 => 42,  80 => 39,  77 => 38,  75 => 35,  67 => 29,  65 => 27,  57 => 22,  52 => 20,  48 => 19,  39 => 12,  37 => 9,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=0.75">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     */
/*     {% block title %}*/
/*     <title id="title">Connected Soccer</title>*/
/*     {% endblock %}*/
/*     */
/*     */
/*        */
/* 		*/
/* 	<!-- CSS Files -->*/
/* 		*/
/* 	*/
/*     <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css')}}" />*/
/*     <link rel="stylesheet" href="{{ asset('template/css/landing-page.css')}}" />*/
/*     */
/*     <link href="{{ asset('template/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">*/
/*     <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">*/
/*     */
/*         */
/*         */
/*        {% block styleheets %}*/
/*     {% endblock %}*/
/*     */
/* </head><!--/head-->*/
/* */
/* */
/* */
/* <body>*/
/*     {% block header %}*/
/*    */
/*     {% endblock %}*/
/*     */
/*     {% block body %}*/
/*    */
/*     {% endblock %}*/
/*     */
/*           <!-- Bootstrap Core JavaScript -->*/
/*         <script type="text/javascript" src="{{ asset('template/js/jquery.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('template/js/bootstrap.min.js')}}"></script>*/
/*        */
/*      */
/*     */
/*     */
/*         */
/*         {% block javascript %}*/
/*         */
/*         */
/*         {% endblock %}*/
/* </body>*/
/* </html>*/
