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
        $__internal_3c8003cacab454f43fbf41a766d7c0b4f290080ea66627c9a396c4a49b4f713a = $this->env->getExtension("native_profiler");
        $__internal_3c8003cacab454f43fbf41a766d7c0b4f290080ea66627c9a396c4a49b4f713a->enter($__internal_3c8003cacab454f43fbf41a766d7c0b4f290080ea66627c9a396c4a49b4f713a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerLandingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c8003cacab454f43fbf41a766d7c0b4f290080ea66627c9a396c4a49b4f713a->leave($__internal_3c8003cacab454f43fbf41a766d7c0b4f290080ea66627c9a396c4a49b4f713a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc2582053c290fc1f5ab624ddb9bf245ee1e8737c806b3395bab66fb0c3c61e0 = $this->env->getExtension("native_profiler");
        $__internal_dc2582053c290fc1f5ab624ddb9bf245ee1e8737c806b3395bab66fb0c3c61e0->enter($__internal_dc2582053c290fc1f5ab624ddb9bf245ee1e8737c806b3395bab66fb0c3c61e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title id=\"title\" data-id=\"admin\">Home Connected Soccer</title>
    ";
        
        $__internal_dc2582053c290fc1f5ab624ddb9bf245ee1e8737c806b3395bab66fb0c3c61e0->leave($__internal_dc2582053c290fc1f5ab624ddb9bf245ee1e8737c806b3395bab66fb0c3c61e0_prof);

    }

    // line 11
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_db9f4f21f832a38e5e2a188f99af4c3ae2d0af4ee2959a984618c4806d377d12 = $this->env->getExtension("native_profiler");
        $__internal_db9f4f21f832a38e5e2a188f99af4c3ae2d0af4ee2959a984618c4806d377d12->enter($__internal_db9f4f21f832a38e5e2a188f99af4c3ae2d0af4ee2959a984618c4806d377d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 12
        echo "        
      
        
    ";
        
        $__internal_db9f4f21f832a38e5e2a188f99af4c3ae2d0af4ee2959a984618c4806d377d12->leave($__internal_db9f4f21f832a38e5e2a188f99af4c3ae2d0af4ee2959a984618c4806d377d12_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_82749cd8c754916b61d8ab702c5ebd8ea0d3fb00935ad44c6f4ad12ef62616fb = $this->env->getExtension("native_profiler");
        $__internal_82749cd8c754916b61d8ab702c5ebd8ea0d3fb00935ad44c6f4ad12ef62616fb->enter($__internal_82749cd8c754916b61d8ab702c5ebd8ea0d3fb00935ad44c6f4ad12ef62616fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "    
           ";
        // line 20
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:header.html.twig");
        echo "
    
    ";
        
        $__internal_82749cd8c754916b61d8ab702c5ebd8ea0d3fb00935ad44c6f4ad12ef62616fb->leave($__internal_82749cd8c754916b61d8ab702c5ebd8ea0d3fb00935ad44c6f4ad12ef62616fb_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_8def7854f1440ec4f6117fd40d76a0749a0a95b0c32a8cd8d700c4b6fd89940c = $this->env->getExtension("native_profiler");
        $__internal_8def7854f1440ec4f6117fd40d76a0749a0a95b0c32a8cd8d700c4b6fd89940c->enter($__internal_8def7854f1440ec4f6117fd40d76a0749a0a95b0c32a8cd8d700c4b6fd89940c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "   
        
    
        ";
        // line 32
        echo twig_include($this->env, $context, "SoccerLandingBundle:Home:home.html.twig");
        echo "
    
   
        
  ";
        
        $__internal_8def7854f1440ec4f6117fd40d76a0749a0a95b0c32a8cd8d700c4b6fd89940c->leave($__internal_8def7854f1440ec4f6117fd40d76a0749a0a95b0c32a8cd8d700c4b6fd89940c_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e3be5a48d6698ad26088330c94f23f1fc0e4efb65adfa566d45387849b646b47 = $this->env->getExtension("native_profiler");
        $__internal_e3be5a48d6698ad26088330c94f23f1fc0e4efb65adfa566d45387849b646b47->enter($__internal_e3be5a48d6698ad26088330c94f23f1fc0e4efb65adfa566d45387849b646b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "      
       <script>
        \$(document).ready(function() {
            
           
          
                
           
\t\t

        });
        
            

       </script>
       
      

  ";
        
        $__internal_e3be5a48d6698ad26088330c94f23f1fc0e4efb65adfa566d45387849b646b47->leave($__internal_e3be5a48d6698ad26088330c94f23f1fc0e4efb65adfa566d45387849b646b47_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_630a30df373def1e130dcbf7fad86af91923b396407b446612ba36c2ca731edb = $this->env->getExtension("native_profiler");
        $__internal_630a30df373def1e130dcbf7fad86af91923b396407b446612ba36c2ca731edb->enter($__internal_630a30df373def1e130dcbf7fad86af91923b396407b446612ba36c2ca731edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "   ";
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:footer.html.twig");
        echo "
    ";
        
        $__internal_630a30df373def1e130dcbf7fad86af91923b396407b446612ba36c2ca731edb->leave($__internal_630a30df373def1e130dcbf7fad86af91923b396407b446612ba36c2ca731edb_prof);

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
