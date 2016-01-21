<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_9d11b127d7ad2a389a8b81f99e9e67cb5d90ec55001c9df1ba4b6a0b547c2413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e05406f645a29dbe967b32587a726a8eca645e2ec916a68378f0bcbd7de5669b = $this->env->getExtension("native_profiler");
        $__internal_e05406f645a29dbe967b32587a726a8eca645e2ec916a68378f0bcbd7de5669b->enter($__internal_e05406f645a29dbe967b32587a726a8eca645e2ec916a68378f0bcbd7de5669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e05406f645a29dbe967b32587a726a8eca645e2ec916a68378f0bcbd7de5669b->leave($__internal_e05406f645a29dbe967b32587a726a8eca645e2ec916a68378f0bcbd7de5669b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
