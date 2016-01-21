<?php

/* ::layout.html.twig */
class __TwigTemplate_4f9ed56841f6668e7b90c07021b664c59e17602544ab875dc75239dc29e67838 extends Twig_Template
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
        $__internal_60662240689061d6009270bbf230f7cec51daf4e29478f800d68f88b7cd6574e = $this->env->getExtension("native_profiler");
        $__internal_60662240689061d6009270bbf230f7cec51daf4e29478f800d68f88b7cd6574e->enter($__internal_60662240689061d6009270bbf230f7cec51daf4e29478f800d68f88b7cd6574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_60662240689061d6009270bbf230f7cec51daf4e29478f800d68f88b7cd6574e->leave($__internal_60662240689061d6009270bbf230f7cec51daf4e29478f800d68f88b7cd6574e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_801a8c813e614cc6446b62a080e922842d3c0b5e7b97e95445a0b8ab0322ab18 = $this->env->getExtension("native_profiler");
        $__internal_801a8c813e614cc6446b62a080e922842d3c0b5e7b97e95445a0b8ab0322ab18->enter($__internal_801a8c813e614cc6446b62a080e922842d3c0b5e7b97e95445a0b8ab0322ab18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    <title id=\"title\">Connected Soccer</title>
    ";
        
        $__internal_801a8c813e614cc6446b62a080e922842d3c0b5e7b97e95445a0b8ab0322ab18->leave($__internal_801a8c813e614cc6446b62a080e922842d3c0b5e7b97e95445a0b8ab0322ab18_prof);

    }

    // line 27
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_563d6c4f441658ee1db806349e6a97e420b19d3029eac100d31831b9e3750eed = $this->env->getExtension("native_profiler");
        $__internal_563d6c4f441658ee1db806349e6a97e420b19d3029eac100d31831b9e3750eed->enter($__internal_563d6c4f441658ee1db806349e6a97e420b19d3029eac100d31831b9e3750eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 28
        echo "    ";
        
        $__internal_563d6c4f441658ee1db806349e6a97e420b19d3029eac100d31831b9e3750eed->leave($__internal_563d6c4f441658ee1db806349e6a97e420b19d3029eac100d31831b9e3750eed_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_b41b7b27712878e2eb876035be950e7a5bb29f2d9b406fed0aa5864db1034af1 = $this->env->getExtension("native_profiler");
        $__internal_b41b7b27712878e2eb876035be950e7a5bb29f2d9b406fed0aa5864db1034af1->enter($__internal_b41b7b27712878e2eb876035be950e7a5bb29f2d9b406fed0aa5864db1034af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "   
    ";
        
        $__internal_b41b7b27712878e2eb876035be950e7a5bb29f2d9b406fed0aa5864db1034af1->leave($__internal_b41b7b27712878e2eb876035be950e7a5bb29f2d9b406fed0aa5864db1034af1_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_20c37927cdf71d566c174e37bfc4b78f3a0453dd421455dd085f192432ff905d = $this->env->getExtension("native_profiler");
        $__internal_20c37927cdf71d566c174e37bfc4b78f3a0453dd421455dd085f192432ff905d->enter($__internal_20c37927cdf71d566c174e37bfc4b78f3a0453dd421455dd085f192432ff905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "   
    ";
        
        $__internal_20c37927cdf71d566c174e37bfc4b78f3a0453dd421455dd085f192432ff905d->leave($__internal_20c37927cdf71d566c174e37bfc4b78f3a0453dd421455dd085f192432ff905d_prof);

    }

    // line 51
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9645128830a5943cd47ac4d6d51f99b2edb9aaa419af94076eafbce01189eb13 = $this->env->getExtension("native_profiler");
        $__internal_9645128830a5943cd47ac4d6d51f99b2edb9aaa419af94076eafbce01189eb13->enter($__internal_9645128830a5943cd47ac4d6d51f99b2edb9aaa419af94076eafbce01189eb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 52
        echo "        
        
        ";
        
        $__internal_9645128830a5943cd47ac4d6d51f99b2edb9aaa419af94076eafbce01189eb13->leave($__internal_9645128830a5943cd47ac4d6d51f99b2edb9aaa419af94076eafbce01189eb13_prof);

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
