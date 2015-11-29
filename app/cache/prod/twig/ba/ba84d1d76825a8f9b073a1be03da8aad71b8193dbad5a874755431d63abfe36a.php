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
        $__internal_162d909f36ca391086a0fe9d316275065e60c4e28bc115c217ef0b82ece4b54b = $this->env->getExtension("native_profiler");
        $__internal_162d909f36ca391086a0fe9d316275065e60c4e28bc115c217ef0b82ece4b54b->enter($__internal_162d909f36ca391086a0fe9d316275065e60c4e28bc115c217ef0b82ece4b54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_162d909f36ca391086a0fe9d316275065e60c4e28bc115c217ef0b82ece4b54b->leave($__internal_162d909f36ca391086a0fe9d316275065e60c4e28bc115c217ef0b82ece4b54b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7e26bb2e256131986fea61a61a6e02d6841bed0c58aaea198cc5ab3d8d75d82 = $this->env->getExtension("native_profiler");
        $__internal_e7e26bb2e256131986fea61a61a6e02d6841bed0c58aaea198cc5ab3d8d75d82->enter($__internal_e7e26bb2e256131986fea61a61a6e02d6841bed0c58aaea198cc5ab3d8d75d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    <title id=\"title\">Connected Soccer</title>
    ";
        
        $__internal_e7e26bb2e256131986fea61a61a6e02d6841bed0c58aaea198cc5ab3d8d75d82->leave($__internal_e7e26bb2e256131986fea61a61a6e02d6841bed0c58aaea198cc5ab3d8d75d82_prof);

    }

    // line 27
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_eefce565bd9477accf47396a486ec9236f62048f3e74a70a39c331babbc38973 = $this->env->getExtension("native_profiler");
        $__internal_eefce565bd9477accf47396a486ec9236f62048f3e74a70a39c331babbc38973->enter($__internal_eefce565bd9477accf47396a486ec9236f62048f3e74a70a39c331babbc38973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 28
        echo "    ";
        
        $__internal_eefce565bd9477accf47396a486ec9236f62048f3e74a70a39c331babbc38973->leave($__internal_eefce565bd9477accf47396a486ec9236f62048f3e74a70a39c331babbc38973_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_289537e623fdadd87d524e8cbd7f6a55320172e65e0507869fb5dbc2caa53b3c = $this->env->getExtension("native_profiler");
        $__internal_289537e623fdadd87d524e8cbd7f6a55320172e65e0507869fb5dbc2caa53b3c->enter($__internal_289537e623fdadd87d524e8cbd7f6a55320172e65e0507869fb5dbc2caa53b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "   
    ";
        
        $__internal_289537e623fdadd87d524e8cbd7f6a55320172e65e0507869fb5dbc2caa53b3c->leave($__internal_289537e623fdadd87d524e8cbd7f6a55320172e65e0507869fb5dbc2caa53b3c_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c1ba8fc36fa8ed8ca65bf5187bbc9ecf1479373e3db7935a09a10bc0cd65047 = $this->env->getExtension("native_profiler");
        $__internal_5c1ba8fc36fa8ed8ca65bf5187bbc9ecf1479373e3db7935a09a10bc0cd65047->enter($__internal_5c1ba8fc36fa8ed8ca65bf5187bbc9ecf1479373e3db7935a09a10bc0cd65047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "   
    ";
        
        $__internal_5c1ba8fc36fa8ed8ca65bf5187bbc9ecf1479373e3db7935a09a10bc0cd65047->leave($__internal_5c1ba8fc36fa8ed8ca65bf5187bbc9ecf1479373e3db7935a09a10bc0cd65047_prof);

    }

    // line 51
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_de76bbc0d34ad4075878950556b58e7cbd40bf2b91bfe7892f1cb42eafb143e5 = $this->env->getExtension("native_profiler");
        $__internal_de76bbc0d34ad4075878950556b58e7cbd40bf2b91bfe7892f1cb42eafb143e5->enter($__internal_de76bbc0d34ad4075878950556b58e7cbd40bf2b91bfe7892f1cb42eafb143e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 52
        echo "        
        
        ";
        
        $__internal_de76bbc0d34ad4075878950556b58e7cbd40bf2b91bfe7892f1cb42eafb143e5->leave($__internal_de76bbc0d34ad4075878950556b58e7cbd40bf2b91bfe7892f1cb42eafb143e5_prof);

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
