<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_9442a5ddeacb242105d2aee0d4ce4e60f867767ba1d0bb1b77f1bd91f8e7b5a2 extends Twig_Template
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
        $__internal_9b5bc0abc59f48324038188c13b698b6f1750f2491a02933ffb3eaa03a565e48 = $this->env->getExtension("native_profiler");
        $__internal_9b5bc0abc59f48324038188c13b698b6f1750f2491a02933ffb3eaa03a565e48->enter($__internal_9b5bc0abc59f48324038188c13b698b6f1750f2491a02933ffb3eaa03a565e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b5bc0abc59f48324038188c13b698b6f1750f2491a02933ffb3eaa03a565e48->leave($__internal_9b5bc0abc59f48324038188c13b698b6f1750f2491a02933ffb3eaa03a565e48_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_019b392c1850f8dd8f78d29d5ef54f4c02488dd4ed9d79df751b18a2fc36743c = $this->env->getExtension("native_profiler");
        $__internal_019b392c1850f8dd8f78d29d5ef54f4c02488dd4ed9d79df751b18a2fc36743c->enter($__internal_019b392c1850f8dd8f78d29d5ef54f4c02488dd4ed9d79df751b18a2fc36743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_019b392c1850f8dd8f78d29d5ef54f4c02488dd4ed9d79df751b18a2fc36743c->leave($__internal_019b392c1850f8dd8f78d29d5ef54f4c02488dd4ed9d79df751b18a2fc36743c_prof);

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
