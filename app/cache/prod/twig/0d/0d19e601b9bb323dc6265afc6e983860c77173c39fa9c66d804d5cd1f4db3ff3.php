<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_688ddfed013aeda756f29762ea700fd3e6e39dbce4994a5a7486fb3831cf4954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e66bc970de4ae850a71dbaadf986eaf660eb52773c57aa43159f03db989fb1b = $this->env->getExtension("native_profiler");
        $__internal_0e66bc970de4ae850a71dbaadf986eaf660eb52773c57aa43159f03db989fb1b->enter($__internal_0e66bc970de4ae850a71dbaadf986eaf660eb52773c57aa43159f03db989fb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e66bc970de4ae850a71dbaadf986eaf660eb52773c57aa43159f03db989fb1b->leave($__internal_0e66bc970de4ae850a71dbaadf986eaf660eb52773c57aa43159f03db989fb1b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */