<?php

/* SonataAdminBundle:CRUD:list_html.html.twig */
class __TwigTemplate_cf0f878c152a9b0ff16092281afef7e9cfbcd06e133d6300ca60971a91fac1a9 extends Twig_Template
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
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a25dea943c6bbe51d6df51d6a17e6515851e04bc546baee84841cf920fcb8d0 = $this->env->getExtension("native_profiler");
        $__internal_5a25dea943c6bbe51d6df51d6a17e6515851e04bc546baee84841cf920fcb8d0->enter($__internal_5a25dea943c6bbe51d6df51d6a17e6515851e04bc546baee84841cf920fcb8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a25dea943c6bbe51d6df51d6a17e6515851e04bc546baee84841cf920fcb8d0->leave($__internal_5a25dea943c6bbe51d6df51d6a17e6515851e04bc546baee84841cf920fcb8d0_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_1e611c399de5c8feb12f892f9d1527cbe78a2a10eb1faafebe6e7f6d762533ec = $this->env->getExtension("native_profiler");
        $__internal_1e611c399de5c8feb12f892f9d1527cbe78a2a10eb1faafebe6e7f6d762533ec->enter($__internal_1e611c399de5c8feb12f892f9d1527cbe78a2a10eb1faafebe6e7f6d762533ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), (isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")), (isset($context["preserve"]) ? $context["preserve"] : $this->getContext($context, "preserve")), (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                }
                // line 17
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_1e611c399de5c8feb12f892f9d1527cbe78a2a10eb1faafebe6e7f6d762533ec->leave($__internal_1e611c399de5c8feb12f892f9d1527cbe78a2a10eb1faafebe6e7f6d762533ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 17,  64 => 15,  62 => 14,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  47 => 8,  45 => 7,  41 => 5,  39 => 4,  33 => 3,  18 => 1,);
    }
}
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {% else %}*/
/*         {%- if field_description.options.truncate is defined -%}*/
/*             {% set truncate = field_description.options.truncate %}*/
/*             {% set length = truncate.length|default(30) %}*/
/*             {% set preserve = truncate.preserve|default(false) %}*/
/*             {% set separator = truncate.separator|default('...') %}*/
/*             {{ value|striptags|truncate(length, preserve, separator)|raw }}*/
/*         {%- else -%}*/
/*             {%- if field_description.options.strip is defined -%}*/
/*                 {% set value = value|striptags %}*/
/*             {%- endif -%}*/
/*             {{ value|raw }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
