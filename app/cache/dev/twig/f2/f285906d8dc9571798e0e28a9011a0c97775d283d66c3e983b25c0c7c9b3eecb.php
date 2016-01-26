<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_05debff27276b071a76e4f9b19b3d3a41a7101654fe08c72d6bada3024922cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a172bd02b7db9462d8d23fba021e5c671dff9aee6de52d4c3b2a00d14f541273 = $this->env->getExtension("native_profiler");
        $__internal_a172bd02b7db9462d8d23fba021e5c671dff9aee6de52d4c3b2a00d14f541273->enter($__internal_a172bd02b7db9462d8d23fba021e5c671dff9aee6de52d4c3b2a00d14f541273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_a172bd02b7db9462d8d23fba021e5c671dff9aee6de52d4c3b2a00d14f541273->leave($__internal_a172bd02b7db9462d8d23fba021e5c671dff9aee6de52d4c3b2a00d14f541273_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_75ac476124c3a47050609827f537615847b73723b5afaff205a6cf3be4f41f10 = $this->env->getExtension("native_profiler");
        $__internal_75ac476124c3a47050609827f537615847b73723b5afaff205a6cf3be4f41f10->enter($__internal_75ac476124c3a47050609827f537615847b73723b5afaff205a6cf3be4f41f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_75ac476124c3a47050609827f537615847b73723b5afaff205a6cf3be4f41f10->leave($__internal_75ac476124c3a47050609827f537615847b73723b5afaff205a6cf3be4f41f10_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_4acf0b0a03404d69c85126f38e0090364d889ab49f3a4f21ee26fafd05ae0185 = $this->env->getExtension("native_profiler");
        $__internal_4acf0b0a03404d69c85126f38e0090364d889ab49f3a4f21ee26fafd05ae0185->enter($__internal_4acf0b0a03404d69c85126f38e0090364d889ab49f3a4f21ee26fafd05ae0185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_4acf0b0a03404d69c85126f38e0090364d889ab49f3a4f21ee26fafd05ae0185->leave($__internal_4acf0b0a03404d69c85126f38e0090364d889ab49f3a4f21ee26fafd05ae0185_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_7eca309f76e6fbf501472ce30689e561e18868e5f51b7811120d3575f069b42e = $this->env->getExtension("native_profiler");
        $__internal_7eca309f76e6fbf501472ce30689e561e18868e5f51b7811120d3575f069b42e->enter($__internal_7eca309f76e6fbf501472ce30689e561e18868e5f51b7811120d3575f069b42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_7eca309f76e6fbf501472ce30689e561e18868e5f51b7811120d3575f069b42e->leave($__internal_7eca309f76e6fbf501472ce30689e561e18868e5f51b7811120d3575f069b42e_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_f02b110e6edf2fc3aebf9d5a87354a0d1a57c96425e32c10f501b44845a7172f = $this->env->getExtension("native_profiler");
        $__internal_f02b110e6edf2fc3aebf9d5a87354a0d1a57c96425e32c10f501b44845a7172f->enter($__internal_f02b110e6edf2fc3aebf9d5a87354a0d1a57c96425e32c10f501b44845a7172f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_f02b110e6edf2fc3aebf9d5a87354a0d1a57c96425e32c10f501b44845a7172f->leave($__internal_f02b110e6edf2fc3aebf9d5a87354a0d1a57c96425e32c10f501b44845a7172f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  123 => 26,  111 => 23,  104 => 19,  98 => 17,  92 => 15,  89 => 14,  83 => 13,  72 => 31,  70 => 30,  66 => 28,  60 => 26,  58 => 25,  55 => 24,  53 => 23,  42 => 21,  39 => 20,  37 => 13,  29 => 12,  26 => 11,);
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
/* <div class="form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}" id="sonata-ba-field-container-{{ field_element.vars.id }}">*/
/*     {% block label %}*/
/*         {% if field_description.options.name is defined %}*/
/*             {{ form_label(field_element, field_description.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(field_element) }}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     <div class="col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/* */
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/* */
/*         {% if field_description.help %}*/
/*             <span class="help-block">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>*/
/*         {% endif %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
