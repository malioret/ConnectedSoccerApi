<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_08c55aa37488511d7e3bf5e91b0efac889aef631712335341414e49b2275bd50 extends Twig_Template
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
        $__internal_3b1c5ba76b2a1993a80c1a0c7aa952b7d401eb350c6834cfad05e7f67117e385 = $this->env->getExtension("native_profiler");
        $__internal_3b1c5ba76b2a1993a80c1a0c7aa952b7d401eb350c6834cfad05e7f67117e385->enter($__internal_3b1c5ba76b2a1993a80c1a0c7aa952b7d401eb350c6834cfad05e7f67117e385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b1c5ba76b2a1993a80c1a0c7aa952b7d401eb350c6834cfad05e7f67117e385->leave($__internal_3b1c5ba76b2a1993a80c1a0c7aa952b7d401eb350c6834cfad05e7f67117e385_prof);

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
