<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_ad56fb306a5afbc6eaba30fabf28ef36a5b6df64e13df415fa06e3554a054530 extends Twig_Template
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
        $__internal_a2f69b6fc4d52a4b3ee43cef06f65115ee7e643f315dd236b1d20bfb78635d35 = $this->env->getExtension("native_profiler");
        $__internal_a2f69b6fc4d52a4b3ee43cef06f65115ee7e643f315dd236b1d20bfb78635d35->enter($__internal_a2f69b6fc4d52a4b3ee43cef06f65115ee7e643f315dd236b1d20bfb78635d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f69b6fc4d52a4b3ee43cef06f65115ee7e643f315dd236b1d20bfb78635d35->leave($__internal_a2f69b6fc4d52a4b3ee43cef06f65115ee7e643f315dd236b1d20bfb78635d35_prof);

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
