<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_8bfc90375b7b56094cb954d9d66a55ce92247a8c76a6736181f23df04446d4b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8015974a2c0848dbc31df1b7041ed745f2bcd8ba6e746de33635fde206cfe7b = $this->env->getExtension("native_profiler");
        $__internal_f8015974a2c0848dbc31df1b7041ed745f2bcd8ba6e746de33635fde206cfe7b->enter($__internal_f8015974a2c0848dbc31df1b7041ed745f2bcd8ba6e746de33635fde206cfe7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8015974a2c0848dbc31df1b7041ed745f2bcd8ba6e746de33635fde206cfe7b->leave($__internal_f8015974a2c0848dbc31df1b7041ed745f2bcd8ba6e746de33635fde206cfe7b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */
