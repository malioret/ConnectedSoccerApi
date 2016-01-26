<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fae58d95a4b4f98300676c490138b3e97ba5e06e3dd3174879719e48938733d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_5d0a0aa9c2ac4ca98547fbfe31a9d0952e2c7d566ecff2f4d832082b07442e1a = $this->env->getExtension("native_profiler");
        $__internal_5d0a0aa9c2ac4ca98547fbfe31a9d0952e2c7d566ecff2f4d832082b07442e1a->enter($__internal_5d0a0aa9c2ac4ca98547fbfe31a9d0952e2c7d566ecff2f4d832082b07442e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d0a0aa9c2ac4ca98547fbfe31a9d0952e2c7d566ecff2f4d832082b07442e1a->leave($__internal_5d0a0aa9c2ac4ca98547fbfe31a9d0952e2c7d566ecff2f4d832082b07442e1a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd4039a70a9780438cbb82cf63ded3b1481c97f2d031d1c58764ac697cd002e6 = $this->env->getExtension("native_profiler");
        $__internal_cd4039a70a9780438cbb82cf63ded3b1481c97f2d031d1c58764ac697cd002e6->enter($__internal_cd4039a70a9780438cbb82cf63ded3b1481c97f2d031d1c58764ac697cd002e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_cd4039a70a9780438cbb82cf63ded3b1481c97f2d031d1c58764ac697cd002e6->leave($__internal_cd4039a70a9780438cbb82cf63ded3b1481c97f2d031d1c58764ac697cd002e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
