<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_74198ee53af5c05809a8ff5da44560481bbb115b90adf7635341b4dfc118131d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_14a4a2b086cadf7f74443ec4e1df82586defdc4e7da83ac1c80f4fe98b54eb16 = $this->env->getExtension("native_profiler");
        $__internal_14a4a2b086cadf7f74443ec4e1df82586defdc4e7da83ac1c80f4fe98b54eb16->enter($__internal_14a4a2b086cadf7f74443ec4e1df82586defdc4e7da83ac1c80f4fe98b54eb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a4a2b086cadf7f74443ec4e1df82586defdc4e7da83ac1c80f4fe98b54eb16->leave($__internal_14a4a2b086cadf7f74443ec4e1df82586defdc4e7da83ac1c80f4fe98b54eb16_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea22bceab7e855effcbfeb9a8a20df14ce9e5bb0b0fbf3bc5a7749ac41cc627c = $this->env->getExtension("native_profiler");
        $__internal_ea22bceab7e855effcbfeb9a8a20df14ce9e5bb0b0fbf3bc5a7749ac41cc627c->enter($__internal_ea22bceab7e855effcbfeb9a8a20df14ce9e5bb0b0fbf3bc5a7749ac41cc627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ea22bceab7e855effcbfeb9a8a20df14ce9e5bb0b0fbf3bc5a7749ac41cc627c->leave($__internal_ea22bceab7e855effcbfeb9a8a20df14ce9e5bb0b0fbf3bc5a7749ac41cc627c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
