<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_1a3497dbdc47dbab24f5473980d0ea228ac744d1904dba42e17a0bd3faebb400 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8953c0d914c5c69e19f33a48fc2bb5ec5d224f24b0b906d78fe4b2e486e5ac72 = $this->env->getExtension("native_profiler");
        $__internal_8953c0d914c5c69e19f33a48fc2bb5ec5d224f24b0b906d78fe4b2e486e5ac72->enter($__internal_8953c0d914c5c69e19f33a48fc2bb5ec5d224f24b0b906d78fe4b2e486e5ac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8953c0d914c5c69e19f33a48fc2bb5ec5d224f24b0b906d78fe4b2e486e5ac72->leave($__internal_8953c0d914c5c69e19f33a48fc2bb5ec5d224f24b0b906d78fe4b2e486e5ac72_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
