<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_a15bfbbbc8b1971dd2719b71ddd3c5421ca64688f4f01c82576a4f3084bb5777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c9a0601954b481626190fea0dd643470099ef3d65059a38aa812280fc2d05c = $this->env->getExtension("native_profiler");
        $__internal_a0c9a0601954b481626190fea0dd643470099ef3d65059a38aa812280fc2d05c->enter($__internal_a0c9a0601954b481626190fea0dd643470099ef3d65059a38aa812280fc2d05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c9a0601954b481626190fea0dd643470099ef3d65059a38aa812280fc2d05c->leave($__internal_a0c9a0601954b481626190fea0dd643470099ef3d65059a38aa812280fc2d05c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */
