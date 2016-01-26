<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_14457e3848b703aac7104721339987f950ae52cf9116e40aed181a368253945c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_360d0eb184d7f30bf0e18adf4610efd3477834104f42c50d05a6f225ce13aefa = $this->env->getExtension("native_profiler");
        $__internal_360d0eb184d7f30bf0e18adf4610efd3477834104f42c50d05a6f225ce13aefa->enter($__internal_360d0eb184d7f30bf0e18adf4610efd3477834104f42c50d05a6f225ce13aefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_360d0eb184d7f30bf0e18adf4610efd3477834104f42c50d05a6f225ce13aefa->leave($__internal_360d0eb184d7f30bf0e18adf4610efd3477834104f42c50d05a6f225ce13aefa_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_1160e493aec4f136424625277d21d74e9f48d9facc03a333f0eae8c0245c48ba = $this->env->getExtension("native_profiler");
        $__internal_1160e493aec4f136424625277d21d74e9f48d9facc03a333f0eae8c0245c48ba->enter($__internal_1160e493aec4f136424625277d21d74e9f48d9facc03a333f0eae8c0245c48ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) > 0))) {
            // line 22
            echo "        <div class=\"row\">
            <div class=\"sonata-ba-list ";
            // line 23
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
            </div>
            ";
            // line 26
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                // line 27
                echo "                <div class=\"sonata-ba-filter col-md-2\">
                    ";
                // line 28
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                </div>
            ";
            }
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "
";
        
        $__internal_1160e493aec4f136424625277d21d74e9f48d9facc03a333f0eae8c0245c48ba->leave($__internal_1160e493aec4f136424625277d21d74e9f48d9facc03a333f0eae8c0245c48ba_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_2e80d183e7e5beef6fef175d4751445e4de4356f67d411a977f4ca27ba5f5ad9 = $this->env->getExtension("native_profiler");
        $__internal_2e80d183e7e5beef6fef175d4751445e4de4356f67d411a977f4ca27ba5f5ad9->enter($__internal_2e80d183e7e5beef6fef175d4751445e4de4356f67d411a977f4ca27ba5f5ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_2e80d183e7e5beef6fef175d4751445e4de4356f67d411a977f4ca27ba5f5ad9->leave($__internal_2e80d183e7e5beef6fef175d4751445e4de4356f67d411a977f4ca27ba5f5ad9_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_97b921718dc886ffff5fe4078bd048236137288d90d66082518974d7dde660a8 = $this->env->getExtension("native_profiler");
        $__internal_97b921718dc886ffff5fe4078bd048236137288d90d66082518974d7dde660a8->enter($__internal_97b921718dc886ffff5fe4078bd048236137288d90d66082518974d7dde660a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_97b921718dc886ffff5fe4078bd048236137288d90d66082518974d7dde660a8->leave($__internal_97b921718dc886ffff5fe4078bd048236137288d90d66082518974d7dde660a8_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_c1699512a9dc2b207136b69ecf20d719103e2e733b21f3e9f4a9114d895a0757 = $this->env->getExtension("native_profiler");
        $__internal_c1699512a9dc2b207136b69ecf20d719103e2e733b21f3e9f4a9114d895a0757->enter($__internal_c1699512a9dc2b207136b69ecf20d719103e2e733b21f3e9f4a9114d895a0757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_c1699512a9dc2b207136b69ecf20d719103e2e733b21f3e9f4a9114d895a0757->leave($__internal_c1699512a9dc2b207136b69ecf20d719103e2e733b21f3e9f4a9114d895a0757_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_bf2916789d793ec9d181f4158cb6859c30f9f4bb361ccadac5bd4f1b2ef27cb0 = $this->env->getExtension("native_profiler");
        $__internal_bf2916789d793ec9d181f4158cb6859c30f9f4bb361ccadac5bd4f1b2ef27cb0->enter($__internal_bf2916789d793ec9d181f4158cb6859c30f9f4bb361ccadac5bd4f1b2ef27cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_bf2916789d793ec9d181f4158cb6859c30f9f4bb361ccadac5bd4f1b2ef27cb0->leave($__internal_bf2916789d793ec9d181f4158cb6859c30f9f4bb361ccadac5bd4f1b2ef27cb0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  128 => 18,  117 => 17,  106 => 16,  98 => 33,  94 => 31,  88 => 28,  85 => 27,  83 => 26,  78 => 24,  70 => 23,  67 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
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
/* {% block content %}*/
/*     {% set _list_table   = block('list_table')|trim %}*/
/*     {% set _list_filters = block('list_filters')|trim %}*/
/* */
/*     {% block preview %}{% endblock %}*/
/*     {% block form %}{% endblock %}*/
/*     {% block list %}{% endblock %}*/
/*     {% block show %}{% endblock %}*/
/* */
/*     {% if _list_table|length > 0 or _list_filters|length > 0 %}*/
/*         <div class="row">*/
/*             <div class="sonata-ba-list {% if _list_filters %}col-md-10{% else %}col-md-12{% endif %}">*/
/*                 {{ _list_table|raw }}*/
/*             </div>*/
/*             {% if _list_filters %}*/
/*                 <div class="sonata-ba-filter col-md-2">*/
/*                     {{ _list_filters|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
