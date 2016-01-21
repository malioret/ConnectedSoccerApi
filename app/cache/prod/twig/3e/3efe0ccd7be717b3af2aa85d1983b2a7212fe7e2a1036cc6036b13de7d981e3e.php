<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_c8f475f2939cd69cbb17d246ee66caab4bd2c55bb53d86dfa1490516e58f56e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9017890be2a6b5fa94544a861d3a7d6b79b19aa51d7ce1927fe400e8b1c434c = $this->env->getExtension("native_profiler");
        $__internal_e9017890be2a6b5fa94544a861d3a7d6b79b19aa51d7ce1927fe400e8b1c434c->enter($__internal_e9017890be2a6b5fa94544a861d3a7d6b79b19aa51d7ce1927fe400e8b1c434c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9017890be2a6b5fa94544a861d3a7d6b79b19aa51d7ce1927fe400e8b1c434c->leave($__internal_e9017890be2a6b5fa94544a861d3a7d6b79b19aa51d7ce1927fe400e8b1c434c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
