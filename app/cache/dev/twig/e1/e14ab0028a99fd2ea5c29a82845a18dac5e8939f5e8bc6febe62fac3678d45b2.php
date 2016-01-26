<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_3359c9c8269115ca35bd3e8589f2c59ddd54211f3f5d4d8a7752239613fed548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 12);
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
        $__internal_287802847bf2a8d5a2b225d6e31180150ba725deb919567d8ef8f0cde5a580de = $this->env->getExtension("native_profiler");
        $__internal_287802847bf2a8d5a2b225d6e31180150ba725deb919567d8ef8f0cde5a580de->enter($__internal_287802847bf2a8d5a2b225d6e31180150ba725deb919567d8ef8f0cde5a580de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_287802847bf2a8d5a2b225d6e31180150ba725deb919567d8ef8f0cde5a580de->leave($__internal_287802847bf2a8d5a2b225d6e31180150ba725deb919567d8ef8f0cde5a580de_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5f18c6114f043634e25d8d879a25be3884c7aec38bfbcd9eb9a6818e90e42a02 = $this->env->getExtension("native_profiler");
        $__internal_5f18c6114f043634e25d8d879a25be3884c7aec38bfbcd9eb9a6818e90e42a02->enter($__internal_5f18c6114f043634e25d8d879a25be3884c7aec38bfbcd9eb9a6818e90e42a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo $context["val"];
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5f18c6114f043634e25d8d879a25be3884c7aec38bfbcd9eb9a6818e90e42a02->leave($__internal_5f18c6114f043634e25d8d879a25be3884c7aec38bfbcd9eb9a6818e90e42a02_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  56 => 19,  48 => 17,  45 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% block field%}*/
/*     {% for key, val in value %}*/
/*         {% if field_description.options.safe %}*/
/*             [{{ key }} => {{ val|raw }}]*/
/*         {% else %}*/
/*             [{{ key }} => {{ val }}]*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
