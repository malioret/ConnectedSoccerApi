<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_cc4ddedb125c578ce925932b03a65e6446f68636944198bab51b59bc42a736f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bcdae8b6dcc3abd24bdef2b89dc842cbbed3b0ab66a04b618ce953408ef6d3a = $this->env->getExtension("native_profiler");
        $__internal_5bcdae8b6dcc3abd24bdef2b89dc842cbbed3b0ab66a04b618ce953408ef6d3a->enter($__internal_5bcdae8b6dcc3abd24bdef2b89dc842cbbed3b0ab66a04b618ce953408ef6d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_5bcdae8b6dcc3abd24bdef2b89dc842cbbed3b0ab66a04b618ce953408ef6d3a->leave($__internal_5bcdae8b6dcc3abd24bdef2b89dc842cbbed3b0ab66a04b618ce953408ef6d3a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp | date }}*/
/* */
