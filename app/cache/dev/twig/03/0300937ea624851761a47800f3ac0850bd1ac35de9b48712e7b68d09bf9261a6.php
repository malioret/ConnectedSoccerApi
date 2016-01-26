<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c26ed13be06482ee6a872f454e982f103e514dea2971aabf2c6e036ad461e7c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_49e5342b1c3b53bab80e2bfa88990e9099268bbabb2adf158795a787764ccc67 = $this->env->getExtension("native_profiler");
        $__internal_49e5342b1c3b53bab80e2bfa88990e9099268bbabb2adf158795a787764ccc67->enter($__internal_49e5342b1c3b53bab80e2bfa88990e9099268bbabb2adf158795a787764ccc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e5342b1c3b53bab80e2bfa88990e9099268bbabb2adf158795a787764ccc67->leave($__internal_49e5342b1c3b53bab80e2bfa88990e9099268bbabb2adf158795a787764ccc67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ba53eed0fa8aea501821ced5955be74c4c67d000f52a7faa105c4135bbe5c01 = $this->env->getExtension("native_profiler");
        $__internal_4ba53eed0fa8aea501821ced5955be74c4c67d000f52a7faa105c4135bbe5c01->enter($__internal_4ba53eed0fa8aea501821ced5955be74c4c67d000f52a7faa105c4135bbe5c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4ba53eed0fa8aea501821ced5955be74c4c67d000f52a7faa105c4135bbe5c01->leave($__internal_4ba53eed0fa8aea501821ced5955be74c4c67d000f52a7faa105c4135bbe5c01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
