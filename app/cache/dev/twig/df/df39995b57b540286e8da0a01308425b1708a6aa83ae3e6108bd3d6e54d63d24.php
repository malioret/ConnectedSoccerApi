<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_150fc42a7e40a13d7aeea94a0d5987059cea5ba10b79d66740d3cd4bbaf0f4cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e75cce8750067efd39a4a6ea96eda0fd592bf631168775205c29f7062f2e6211 = $this->env->getExtension("native_profiler");
        $__internal_e75cce8750067efd39a4a6ea96eda0fd592bf631168775205c29f7062f2e6211->enter($__internal_e75cce8750067efd39a4a6ea96eda0fd592bf631168775205c29f7062f2e6211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e75cce8750067efd39a4a6ea96eda0fd592bf631168775205c29f7062f2e6211->leave($__internal_e75cce8750067efd39a4a6ea96eda0fd592bf631168775205c29f7062f2e6211_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
