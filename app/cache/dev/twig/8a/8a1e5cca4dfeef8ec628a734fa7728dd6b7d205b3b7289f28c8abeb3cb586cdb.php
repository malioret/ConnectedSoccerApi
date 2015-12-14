<?php

/* SoccerLandingBundle:Home:index.html.twig */
class __TwigTemplate_60cd57baba645c590f7ae076a3c52355e8d349e8a093ba76e50ebec7a3431e30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::layout.html.twig", "SoccerLandingBundle:Home:index.html.twig", 4);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'styleheets' => array($this, 'block_styleheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43213d8801f53b9b08e7f0ddef9cbb98e85e5688b478421716885e6b3345e0d5 = $this->env->getExtension("native_profiler");
        $__internal_43213d8801f53b9b08e7f0ddef9cbb98e85e5688b478421716885e6b3345e0d5->enter($__internal_43213d8801f53b9b08e7f0ddef9cbb98e85e5688b478421716885e6b3345e0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerLandingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43213d8801f53b9b08e7f0ddef9cbb98e85e5688b478421716885e6b3345e0d5->leave($__internal_43213d8801f53b9b08e7f0ddef9cbb98e85e5688b478421716885e6b3345e0d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c903e5f8dd27a8f1f3830b6410d71e4ae8cb761164cd54b244766cc42b8128f = $this->env->getExtension("native_profiler");
        $__internal_6c903e5f8dd27a8f1f3830b6410d71e4ae8cb761164cd54b244766cc42b8128f->enter($__internal_6c903e5f8dd27a8f1f3830b6410d71e4ae8cb761164cd54b244766cc42b8128f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title id=\"title\" data-id=\"admin\">Home Connected Soccer</title>
    ";
        
        $__internal_6c903e5f8dd27a8f1f3830b6410d71e4ae8cb761164cd54b244766cc42b8128f->leave($__internal_6c903e5f8dd27a8f1f3830b6410d71e4ae8cb761164cd54b244766cc42b8128f_prof);

    }

    // line 11
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_62b7036cbc41bb1371809463054b2f79984f5edf0e6d74da91422f8d1b0e6054 = $this->env->getExtension("native_profiler");
        $__internal_62b7036cbc41bb1371809463054b2f79984f5edf0e6d74da91422f8d1b0e6054->enter($__internal_62b7036cbc41bb1371809463054b2f79984f5edf0e6d74da91422f8d1b0e6054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 12
        echo "        
      
        
    ";
        
        $__internal_62b7036cbc41bb1371809463054b2f79984f5edf0e6d74da91422f8d1b0e6054->leave($__internal_62b7036cbc41bb1371809463054b2f79984f5edf0e6d74da91422f8d1b0e6054_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_648de6e2223cd89824dc9c383990f5cddf7616d93ad6b447c3b45674cd8b12a3 = $this->env->getExtension("native_profiler");
        $__internal_648de6e2223cd89824dc9c383990f5cddf7616d93ad6b447c3b45674cd8b12a3->enter($__internal_648de6e2223cd89824dc9c383990f5cddf7616d93ad6b447c3b45674cd8b12a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "    
           ";
        // line 20
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:header.html.twig");
        echo "
    
    ";
        
        $__internal_648de6e2223cd89824dc9c383990f5cddf7616d93ad6b447c3b45674cd8b12a3->leave($__internal_648de6e2223cd89824dc9c383990f5cddf7616d93ad6b447c3b45674cd8b12a3_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_22794bd14d06440b7458d3ae65efae11d9667e49320f504990a7d101c49d1b45 = $this->env->getExtension("native_profiler");
        $__internal_22794bd14d06440b7458d3ae65efae11d9667e49320f504990a7d101c49d1b45->enter($__internal_22794bd14d06440b7458d3ae65efae11d9667e49320f504990a7d101c49d1b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "   
        
    
        ";
        // line 32
        echo twig_include($this->env, $context, "SoccerLandingBundle:Home:home.html.twig");
        echo "
    
   
        
  ";
        
        $__internal_22794bd14d06440b7458d3ae65efae11d9667e49320f504990a7d101c49d1b45->leave($__internal_22794bd14d06440b7458d3ae65efae11d9667e49320f504990a7d101c49d1b45_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6e4921b2f3ce476568af77dd173ed5140042d947da94203ef83ada0316a1a4c0 = $this->env->getExtension("native_profiler");
        $__internal_6e4921b2f3ce476568af77dd173ed5140042d947da94203ef83ada0316a1a4c0->enter($__internal_6e4921b2f3ce476568af77dd173ed5140042d947da94203ef83ada0316a1a4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "      
       <script>
        \$(document).ready(function() {
            
           
          
                
           
\t\t

        });
        
            

       </script>
       
      

  ";
        
        $__internal_6e4921b2f3ce476568af77dd173ed5140042d947da94203ef83ada0316a1a4c0->leave($__internal_6e4921b2f3ce476568af77dd173ed5140042d947da94203ef83ada0316a1a4c0_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8623d44716696b0bef5987352bc5863bd425b23aba27bbf91bcff102de276ce8 = $this->env->getExtension("native_profiler");
        $__internal_8623d44716696b0bef5987352bc5863bd425b23aba27bbf91bcff102de276ce8->enter($__internal_8623d44716696b0bef5987352bc5863bd425b23aba27bbf91bcff102de276ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "   ";
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:footer.html.twig");
        echo "
    ";
        
        $__internal_8623d44716696b0bef5987352bc5863bd425b23aba27bbf91bcff102de276ce8->leave($__internal_8623d44716696b0bef5987352bc5863bd425b23aba27bbf91bcff102de276ce8_prof);

    }

    public function getTemplateName()
    {
        return "SoccerLandingBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  142 => 60,  117 => 40,  111 => 39,  99 => 32,  94 => 29,  88 => 28,  78 => 20,  75 => 19,  69 => 18,  59 => 12,  53 => 11,  45 => 8,  39 => 7,  11 => 4,);
    }
}
/* */
/* */
/*      */
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/*     {% block title %}*/
/*     <title id="title" data-id="admin">Home Connected Soccer</title>*/
/*     {% endblock %}*/
/*     */
/*     {% block styleheets %}*/
/*         */
/*       */
/*         */
/*     {% endblock %}*/
/*        */
/*     */
/*     {% block header %}*/
/*     */
/*            {{ include("SoccerLandingBundle:Base:header.html.twig") }}*/
/*     */
/*     {% endblock %}*/
/*  */
/*     */
/*     */
/*    */
/*     */
/*     {% block body %}*/
/*    */
/*         */
/*     */
/*         {{ include("SoccerLandingBundle:Home:home.html.twig") }}*/
/*     */
/*    */
/*         */
/*   {% endblock %}*/
/*     */
/*   */
/*   {% block javascript %}*/
/*       */
/*        <script>*/
/*         $(document).ready(function() {*/
/*             */
/*            */
/*           */
/*                 */
/*            */
/* 		*/
/* */
/*         });*/
/*         */
/*             */
/* */
/*        </script>*/
/*        */
/*       */
/* */
/*   {% endblock %}*/
/*   */
/* {% block footer %}*/
/*    {{ include("SoccerLandingBundle:Base:footer.html.twig") }}*/
/*     {% endblock %}*/
