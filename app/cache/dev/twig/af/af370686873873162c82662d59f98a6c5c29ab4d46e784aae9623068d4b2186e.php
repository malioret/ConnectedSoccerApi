<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_5637156000396eea06f60803488dca212d3da85c7c7fde2098d8087d908c5043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle:Configurator:form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b81b6f1c571d0e39b3052177c83a2d4a9412c9a487f3a20fb370a6acd36b00b = $this->env->getExtension("native_profiler");
        $__internal_1b81b6f1c571d0e39b3052177c83a2d4a9412c9a487f3a20fb370a6acd36b00b->enter($__internal_1b81b6f1c571d0e39b3052177c83a2d4a9412c9a487f3a20fb370a6acd36b00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b81b6f1c571d0e39b3052177c83a2d4a9412c9a487f3a20fb370a6acd36b00b->leave($__internal_1b81b6f1c571d0e39b3052177c83a2d4a9412c9a487f3a20fb370a6acd36b00b_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_41a1f6c969bca5c855afc8489a9a248fa379bdb7872a3fac1b9436ec5c1271de = $this->env->getExtension("native_profiler");
        $__internal_41a1f6c969bca5c855afc8489a9a248fa379bdb7872a3fac1b9436ec5c1271de->enter($__internal_41a1f6c969bca5c855afc8489a9a248fa379bdb7872a3fac1b9436ec5c1271de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_41a1f6c969bca5c855afc8489a9a248fa379bdb7872a3fac1b9436ec5c1271de->leave($__internal_41a1f6c969bca5c855afc8489a9a248fa379bdb7872a3fac1b9436ec5c1271de_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_46137945cd44d634ed898b0c3b302afbfaf4c75f5967b873a78abde85b9829de = $this->env->getExtension("native_profiler");
        $__internal_46137945cd44d634ed898b0c3b302afbfaf4c75f5967b873a78abde85b9829de->enter($__internal_46137945cd44d634ed898b0c3b302afbfaf4c75f5967b873a78abde85b9829de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_46137945cd44d634ed898b0c3b302afbfaf4c75f5967b873a78abde85b9829de->leave($__internal_46137945cd44d634ed898b0c3b302afbfaf4c75f5967b873a78abde85b9829de_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3e88c9a00aae4368ec19377f2f5e0b349e76afe83b121b21ad80755530a8eaec = $this->env->getExtension("native_profiler");
        $__internal_3e88c9a00aae4368ec19377f2f5e0b349e76afe83b121b21ad80755530a8eaec->enter($__internal_3e88c9a00aae4368ec19377f2f5e0b349e76afe83b121b21ad80755530a8eaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_3e88c9a00aae4368ec19377f2f5e0b349e76afe83b121b21ad80755530a8eaec->leave($__internal_3e88c9a00aae4368ec19377f2f5e0b349e76afe83b121b21ad80755530a8eaec_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "form_div_layout.html.twig" %}*/
/* */
/* {% block form_rows %}*/
/*     <div class="symfony-form-errors">*/
/*         {{ form_errors(form) }}*/
/*     </div>*/
/*     {% for child in form %}*/
/*         {{ form_row(child) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     <div class="symfony-form-row">*/
/*         {{ form_label(form) }}*/
/*         <div class="symfony-form-field">*/
/*             {{ form_widget(form) }}*/
/*             <div class="symfony-form-errors">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% if label is empty %}*/
/*         {% set label = name|humanize %}*/
/*     {% endif %}*/
/*     <label for="{{ id }}">*/
/*         {{ label|trans }}*/
/*         {% if required %}*/
/*             <span class="symfony-form-required" title="This field is required">*</span>*/
/*         {% endif %}*/
/*     </label>*/
/* {% endblock %}*/
/* */
