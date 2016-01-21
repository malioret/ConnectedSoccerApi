<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_cc96824f54838da3e623c785f51759e1e432171ec67762852ff8dc04dee224ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4321457461fa7e0648bfa7887ca2caea0e61a9a5ed420d45743264e3a179bca = $this->env->getExtension("native_profiler");
        $__internal_a4321457461fa7e0648bfa7887ca2caea0e61a9a5ed420d45743264e3a179bca->enter($__internal_a4321457461fa7e0648bfa7887ca2caea0e61a9a5ed420d45743264e3a179bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4321457461fa7e0648bfa7887ca2caea0e61a9a5ed420d45743264e3a179bca->leave($__internal_a4321457461fa7e0648bfa7887ca2caea0e61a9a5ed420d45743264e3a179bca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
