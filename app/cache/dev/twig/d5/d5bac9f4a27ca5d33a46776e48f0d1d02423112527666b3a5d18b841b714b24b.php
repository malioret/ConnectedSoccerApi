<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_45380c3c6f3a41b86ebb887492fc16aaa401e2a7456aab338bf6b8072ddf1cca extends Twig_Template
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
        $__internal_35aef0107a4bb1b6ccc47c369893e91c6e2439628a1792e9f695b9b82fb15de8 = $this->env->getExtension("native_profiler");
        $__internal_35aef0107a4bb1b6ccc47c369893e91c6e2439628a1792e9f695b9b82fb15de8->enter($__internal_35aef0107a4bb1b6ccc47c369893e91c6e2439628a1792e9f695b9b82fb15de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35aef0107a4bb1b6ccc47c369893e91c6e2439628a1792e9f695b9b82fb15de8->leave($__internal_35aef0107a4bb1b6ccc47c369893e91c6e2439628a1792e9f695b9b82fb15de8_prof);

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
