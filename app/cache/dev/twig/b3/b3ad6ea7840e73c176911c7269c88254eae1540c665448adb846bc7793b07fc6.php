<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_58d03113013ec38ce6b1054c4ef0bf3f1fa8cd68edbb400ab6639f312ae8106b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_60640ef2a30694a870bb936245f7a463f83ddae7f62181ed51427f36508a71b2 = $this->env->getExtension("native_profiler");
        $__internal_60640ef2a30694a870bb936245f7a463f83ddae7f62181ed51427f36508a71b2->enter($__internal_60640ef2a30694a870bb936245f7a463f83ddae7f62181ed51427f36508a71b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60640ef2a30694a870bb936245f7a463f83ddae7f62181ed51427f36508a71b2->leave($__internal_60640ef2a30694a870bb936245f7a463f83ddae7f62181ed51427f36508a71b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f6f4164b52b840b29fbd07e45be86e5193f059aeaf6f464feeeac3b3ccd55b8 = $this->env->getExtension("native_profiler");
        $__internal_3f6f4164b52b840b29fbd07e45be86e5193f059aeaf6f464feeeac3b3ccd55b8->enter($__internal_3f6f4164b52b840b29fbd07e45be86e5193f059aeaf6f464feeeac3b3ccd55b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_3f6f4164b52b840b29fbd07e45be86e5193f059aeaf6f464feeeac3b3ccd55b8->leave($__internal_3f6f4164b52b840b29fbd07e45be86e5193f059aeaf6f464feeeac3b3ccd55b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
