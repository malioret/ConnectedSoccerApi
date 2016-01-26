<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_6ae35ef990d67b6fae7643e39922a4f650eda37a1687c2ac886a7004f871bab4 extends Twig_Template
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
        $__internal_23f73749d5c9a89cbe26f938e00256ad33bf404ef7edee8f6061c7b613f8a5cf = $this->env->getExtension("native_profiler");
        $__internal_23f73749d5c9a89cbe26f938e00256ad33bf404ef7edee8f6061c7b613f8a5cf->enter($__internal_23f73749d5c9a89cbe26f938e00256ad33bf404ef7edee8f6061c7b613f8a5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23f73749d5c9a89cbe26f938e00256ad33bf404ef7edee8f6061c7b613f8a5cf->leave($__internal_23f73749d5c9a89cbe26f938e00256ad33bf404ef7edee8f6061c7b613f8a5cf_prof);

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
