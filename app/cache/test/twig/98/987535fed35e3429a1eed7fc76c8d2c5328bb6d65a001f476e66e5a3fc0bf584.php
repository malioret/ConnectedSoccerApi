<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_75c24075d98f3fb61f814372fd3369f11f4a130f700be145ad523ff2f9d829d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b8caf3c547b688aa4f60dafa27bfa96d0eb032bb6567b1d0a678d4b651b9793 = $this->env->getExtension("native_profiler");
        $__internal_2b8caf3c547b688aa4f60dafa27bfa96d0eb032bb6567b1d0a678d4b651b9793->enter($__internal_2b8caf3c547b688aa4f60dafa27bfa96d0eb032bb6567b1d0a678d4b651b9793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8caf3c547b688aa4f60dafa27bfa96d0eb032bb6567b1d0a678d4b651b9793->leave($__internal_2b8caf3c547b688aa4f60dafa27bfa96d0eb032bb6567b1d0a678d4b651b9793_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46c02e27962df7229c1516516af81d268d47de01bde65d675dd46bb7062b006a = $this->env->getExtension("native_profiler");
        $__internal_46c02e27962df7229c1516516af81d268d47de01bde65d675dd46bb7062b006a->enter($__internal_46c02e27962df7229c1516516af81d268d47de01bde65d675dd46bb7062b006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_46c02e27962df7229c1516516af81d268d47de01bde65d675dd46bb7062b006a->leave($__internal_46c02e27962df7229c1516516af81d268d47de01bde65d675dd46bb7062b006a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
