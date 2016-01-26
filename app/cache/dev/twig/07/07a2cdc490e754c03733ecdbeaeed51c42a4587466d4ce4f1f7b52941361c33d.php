<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_3e8342fc74056f389904802d1ed7aeb87aa53f6d9a3fc180e05fbe07f62aae56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f5cff9909f60fd8a93ade0befa410752653e0256efaf67f30b85f8181f5efbe = $this->env->getExtension("native_profiler");
        $__internal_4f5cff9909f60fd8a93ade0befa410752653e0256efaf67f30b85f8181f5efbe->enter($__internal_4f5cff9909f60fd8a93ade0befa410752653e0256efaf67f30b85f8181f5efbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_4f5cff9909f60fd8a93ade0befa410752653e0256efaf67f30b85f8181f5efbe->leave($__internal_4f5cff9909f60fd8a93ade0befa410752653e0256efaf67f30b85f8181f5efbe_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_86a04114f27fcdb9c3092cfdfb4fdad9e7e43870093e21ab11c3555e0be7f07d = $this->env->getExtension("native_profiler");
        $__internal_86a04114f27fcdb9c3092cfdfb4fdad9e7e43870093e21ab11c3555e0be7f07d->enter($__internal_86a04114f27fcdb9c3092cfdfb4fdad9e7e43870093e21ab11c3555e0be7f07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_86a04114f27fcdb9c3092cfdfb4fdad9e7e43870093e21ab11c3555e0be7f07d->leave($__internal_86a04114f27fcdb9c3092cfdfb4fdad9e7e43870093e21ab11c3555e0be7f07d_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_9c1632722480df7d86ccda37ba56ed9060e940d5529bf1f3bab09af16ea388f3 = $this->env->getExtension("native_profiler");
        $__internal_9c1632722480df7d86ccda37ba56ed9060e940d5529bf1f3bab09af16ea388f3->enter($__internal_9c1632722480df7d86ccda37ba56ed9060e940d5529bf1f3bab09af16ea388f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_9c1632722480df7d86ccda37ba56ed9060e940d5529bf1f3bab09af16ea388f3->leave($__internal_9c1632722480df7d86ccda37ba56ed9060e940d5529bf1f3bab09af16ea388f3_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_3596a88858bfc6846acc96218c887e980fd0f5cfaa9f3e644e9680ae7b811447 = $this->env->getExtension("native_profiler");
        $__internal_3596a88858bfc6846acc96218c887e980fd0f5cfaa9f3e644e9680ae7b811447->enter($__internal_3596a88858bfc6846acc96218c887e980fd0f5cfaa9f3e644e9680ae7b811447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_3596a88858bfc6846acc96218c887e980fd0f5cfaa9f3e644e9680ae7b811447->leave($__internal_3596a88858bfc6846acc96218c887e980fd0f5cfaa9f3e644e9680ae7b811447_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
