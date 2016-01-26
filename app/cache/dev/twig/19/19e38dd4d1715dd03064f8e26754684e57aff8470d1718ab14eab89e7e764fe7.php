<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_cfed57c5e55aee2c098413e8be0abc685fa15c529f62d9dfb228d3eafcda03d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_584fd9044611ce8df9a7e2298dccdab8ebcf1b1867add6b5306992e3fb05eeb3 = $this->env->getExtension("native_profiler");
        $__internal_584fd9044611ce8df9a7e2298dccdab8ebcf1b1867add6b5306992e3fb05eeb3->enter($__internal_584fd9044611ce8df9a7e2298dccdab8ebcf1b1867add6b5306992e3fb05eeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_584fd9044611ce8df9a7e2298dccdab8ebcf1b1867add6b5306992e3fb05eeb3->leave($__internal_584fd9044611ce8df9a7e2298dccdab8ebcf1b1867add6b5306992e3fb05eeb3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_653324bc5c58e4293a2d1de784420b1c494f784f43312cca3c7e48c4e006e53f = $this->env->getExtension("native_profiler");
        $__internal_653324bc5c58e4293a2d1de784420b1c494f784f43312cca3c7e48c4e006e53f->enter($__internal_653324bc5c58e4293a2d1de784420b1c494f784f43312cca3c7e48c4e006e53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_653324bc5c58e4293a2d1de784420b1c494f784f43312cca3c7e48c4e006e53f->leave($__internal_653324bc5c58e4293a2d1de784420b1c494f784f43312cca3c7e48c4e006e53f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
