<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_3f9d89b2a660c81b36dbbd49053ae6c0c1abfe04cccc7fe2c342ad449133f1f0 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2f2f43ba1cf1501cdb4e7b6d4f3ea08553dc5bdeec38cdb698378341936c02f = $this->env->getExtension("native_profiler");
        $__internal_a2f2f43ba1cf1501cdb4e7b6d4f3ea08553dc5bdeec38cdb698378341936c02f->enter($__internal_a2f2f43ba1cf1501cdb4e7b6d4f3ea08553dc5bdeec38cdb698378341936c02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2f2f43ba1cf1501cdb4e7b6d4f3ea08553dc5bdeec38cdb698378341936c02f->leave($__internal_a2f2f43ba1cf1501cdb4e7b6d4f3ea08553dc5bdeec38cdb698378341936c02f_prof);

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
