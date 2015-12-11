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
        $__internal_b2af69923c93ac0924825313d49cab86d93e6a4515f270a3bfa52b120fa85cd6 = $this->env->getExtension("native_profiler");
        $__internal_b2af69923c93ac0924825313d49cab86d93e6a4515f270a3bfa52b120fa85cd6->enter($__internal_b2af69923c93ac0924825313d49cab86d93e6a4515f270a3bfa52b120fa85cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerLandingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2af69923c93ac0924825313d49cab86d93e6a4515f270a3bfa52b120fa85cd6->leave($__internal_b2af69923c93ac0924825313d49cab86d93e6a4515f270a3bfa52b120fa85cd6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_04ee87da70f90d53662daffe8bd7dfbed2aa3c5f8246dd1b4591573db5617ead = $this->env->getExtension("native_profiler");
        $__internal_04ee87da70f90d53662daffe8bd7dfbed2aa3c5f8246dd1b4591573db5617ead->enter($__internal_04ee87da70f90d53662daffe8bd7dfbed2aa3c5f8246dd1b4591573db5617ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title id=\"title\" data-id=\"admin\">Home Connected Soccer</title>
    ";
        
        $__internal_04ee87da70f90d53662daffe8bd7dfbed2aa3c5f8246dd1b4591573db5617ead->leave($__internal_04ee87da70f90d53662daffe8bd7dfbed2aa3c5f8246dd1b4591573db5617ead_prof);

    }

    // line 11
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_59b514b244c3a0777c16227db95f7cb1492c8ee99e76a6cf5e3f2662f39d0d79 = $this->env->getExtension("native_profiler");
        $__internal_59b514b244c3a0777c16227db95f7cb1492c8ee99e76a6cf5e3f2662f39d0d79->enter($__internal_59b514b244c3a0777c16227db95f7cb1492c8ee99e76a6cf5e3f2662f39d0d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 12
        echo "        
      
        
    ";
        
        $__internal_59b514b244c3a0777c16227db95f7cb1492c8ee99e76a6cf5e3f2662f39d0d79->leave($__internal_59b514b244c3a0777c16227db95f7cb1492c8ee99e76a6cf5e3f2662f39d0d79_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_1f2d778d094093f86acb907910fdf7d08dfbf813f431c32128f0b48f8e369475 = $this->env->getExtension("native_profiler");
        $__internal_1f2d778d094093f86acb907910fdf7d08dfbf813f431c32128f0b48f8e369475->enter($__internal_1f2d778d094093f86acb907910fdf7d08dfbf813f431c32128f0b48f8e369475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "    
           ";
        // line 20
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:header.html.twig");
        echo "
    
    ";
        
        $__internal_1f2d778d094093f86acb907910fdf7d08dfbf813f431c32128f0b48f8e369475->leave($__internal_1f2d778d094093f86acb907910fdf7d08dfbf813f431c32128f0b48f8e369475_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab0b8ded602f967481bb05c802ebea7c830d1cac0a29a2482bf298d51bd428d7 = $this->env->getExtension("native_profiler");
        $__internal_ab0b8ded602f967481bb05c802ebea7c830d1cac0a29a2482bf298d51bd428d7->enter($__internal_ab0b8ded602f967481bb05c802ebea7c830d1cac0a29a2482bf298d51bd428d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "   
        
    
        ";
        // line 32
        echo twig_include($this->env, $context, "SoccerLandingBundle:Home:home.html.twig");
        echo "
    
   
        
  ";
        
        $__internal_ab0b8ded602f967481bb05c802ebea7c830d1cac0a29a2482bf298d51bd428d7->leave($__internal_ab0b8ded602f967481bb05c802ebea7c830d1cac0a29a2482bf298d51bd428d7_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9d11c18e52f651961bf3568588d7fc6717793da687a79d7a6fae6367c3ab1c2d = $this->env->getExtension("native_profiler");
        $__internal_9d11c18e52f651961bf3568588d7fc6717793da687a79d7a6fae6367c3ab1c2d->enter($__internal_9d11c18e52f651961bf3568588d7fc6717793da687a79d7a6fae6367c3ab1c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "      
       <script>
        \$(document).ready(function() {
            
           
          
                
           
\t\t

        });
        
            

       </script>
       
      

  ";
        
        $__internal_9d11c18e52f651961bf3568588d7fc6717793da687a79d7a6fae6367c3ab1c2d->leave($__internal_9d11c18e52f651961bf3568588d7fc6717793da687a79d7a6fae6367c3ab1c2d_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9b6f3852c23064510e277b7ab1d8c0696824e2d8e891920612793eeadbfad110 = $this->env->getExtension("native_profiler");
        $__internal_9b6f3852c23064510e277b7ab1d8c0696824e2d8e891920612793eeadbfad110->enter($__internal_9b6f3852c23064510e277b7ab1d8c0696824e2d8e891920612793eeadbfad110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "   ";
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:footer.html.twig");
        echo "
    ";
        
        $__internal_9b6f3852c23064510e277b7ab1d8c0696824e2d8e891920612793eeadbfad110->leave($__internal_9b6f3852c23064510e277b7ab1d8c0696824e2d8e891920612793eeadbfad110_prof);

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
