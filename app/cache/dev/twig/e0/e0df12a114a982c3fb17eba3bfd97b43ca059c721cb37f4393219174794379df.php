<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_f25944cd486a9d8b48046b19f34beb5adb523cea701940cddc87795ae1127367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e14f12c49cb288608c07c840b9fee0628798dad9f37c225a589ab8d326492097 = $this->env->getExtension("native_profiler");
        $__internal_e14f12c49cb288608c07c840b9fee0628798dad9f37c225a589ab8d326492097->enter($__internal_e14f12c49cb288608c07c840b9fee0628798dad9f37c225a589ab8d326492097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14f12c49cb288608c07c840b9fee0628798dad9f37c225a589ab8d326492097->leave($__internal_e14f12c49cb288608c07c840b9fee0628798dad9f37c225a589ab8d326492097_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */
