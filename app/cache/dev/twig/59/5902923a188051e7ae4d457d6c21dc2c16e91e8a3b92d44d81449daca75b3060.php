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
        $__internal_d48cc34b8e3e98b402a7199c25ec6b764f8237550d65ff5ebd323d3dce264573 = $this->env->getExtension("native_profiler");
        $__internal_d48cc34b8e3e98b402a7199c25ec6b764f8237550d65ff5ebd323d3dce264573->enter($__internal_d48cc34b8e3e98b402a7199c25ec6b764f8237550d65ff5ebd323d3dce264573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_d48cc34b8e3e98b402a7199c25ec6b764f8237550d65ff5ebd323d3dce264573->leave($__internal_d48cc34b8e3e98b402a7199c25ec6b764f8237550d65ff5ebd323d3dce264573_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a28dd0731edc99804de0e5f710e25655393e5d9695339e05168bb3116d2f644 = $this->env->getExtension("native_profiler");
        $__internal_4a28dd0731edc99804de0e5f710e25655393e5d9695339e05168bb3116d2f644->enter($__internal_4a28dd0731edc99804de0e5f710e25655393e5d9695339e05168bb3116d2f644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    <title id=\"title\">Connected Soccer</title>
    ";
        
        $__internal_4a28dd0731edc99804de0e5f710e25655393e5d9695339e05168bb3116d2f644->leave($__internal_4a28dd0731edc99804de0e5f710e25655393e5d9695339e05168bb3116d2f644_prof);

    }

    // line 27
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_01d769bf6be1a3480728d6ff15505029a709b1a4cba5a6238fb8f4f34a02aec8 = $this->env->getExtension("native_profiler");
        $__internal_01d769bf6be1a3480728d6ff15505029a709b1a4cba5a6238fb8f4f34a02aec8->enter($__internal_01d769bf6be1a3480728d6ff15505029a709b1a4cba5a6238fb8f4f34a02aec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 28
        echo "    ";
        
        $__internal_01d769bf6be1a3480728d6ff15505029a709b1a4cba5a6238fb8f4f34a02aec8->leave($__internal_01d769bf6be1a3480728d6ff15505029a709b1a4cba5a6238fb8f4f34a02aec8_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_06d6a1dc8b7da230c4e91015681ae4fa87ff81cfd2cf9cfc646cd063fb9bdb79 = $this->env->getExtension("native_profiler");
        $__internal_06d6a1dc8b7da230c4e91015681ae4fa87ff81cfd2cf9cfc646cd063fb9bdb79->enter($__internal_06d6a1dc8b7da230c4e91015681ae4fa87ff81cfd2cf9cfc646cd063fb9bdb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "   
    ";
        
        $__internal_06d6a1dc8b7da230c4e91015681ae4fa87ff81cfd2cf9cfc646cd063fb9bdb79->leave($__internal_06d6a1dc8b7da230c4e91015681ae4fa87ff81cfd2cf9cfc646cd063fb9bdb79_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1521b9d718d2b6a423361bdaeb4d08cc40d0e2cd4532fa6e10e3468c8b2e87b = $this->env->getExtension("native_profiler");
        $__internal_a1521b9d718d2b6a423361bdaeb4d08cc40d0e2cd4532fa6e10e3468c8b2e87b->enter($__internal_a1521b9d718d2b6a423361bdaeb4d08cc40d0e2cd4532fa6e10e3468c8b2e87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "   
    ";
        
        $__internal_a1521b9d718d2b6a423361bdaeb4d08cc40d0e2cd4532fa6e10e3468c8b2e87b->leave($__internal_a1521b9d718d2b6a423361bdaeb4d08cc40d0e2cd4532fa6e10e3468c8b2e87b_prof);

    }

    // line 51
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ac8effc46210707528f570f530c6d02e7046f845b99839a98a603d51e1a808fa = $this->env->getExtension("native_profiler");
        $__internal_ac8effc46210707528f570f530c6d02e7046f845b99839a98a603d51e1a808fa->enter($__internal_ac8effc46210707528f570f530c6d02e7046f845b99839a98a603d51e1a808fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 52
        echo "        
        
        ";
        
        $__internal_ac8effc46210707528f570f530c6d02e7046f845b99839a98a603d51e1a808fa->leave($__internal_ac8effc46210707528f570f530c6d02e7046f845b99839a98a603d51e1a808fa_prof);

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
