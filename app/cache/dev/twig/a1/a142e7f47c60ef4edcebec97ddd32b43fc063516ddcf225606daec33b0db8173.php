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
        $__internal_a2c5f45db796526def945c0ab15fcf5fbe33b000e02fb11a533e432ad04e920f = $this->env->getExtension("native_profiler");
        $__internal_a2c5f45db796526def945c0ab15fcf5fbe33b000e02fb11a533e432ad04e920f->enter($__internal_a2c5f45db796526def945c0ab15fcf5fbe33b000e02fb11a533e432ad04e920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_a2c5f45db796526def945c0ab15fcf5fbe33b000e02fb11a533e432ad04e920f->leave($__internal_a2c5f45db796526def945c0ab15fcf5fbe33b000e02fb11a533e432ad04e920f_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_fb941a2957e234bd3c573a530e160a80594b1198e84ed49d5949900a2c575d24 = $this->env->getExtension("native_profiler");
        $__internal_fb941a2957e234bd3c573a530e160a80594b1198e84ed49d5949900a2c575d24->enter($__internal_fb941a2957e234bd3c573a530e160a80594b1198e84ed49d5949900a2c575d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fb941a2957e234bd3c573a530e160a80594b1198e84ed49d5949900a2c575d24->leave($__internal_fb941a2957e234bd3c573a530e160a80594b1198e84ed49d5949900a2c575d24_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_43cd2c460905ed0798c13bd720bd5ecdbfe6d8ede37d325de159deaf045d65c2 = $this->env->getExtension("native_profiler");
        $__internal_43cd2c460905ed0798c13bd720bd5ecdbfe6d8ede37d325de159deaf045d65c2->enter($__internal_43cd2c460905ed0798c13bd720bd5ecdbfe6d8ede37d325de159deaf045d65c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_43cd2c460905ed0798c13bd720bd5ecdbfe6d8ede37d325de159deaf045d65c2->leave($__internal_43cd2c460905ed0798c13bd720bd5ecdbfe6d8ede37d325de159deaf045d65c2_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_a649d38692403c197b54dfc866a8b135856f557caf64a8820124af74975c38fc = $this->env->getExtension("native_profiler");
        $__internal_a649d38692403c197b54dfc866a8b135856f557caf64a8820124af74975c38fc->enter($__internal_a649d38692403c197b54dfc866a8b135856f557caf64a8820124af74975c38fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_a649d38692403c197b54dfc866a8b135856f557caf64a8820124af74975c38fc->leave($__internal_a649d38692403c197b54dfc866a8b135856f557caf64a8820124af74975c38fc_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_b920328331a8601c6339f476218fdf5594a919a012f2aa69d10f3403e98468b3 = $this->env->getExtension("native_profiler");
        $__internal_b920328331a8601c6339f476218fdf5594a919a012f2aa69d10f3403e98468b3->enter($__internal_b920328331a8601c6339f476218fdf5594a919a012f2aa69d10f3403e98468b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_b920328331a8601c6339f476218fdf5594a919a012f2aa69d10f3403e98468b3->leave($__internal_b920328331a8601c6339f476218fdf5594a919a012f2aa69d10f3403e98468b3_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_ddfd8a6fa260b061cb662bf9bc35470638f1b80610bc4e97e4f5fe305de62960 = $this->env->getExtension("native_profiler");
        $__internal_ddfd8a6fa260b061cb662bf9bc35470638f1b80610bc4e97e4f5fe305de62960->enter($__internal_ddfd8a6fa260b061cb662bf9bc35470638f1b80610bc4e97e4f5fe305de62960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_ddfd8a6fa260b061cb662bf9bc35470638f1b80610bc4e97e4f5fe305de62960->leave($__internal_ddfd8a6fa260b061cb662bf9bc35470638f1b80610bc4e97e4f5fe305de62960_prof);

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
