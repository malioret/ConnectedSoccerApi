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
        $__internal_dd2499079ed5446e7bb4fdaf29e33c17b369f2ef094de52e4e712074e0045914 = $this->env->getExtension("native_profiler");
        $__internal_dd2499079ed5446e7bb4fdaf29e33c17b369f2ef094de52e4e712074e0045914->enter($__internal_dd2499079ed5446e7bb4fdaf29e33c17b369f2ef094de52e4e712074e0045914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd2499079ed5446e7bb4fdaf29e33c17b369f2ef094de52e4e712074e0045914->leave($__internal_dd2499079ed5446e7bb4fdaf29e33c17b369f2ef094de52e4e712074e0045914_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_220af8288b5f8e740b450509296281a9c6211c12cc89a3dac1ea807421a24d57 = $this->env->getExtension("native_profiler");
        $__internal_220af8288b5f8e740b450509296281a9c6211c12cc89a3dac1ea807421a24d57->enter($__internal_220af8288b5f8e740b450509296281a9c6211c12cc89a3dac1ea807421a24d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_220af8288b5f8e740b450509296281a9c6211c12cc89a3dac1ea807421a24d57->leave($__internal_220af8288b5f8e740b450509296281a9c6211c12cc89a3dac1ea807421a24d57_prof);

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
