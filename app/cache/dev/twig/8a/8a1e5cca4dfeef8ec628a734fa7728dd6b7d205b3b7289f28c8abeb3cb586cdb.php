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
        $__internal_bcc12251e581a9e79be4fa00a1ab7eb3925cf3052ffc2f8bc716e69437b7b64b = $this->env->getExtension("native_profiler");
        $__internal_bcc12251e581a9e79be4fa00a1ab7eb3925cf3052ffc2f8bc716e69437b7b64b->enter($__internal_bcc12251e581a9e79be4fa00a1ab7eb3925cf3052ffc2f8bc716e69437b7b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerLandingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc12251e581a9e79be4fa00a1ab7eb3925cf3052ffc2f8bc716e69437b7b64b->leave($__internal_bcc12251e581a9e79be4fa00a1ab7eb3925cf3052ffc2f8bc716e69437b7b64b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ac1c9a9e47d723aad6763d7ab4a072b7b2f62e355d22d03164ba95aa0c37d6c = $this->env->getExtension("native_profiler");
        $__internal_1ac1c9a9e47d723aad6763d7ab4a072b7b2f62e355d22d03164ba95aa0c37d6c->enter($__internal_1ac1c9a9e47d723aad6763d7ab4a072b7b2f62e355d22d03164ba95aa0c37d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title id=\"title\" data-id=\"admin\">Home Connected Soccer</title>
    ";
        
        $__internal_1ac1c9a9e47d723aad6763d7ab4a072b7b2f62e355d22d03164ba95aa0c37d6c->leave($__internal_1ac1c9a9e47d723aad6763d7ab4a072b7b2f62e355d22d03164ba95aa0c37d6c_prof);

    }

    // line 11
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_85c7282d790edb5cf25ab3842187910acdfadf7c326e0c1e0da75c2d0f28b200 = $this->env->getExtension("native_profiler");
        $__internal_85c7282d790edb5cf25ab3842187910acdfadf7c326e0c1e0da75c2d0f28b200->enter($__internal_85c7282d790edb5cf25ab3842187910acdfadf7c326e0c1e0da75c2d0f28b200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 12
        echo "        
      
        
    ";
        
        $__internal_85c7282d790edb5cf25ab3842187910acdfadf7c326e0c1e0da75c2d0f28b200->leave($__internal_85c7282d790edb5cf25ab3842187910acdfadf7c326e0c1e0da75c2d0f28b200_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_e2be9dbd9aa7247001439bf754d0356f50d18ec46043561a4a4b024a33d98344 = $this->env->getExtension("native_profiler");
        $__internal_e2be9dbd9aa7247001439bf754d0356f50d18ec46043561a4a4b024a33d98344->enter($__internal_e2be9dbd9aa7247001439bf754d0356f50d18ec46043561a4a4b024a33d98344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "    
           ";
        // line 20
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:header.html.twig");
        echo "
    
    ";
        
        $__internal_e2be9dbd9aa7247001439bf754d0356f50d18ec46043561a4a4b024a33d98344->leave($__internal_e2be9dbd9aa7247001439bf754d0356f50d18ec46043561a4a4b024a33d98344_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_11a2e4fb55b5551b504930b589efbc72b401569053456a01ebcd704f28ff4df6 = $this->env->getExtension("native_profiler");
        $__internal_11a2e4fb55b5551b504930b589efbc72b401569053456a01ebcd704f28ff4df6->enter($__internal_11a2e4fb55b5551b504930b589efbc72b401569053456a01ebcd704f28ff4df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "   
        
    
        ";
        // line 32
        echo twig_include($this->env, $context, "SoccerLandingBundle:Home:home.html.twig");
        echo "
    
   
        
  ";
        
        $__internal_11a2e4fb55b5551b504930b589efbc72b401569053456a01ebcd704f28ff4df6->leave($__internal_11a2e4fb55b5551b504930b589efbc72b401569053456a01ebcd704f28ff4df6_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d6120c38389990c2d38ea8adc0cec309c4112e15dd2df37fa25a4934f3d63b77 = $this->env->getExtension("native_profiler");
        $__internal_d6120c38389990c2d38ea8adc0cec309c4112e15dd2df37fa25a4934f3d63b77->enter($__internal_d6120c38389990c2d38ea8adc0cec309c4112e15dd2df37fa25a4934f3d63b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "      
       <script>
        \$(document).ready(function() {
            
           
          
                
           
\t\t

        });
        
            

       </script>
       
      

  ";
        
        $__internal_d6120c38389990c2d38ea8adc0cec309c4112e15dd2df37fa25a4934f3d63b77->leave($__internal_d6120c38389990c2d38ea8adc0cec309c4112e15dd2df37fa25a4934f3d63b77_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b6a5d52b76daef94d4d422230c0f80d6388fb6997e9e4cbbce2b6aa5976c9918 = $this->env->getExtension("native_profiler");
        $__internal_b6a5d52b76daef94d4d422230c0f80d6388fb6997e9e4cbbce2b6aa5976c9918->enter($__internal_b6a5d52b76daef94d4d422230c0f80d6388fb6997e9e4cbbce2b6aa5976c9918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "   ";
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:footer.html.twig");
        echo "
    ";
        
        $__internal_b6a5d52b76daef94d4d422230c0f80d6388fb6997e9e4cbbce2b6aa5976c9918->leave($__internal_b6a5d52b76daef94d4d422230c0f80d6388fb6997e9e4cbbce2b6aa5976c9918_prof);

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
