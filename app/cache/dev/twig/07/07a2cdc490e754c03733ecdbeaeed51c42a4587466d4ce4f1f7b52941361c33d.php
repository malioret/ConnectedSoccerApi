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
        $__internal_6e26b8d06ece105d48b8ebc3ad2833ad7fb099224834c00724ab987cdc5ead05 = $this->env->getExtension("native_profiler");
        $__internal_6e26b8d06ece105d48b8ebc3ad2833ad7fb099224834c00724ab987cdc5ead05->enter($__internal_6e26b8d06ece105d48b8ebc3ad2833ad7fb099224834c00724ab987cdc5ead05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_6e26b8d06ece105d48b8ebc3ad2833ad7fb099224834c00724ab987cdc5ead05->leave($__internal_6e26b8d06ece105d48b8ebc3ad2833ad7fb099224834c00724ab987cdc5ead05_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b7dad47cfbfc7b76faa7c78d14fdabe5c795034fce8af68aeb43741baeb9a450 = $this->env->getExtension("native_profiler");
        $__internal_b7dad47cfbfc7b76faa7c78d14fdabe5c795034fce8af68aeb43741baeb9a450->enter($__internal_b7dad47cfbfc7b76faa7c78d14fdabe5c795034fce8af68aeb43741baeb9a450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_b7dad47cfbfc7b76faa7c78d14fdabe5c795034fce8af68aeb43741baeb9a450->leave($__internal_b7dad47cfbfc7b76faa7c78d14fdabe5c795034fce8af68aeb43741baeb9a450_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_9aad2515bf9d7221e7ddc84a3cdf9d96df12e98988bf1b52016a27ead7f74579 = $this->env->getExtension("native_profiler");
        $__internal_9aad2515bf9d7221e7ddc84a3cdf9d96df12e98988bf1b52016a27ead7f74579->enter($__internal_9aad2515bf9d7221e7ddc84a3cdf9d96df12e98988bf1b52016a27ead7f74579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_9aad2515bf9d7221e7ddc84a3cdf9d96df12e98988bf1b52016a27ead7f74579->leave($__internal_9aad2515bf9d7221e7ddc84a3cdf9d96df12e98988bf1b52016a27ead7f74579_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_0cb9b2ee82c49c03b1fb71ce27cf352edf9bb4fdfb78e7e4cda211c2819cf1bd = $this->env->getExtension("native_profiler");
        $__internal_0cb9b2ee82c49c03b1fb71ce27cf352edf9bb4fdfb78e7e4cda211c2819cf1bd->enter($__internal_0cb9b2ee82c49c03b1fb71ce27cf352edf9bb4fdfb78e7e4cda211c2819cf1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_0cb9b2ee82c49c03b1fb71ce27cf352edf9bb4fdfb78e7e4cda211c2819cf1bd->leave($__internal_0cb9b2ee82c49c03b1fb71ce27cf352edf9bb4fdfb78e7e4cda211c2819cf1bd_prof);

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
