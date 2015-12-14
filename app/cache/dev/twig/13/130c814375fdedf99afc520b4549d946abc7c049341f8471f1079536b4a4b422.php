<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_4342d804e8953530f1368d03a49803c3ce4f56b107a8140da2ffc6baf1f5f7b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4003f29659a51693a753f465881c9404ae9f90e3b0e59ee6d2c66727c6c565ea = $this->env->getExtension("native_profiler");
        $__internal_4003f29659a51693a753f465881c9404ae9f90e3b0e59ee6d2c66727c6c565ea->enter($__internal_4003f29659a51693a753f465881c9404ae9f90e3b0e59ee6d2c66727c6c565ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4003f29659a51693a753f465881c9404ae9f90e3b0e59ee6d2c66727c6c565ea->leave($__internal_4003f29659a51693a753f465881c9404ae9f90e3b0e59ee6d2c66727c6c565ea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61095fb5a655382198b06eacee43bb5fc8931744116174121990c4475141a840 = $this->env->getExtension("native_profiler");
        $__internal_61095fb5a655382198b06eacee43bb5fc8931744116174121990c4475141a840->enter($__internal_61095fb5a655382198b06eacee43bb5fc8931744116174121990c4475141a840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_61095fb5a655382198b06eacee43bb5fc8931744116174121990c4475141a840->leave($__internal_61095fb5a655382198b06eacee43bb5fc8931744116174121990c4475141a840_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
