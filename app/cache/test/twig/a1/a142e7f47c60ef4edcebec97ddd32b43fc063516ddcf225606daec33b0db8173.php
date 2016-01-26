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
        $__internal_7fc04fcbae899b91942d38f4fb5863302b0c97a85ee6bf1f7b02ed153868f3ae = $this->env->getExtension("native_profiler");
        $__internal_7fc04fcbae899b91942d38f4fb5863302b0c97a85ee6bf1f7b02ed153868f3ae->enter($__internal_7fc04fcbae899b91942d38f4fb5863302b0c97a85ee6bf1f7b02ed153868f3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_7fc04fcbae899b91942d38f4fb5863302b0c97a85ee6bf1f7b02ed153868f3ae->leave($__internal_7fc04fcbae899b91942d38f4fb5863302b0c97a85ee6bf1f7b02ed153868f3ae_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_19a63e91d9e019f104480cd945863e697ad8a6f3513c36603a97ce9d63866848 = $this->env->getExtension("native_profiler");
        $__internal_19a63e91d9e019f104480cd945863e697ad8a6f3513c36603a97ce9d63866848->enter($__internal_19a63e91d9e019f104480cd945863e697ad8a6f3513c36603a97ce9d63866848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_19a63e91d9e019f104480cd945863e697ad8a6f3513c36603a97ce9d63866848->leave($__internal_19a63e91d9e019f104480cd945863e697ad8a6f3513c36603a97ce9d63866848_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_a6c9b3823a4ac1daac6f7ea33bcd2da37d2e3d7ec95157861856b68c881a636a = $this->env->getExtension("native_profiler");
        $__internal_a6c9b3823a4ac1daac6f7ea33bcd2da37d2e3d7ec95157861856b68c881a636a->enter($__internal_a6c9b3823a4ac1daac6f7ea33bcd2da37d2e3d7ec95157861856b68c881a636a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_a6c9b3823a4ac1daac6f7ea33bcd2da37d2e3d7ec95157861856b68c881a636a->leave($__internal_a6c9b3823a4ac1daac6f7ea33bcd2da37d2e3d7ec95157861856b68c881a636a_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_9912e7a8d83f9a849890e931a32418be0a4efffafcbdebff162ef08ea629ae3d = $this->env->getExtension("native_profiler");
        $__internal_9912e7a8d83f9a849890e931a32418be0a4efffafcbdebff162ef08ea629ae3d->enter($__internal_9912e7a8d83f9a849890e931a32418be0a4efffafcbdebff162ef08ea629ae3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_9912e7a8d83f9a849890e931a32418be0a4efffafcbdebff162ef08ea629ae3d->leave($__internal_9912e7a8d83f9a849890e931a32418be0a4efffafcbdebff162ef08ea629ae3d_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_4517ae172f0bce820db056bb017306af217a7aeabdfc3fa67f5d0f174fb69196 = $this->env->getExtension("native_profiler");
        $__internal_4517ae172f0bce820db056bb017306af217a7aeabdfc3fa67f5d0f174fb69196->enter($__internal_4517ae172f0bce820db056bb017306af217a7aeabdfc3fa67f5d0f174fb69196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_4517ae172f0bce820db056bb017306af217a7aeabdfc3fa67f5d0f174fb69196->leave($__internal_4517ae172f0bce820db056bb017306af217a7aeabdfc3fa67f5d0f174fb69196_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_5d146a957a077483ff2578e91ef3ea37aee9a9b4873d150f0718c57e68df2516 = $this->env->getExtension("native_profiler");
        $__internal_5d146a957a077483ff2578e91ef3ea37aee9a9b4873d150f0718c57e68df2516->enter($__internal_5d146a957a077483ff2578e91ef3ea37aee9a9b4873d150f0718c57e68df2516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_5d146a957a077483ff2578e91ef3ea37aee9a9b4873d150f0718c57e68df2516->leave($__internal_5d146a957a077483ff2578e91ef3ea37aee9a9b4873d150f0718c57e68df2516_prof);

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
