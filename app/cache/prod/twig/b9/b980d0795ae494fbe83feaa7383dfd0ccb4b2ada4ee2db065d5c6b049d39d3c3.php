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
        $__internal_70164d0f1955bbb550eabaae9450fef1a299076f73af0790470eb536ba7444f3 = $this->env->getExtension("native_profiler");
        $__internal_70164d0f1955bbb550eabaae9450fef1a299076f73af0790470eb536ba7444f3->enter($__internal_70164d0f1955bbb550eabaae9450fef1a299076f73af0790470eb536ba7444f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerLandingBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70164d0f1955bbb550eabaae9450fef1a299076f73af0790470eb536ba7444f3->leave($__internal_70164d0f1955bbb550eabaae9450fef1a299076f73af0790470eb536ba7444f3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a65fc8720c0c3f339cd158bf18dbca1a1c0cf0ab7cf01be8c84e260fd4b1f386 = $this->env->getExtension("native_profiler");
        $__internal_a65fc8720c0c3f339cd158bf18dbca1a1c0cf0ab7cf01be8c84e260fd4b1f386->enter($__internal_a65fc8720c0c3f339cd158bf18dbca1a1c0cf0ab7cf01be8c84e260fd4b1f386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title id=\"title\" data-id=\"admin\">Home Connected Soccer</title>
    ";
        
        $__internal_a65fc8720c0c3f339cd158bf18dbca1a1c0cf0ab7cf01be8c84e260fd4b1f386->leave($__internal_a65fc8720c0c3f339cd158bf18dbca1a1c0cf0ab7cf01be8c84e260fd4b1f386_prof);

    }

    // line 11
    public function block_styleheets($context, array $blocks = array())
    {
        $__internal_e6f6ba945a361edf4769a3761fa798854c12b2ea1f05ec292549c703c4506a51 = $this->env->getExtension("native_profiler");
        $__internal_e6f6ba945a361edf4769a3761fa798854c12b2ea1f05ec292549c703c4506a51->enter($__internal_e6f6ba945a361edf4769a3761fa798854c12b2ea1f05ec292549c703c4506a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "styleheets"));

        // line 12
        echo "        
      
        
    ";
        
        $__internal_e6f6ba945a361edf4769a3761fa798854c12b2ea1f05ec292549c703c4506a51->leave($__internal_e6f6ba945a361edf4769a3761fa798854c12b2ea1f05ec292549c703c4506a51_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_7a12b2de2ec484280d9df9f795114a9972f748a77ffcb6c93b88d2e8b356cc5a = $this->env->getExtension("native_profiler");
        $__internal_7a12b2de2ec484280d9df9f795114a9972f748a77ffcb6c93b88d2e8b356cc5a->enter($__internal_7a12b2de2ec484280d9df9f795114a9972f748a77ffcb6c93b88d2e8b356cc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "    
           ";
        // line 20
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:header.html.twig");
        echo "
    
    ";
        
        $__internal_7a12b2de2ec484280d9df9f795114a9972f748a77ffcb6c93b88d2e8b356cc5a->leave($__internal_7a12b2de2ec484280d9df9f795114a9972f748a77ffcb6c93b88d2e8b356cc5a_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_f555a33679e6242d3ede55cf9cec1e1a87df1eb13199fb04f9518b5e0e6e515a = $this->env->getExtension("native_profiler");
        $__internal_f555a33679e6242d3ede55cf9cec1e1a87df1eb13199fb04f9518b5e0e6e515a->enter($__internal_f555a33679e6242d3ede55cf9cec1e1a87df1eb13199fb04f9518b5e0e6e515a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "   
        
    
        ";
        // line 32
        echo twig_include($this->env, $context, "SoccerLandingBundle:Home:home.html.twig");
        echo "
    
   
        
  ";
        
        $__internal_f555a33679e6242d3ede55cf9cec1e1a87df1eb13199fb04f9518b5e0e6e515a->leave($__internal_f555a33679e6242d3ede55cf9cec1e1a87df1eb13199fb04f9518b5e0e6e515a_prof);

    }

    // line 39
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_06c0c510bdd2ef89633b63d261cc3d329d8dd025fbd2c84164fd42b209eec847 = $this->env->getExtension("native_profiler");
        $__internal_06c0c510bdd2ef89633b63d261cc3d329d8dd025fbd2c84164fd42b209eec847->enter($__internal_06c0c510bdd2ef89633b63d261cc3d329d8dd025fbd2c84164fd42b209eec847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 40
        echo "      
       <script>
        \$(document).ready(function() {
            
           
          
                
           
\t\t

        });
        
            

       </script>
       
      

  ";
        
        $__internal_06c0c510bdd2ef89633b63d261cc3d329d8dd025fbd2c84164fd42b209eec847->leave($__internal_06c0c510bdd2ef89633b63d261cc3d329d8dd025fbd2c84164fd42b209eec847_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3fe673c063cf2540a42b58c6eb73dff0663005580c6c57160359f88745236db8 = $this->env->getExtension("native_profiler");
        $__internal_3fe673c063cf2540a42b58c6eb73dff0663005580c6c57160359f88745236db8->enter($__internal_3fe673c063cf2540a42b58c6eb73dff0663005580c6c57160359f88745236db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "   ";
        echo twig_include($this->env, $context, "SoccerLandingBundle:Base:footer.html.twig");
        echo "
    ";
        
        $__internal_3fe673c063cf2540a42b58c6eb73dff0663005580c6c57160359f88745236db8->leave($__internal_3fe673c063cf2540a42b58c6eb73dff0663005580c6c57160359f88745236db8_prof);

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
