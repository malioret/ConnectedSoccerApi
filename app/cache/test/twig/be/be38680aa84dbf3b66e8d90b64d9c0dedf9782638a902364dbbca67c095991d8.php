<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_343d1a7ecb719b2c5a9629d550219deec71c6aeb6440921c8121aa22627a0afa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bc7e1a48e6ee7e97b855a9fccba1f2355741485907ee96a7f34ee2e8da11a58 = $this->env->getExtension("native_profiler");
        $__internal_1bc7e1a48e6ee7e97b855a9fccba1f2355741485907ee96a7f34ee2e8da11a58->enter($__internal_1bc7e1a48e6ee7e97b855a9fccba1f2355741485907ee96a7f34ee2e8da11a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_1bc7e1a48e6ee7e97b855a9fccba1f2355741485907ee96a7f34ee2e8da11a58->leave($__internal_1bc7e1a48e6ee7e97b855a9fccba1f2355741485907ee96a7f34ee2e8da11a58_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_b8453918967f2ee44a54b45a71c49284e175ee43c0cb744e3ef0c81ccb5a0102 = $this->env->getExtension("native_profiler");
        $__internal_b8453918967f2ee44a54b45a71c49284e175ee43c0cb744e3ef0c81ccb5a0102->enter($__internal_b8453918967f2ee44a54b45a71c49284e175ee43c0cb744e3ef0c81ccb5a0102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_b8453918967f2ee44a54b45a71c49284e175ee43c0cb744e3ef0c81ccb5a0102->leave($__internal_b8453918967f2ee44a54b45a71c49284e175ee43c0cb744e3ef0c81ccb5a0102_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_b83f00f1134a039858ebb47b316782991b2852b6ee72dcf56b0569c9dd488ce6 = $this->env->getExtension("native_profiler");
        $__internal_b83f00f1134a039858ebb47b316782991b2852b6ee72dcf56b0569c9dd488ce6->enter($__internal_b83f00f1134a039858ebb47b316782991b2852b6ee72dcf56b0569c9dd488ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_b83f00f1134a039858ebb47b316782991b2852b6ee72dcf56b0569c9dd488ce6->leave($__internal_b83f00f1134a039858ebb47b316782991b2852b6ee72dcf56b0569c9dd488ce6_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_b4d660907c7ca4003e4267c87f6d761f85adcfc2c297456259a5b8d652dd2930 = $this->env->getExtension("native_profiler");
        $__internal_b4d660907c7ca4003e4267c87f6d761f85adcfc2c297456259a5b8d652dd2930->enter($__internal_b4d660907c7ca4003e4267c87f6d761f85adcfc2c297456259a5b8d652dd2930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_b4d660907c7ca4003e4267c87f6d761f85adcfc2c297456259a5b8d652dd2930->leave($__internal_b4d660907c7ca4003e4267c87f6d761f85adcfc2c297456259a5b8d652dd2930_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
