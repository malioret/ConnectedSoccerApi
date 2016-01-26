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
        $__internal_37d192fec65b2a0ac568cfe4cf5cfdbc2e22536dd14d6f61123c1ade6b1c38fe = $this->env->getExtension("native_profiler");
        $__internal_37d192fec65b2a0ac568cfe4cf5cfdbc2e22536dd14d6f61123c1ade6b1c38fe->enter($__internal_37d192fec65b2a0ac568cfe4cf5cfdbc2e22536dd14d6f61123c1ade6b1c38fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37d192fec65b2a0ac568cfe4cf5cfdbc2e22536dd14d6f61123c1ade6b1c38fe->leave($__internal_37d192fec65b2a0ac568cfe4cf5cfdbc2e22536dd14d6f61123c1ade6b1c38fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67d02606708dd105295fbf979c96569c9c1afe17c3d0d91697fdfcc2b039b968 = $this->env->getExtension("native_profiler");
        $__internal_67d02606708dd105295fbf979c96569c9c1afe17c3d0d91697fdfcc2b039b968->enter($__internal_67d02606708dd105295fbf979c96569c9c1afe17c3d0d91697fdfcc2b039b968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_67d02606708dd105295fbf979c96569c9c1afe17c3d0d91697fdfcc2b039b968->leave($__internal_67d02606708dd105295fbf979c96569c9c1afe17c3d0d91697fdfcc2b039b968_prof);

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
