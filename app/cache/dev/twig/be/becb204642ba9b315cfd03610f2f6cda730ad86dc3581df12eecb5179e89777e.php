<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_e3da8a0d581d73ecf0eb14e82f4b712f36eb117b6f4eec25f3e4d76a31556c99 extends Twig_Template
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
        $__internal_2723ef6972d767bdf5e40d32f6f666104e31091375eed052c67adf21b7730767 = $this->env->getExtension("native_profiler");
        $__internal_2723ef6972d767bdf5e40d32f6f666104e31091375eed052c67adf21b7730767->enter($__internal_2723ef6972d767bdf5e40d32f6f666104e31091375eed052c67adf21b7730767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2723ef6972d767bdf5e40d32f6f666104e31091375eed052c67adf21b7730767->leave($__internal_2723ef6972d767bdf5e40d32f6f666104e31091375eed052c67adf21b7730767_prof);

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
