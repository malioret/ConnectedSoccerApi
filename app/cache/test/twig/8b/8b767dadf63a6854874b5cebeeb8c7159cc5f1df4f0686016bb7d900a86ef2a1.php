<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_23e06eade03daf00201c9f122963c160f72768b53f488b2cdd09ea0cc1604e19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6d0d89a5adde10c61f28aa34a26f1ba26f34a2a43bd07f4ec6c1d36076c4d66 = $this->env->getExtension("native_profiler");
        $__internal_c6d0d89a5adde10c61f28aa34a26f1ba26f34a2a43bd07f4ec6c1d36076c4d66->enter($__internal_c6d0d89a5adde10c61f28aa34a26f1ba26f34a2a43bd07f4ec6c1d36076c4d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d0d89a5adde10c61f28aa34a26f1ba26f34a2a43bd07f4ec6c1d36076c4d66->leave($__internal_c6d0d89a5adde10c61f28aa34a26f1ba26f34a2a43bd07f4ec6c1d36076c4d66_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_756eceb26c24fd20ee3d0a464a37620e2a7e4df9d1062ba4d556b071ef33253b = $this->env->getExtension("native_profiler");
        $__internal_756eceb26c24fd20ee3d0a464a37620e2a7e4df9d1062ba4d556b071ef33253b->enter($__internal_756eceb26c24fd20ee3d0a464a37620e2a7e4df9d1062ba4d556b071ef33253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_756eceb26c24fd20ee3d0a464a37620e2a7e4df9d1062ba4d556b071ef33253b->leave($__internal_756eceb26c24fd20ee3d0a464a37620e2a7e4df9d1062ba4d556b071ef33253b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
