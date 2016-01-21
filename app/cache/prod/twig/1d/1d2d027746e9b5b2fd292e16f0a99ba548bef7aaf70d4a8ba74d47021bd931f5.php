<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_fa5d776e17d707bfec9dc0506f26ecf1a0ed67f7b3fa0ff5bb12efca1c60062d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf7759d9626ad8cf5e986c73fc5018a474e13a315bd7119d7242a227f50250cb = $this->env->getExtension("native_profiler");
        $__internal_bf7759d9626ad8cf5e986c73fc5018a474e13a315bd7119d7242a227f50250cb->enter($__internal_bf7759d9626ad8cf5e986c73fc5018a474e13a315bd7119d7242a227f50250cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf7759d9626ad8cf5e986c73fc5018a474e13a315bd7119d7242a227f50250cb->leave($__internal_bf7759d9626ad8cf5e986c73fc5018a474e13a315bd7119d7242a227f50250cb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
