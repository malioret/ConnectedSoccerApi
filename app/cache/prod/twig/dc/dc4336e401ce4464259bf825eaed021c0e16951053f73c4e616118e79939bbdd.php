<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_f979765aef37da330112f598669bd597899bc720e1ade162272e9a969b3e6ae9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9eedb9bdc88733d154b7028af14daef5796de3c656526dd7d621683631f7aeda = $this->env->getExtension("native_profiler");
        $__internal_9eedb9bdc88733d154b7028af14daef5796de3c656526dd7d621683631f7aeda->enter($__internal_9eedb9bdc88733d154b7028af14daef5796de3c656526dd7d621683631f7aeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eedb9bdc88733d154b7028af14daef5796de3c656526dd7d621683631f7aeda->leave($__internal_9eedb9bdc88733d154b7028af14daef5796de3c656526dd7d621683631f7aeda_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
