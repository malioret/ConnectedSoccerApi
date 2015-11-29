<?php

/* SoccerLandingBundle:Home:index.html.twig */
class __TwigTemplate_65b7fe6a04afb28d1734490c776a20c548c5170c858c61140762c6ca7f655979 extends Twig_Template
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
        $__internal_59ec0f4e362fc6be98cdde41d561b1773fa67e1e703e5110de124bf70b90670d = $this->env->getExtension("native_profiler");
        $__internal_59ec0f4e362fc6be98cdde41d561b1773fa67e1e703e5110de124bf70b90670d->enter($__internal_59ec0f4e362fc6be98cdde41d561b1773fa67e1e703e5110de124bf70b90670d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerLandingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ec0f4e362fc6be98cdde41d561b1773fa67e1e703e5110de124bf70b90670d->leave($__internal_59ec0f4e362fc6be98cdde41d561b1773fa67e1e703e5110de124bf70b90670d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_850a43eb2edd70a72053c8e37cb9bb9260260f4f03896684e9b91584368d5a5b = $this->env->getExtension("native_profiler");
        $__internal_850a43eb2edd70a72053c8e37cb9bb9260260f4f03896684e9b91584368d5a5b->enter($__internal_850a43eb2edd70a72053c8e37cb9bb9260260f4f03896684e9b91584368d5a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title id=\"title\" data-id=\"admin\">Home Connected Soccer</title>
    ";
        
        $__internal_850a43eb2edd70a72053c8e37cb9bb9260260f4f03896684e9b91584368d5a5b->leave($__internal_850a43eb2edd70a72053c8e37cb9bb9260260f4f03896684e9b91584368d5a5b_prof);

    }

    // line 11
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_7fc5185d29e47301238b702956f6f96ce1b0b31e04985768c9ae5226fb7189e1 = $this->env->getExtension("native_profiler");
        $__internal_7fc5185d29e47301238b702956f6f96ce1b0b31e04985768c9ae5226fb7189e1->enter($__internal_7fc5185d29e47301238b702956f6f96ce1b0b31e04985768c9ae5226fb7189e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 12
        echo "        
      
        
    ";
        
        $__internal_7fc5185d29e47301238b702956f6f96ce1b0b31e04985768c9ae5226fb7189e1->leave($__internal_7fc5185d29e47301238b702956f6f96ce1b0b31e04985768c9ae5226fb7189e1_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_e98af7bcc86a6c6d23a740de527d7b3580a3a37a558ffc1913df3c4921b88af7 = $this->env->getExtension("native_profiler");
        $__internal_e98af7bcc86a6c6d23a740de527d7b3580a3a37a558ffc1913df3c4921b88af7->enter($__internal_e98af7bcc86a6c6d23a740de527d7b3580a3a37a558ffc1913df3c4921b88af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "    
           ";
        // line 20
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:header.html.twig");
        echo "
    
    ";
        
        $__internal_e98af7bcc86a6c6d23a740de527d7b3580a3a37a558ffc1913df3c4921b88af7->leave($__internal_e98af7bcc86a6c6d23a740de527d7b3580a3a37a558ffc1913df3c4921b88af7_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d98c2d36dde53e9f821e4b969be35ec9736ac27d9d949f0a29080619646c01c = $this->env->getExtension("native_profiler");
        $__internal_8d98c2d36dde53e9f821e4b969be35ec9736ac27d9d949f0a29080619646c01c->enter($__internal_8d98c2d36dde53e9f821e4b969be35ec9736ac27d9d949f0a29080619646c01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "   
        
    
        ";
        // line 32
        echo twig_include($this->env, $context, "SoccerLandingBundle:Home:home.html.twig");
        echo "
    
   
        
  ";
        
        $__internal_8d98c2d36dde53e9f821e4b969be35ec9736ac27d9d949f0a29080619646c01c->leave($__internal_8d98c2d36dde53e9f821e4b969be35ec9736ac27d9d949f0a29080619646c01c_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2cfc05fb68cb20d27d91b4229f629635078e9f024642867dfb220e6fdbf5feec = $this->env->getExtension("native_profiler");
        $__internal_2cfc05fb68cb20d27d91b4229f629635078e9f024642867dfb220e6fdbf5feec->enter($__internal_2cfc05fb68cb20d27d91b4229f629635078e9f024642867dfb220e6fdbf5feec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "      
       <script>
        \$(document).ready(function() {
            
           
          
                
           
\t\t

        });
        
            

       </script>
       
      

  ";
        
        $__internal_2cfc05fb68cb20d27d91b4229f629635078e9f024642867dfb220e6fdbf5feec->leave($__internal_2cfc05fb68cb20d27d91b4229f629635078e9f024642867dfb220e6fdbf5feec_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7e52f4fb62db3b36c1c5782f6679e97b2efb642a31f9c105c9cdb17146b8a4cb = $this->env->getExtension("native_profiler");
        $__internal_7e52f4fb62db3b36c1c5782f6679e97b2efb642a31f9c105c9cdb17146b8a4cb->enter($__internal_7e52f4fb62db3b36c1c5782f6679e97b2efb642a31f9c105c9cdb17146b8a4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "   ";
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:footer.html.twig");
        echo "
    ";
        
        $__internal_7e52f4fb62db3b36c1c5782f6679e97b2efb642a31f9c105c9cdb17146b8a4cb->leave($__internal_7e52f4fb62db3b36c1c5782f6679e97b2efb642a31f9c105c9cdb17146b8a4cb_prof);

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
