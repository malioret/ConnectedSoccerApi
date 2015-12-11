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
        $__internal_8de6ef78c7241cc1620e2291a37f123ac4f2491820eb195bce32c5d43d8e48dd = $this->env->getExtension("native_profiler");
        $__internal_8de6ef78c7241cc1620e2291a37f123ac4f2491820eb195bce32c5d43d8e48dd->enter($__internal_8de6ef78c7241cc1620e2291a37f123ac4f2491820eb195bce32c5d43d8e48dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_8de6ef78c7241cc1620e2291a37f123ac4f2491820eb195bce32c5d43d8e48dd->leave($__internal_8de6ef78c7241cc1620e2291a37f123ac4f2491820eb195bce32c5d43d8e48dd_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_34676fed2ba61b87b9bf919bb9bf7a763e3af0652974c0762d0e78e95ddc9f7d = $this->env->getExtension("native_profiler");
        $__internal_34676fed2ba61b87b9bf919bb9bf7a763e3af0652974c0762d0e78e95ddc9f7d->enter($__internal_34676fed2ba61b87b9bf919bb9bf7a763e3af0652974c0762d0e78e95ddc9f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_34676fed2ba61b87b9bf919bb9bf7a763e3af0652974c0762d0e78e95ddc9f7d->leave($__internal_34676fed2ba61b87b9bf919bb9bf7a763e3af0652974c0762d0e78e95ddc9f7d_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_125675c7cb50db9216e4fa0c01c6b07f83f9b076a2f95dc6dd391b23e31a8263 = $this->env->getExtension("native_profiler");
        $__internal_125675c7cb50db9216e4fa0c01c6b07f83f9b076a2f95dc6dd391b23e31a8263->enter($__internal_125675c7cb50db9216e4fa0c01c6b07f83f9b076a2f95dc6dd391b23e31a8263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_125675c7cb50db9216e4fa0c01c6b07f83f9b076a2f95dc6dd391b23e31a8263->leave($__internal_125675c7cb50db9216e4fa0c01c6b07f83f9b076a2f95dc6dd391b23e31a8263_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_6351b2092f114e7779d13f815c9fdaea11d76ee287c2a293a8a5b8bf409c0162 = $this->env->getExtension("native_profiler");
        $__internal_6351b2092f114e7779d13f815c9fdaea11d76ee287c2a293a8a5b8bf409c0162->enter($__internal_6351b2092f114e7779d13f815c9fdaea11d76ee287c2a293a8a5b8bf409c0162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_6351b2092f114e7779d13f815c9fdaea11d76ee287c2a293a8a5b8bf409c0162->leave($__internal_6351b2092f114e7779d13f815c9fdaea11d76ee287c2a293a8a5b8bf409c0162_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_3790652cbd704f69c7b2d068d7197e454c9491d424d751f5ad6bd56ff9f42a33 = $this->env->getExtension("native_profiler");
        $__internal_3790652cbd704f69c7b2d068d7197e454c9491d424d751f5ad6bd56ff9f42a33->enter($__internal_3790652cbd704f69c7b2d068d7197e454c9491d424d751f5ad6bd56ff9f42a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_3790652cbd704f69c7b2d068d7197e454c9491d424d751f5ad6bd56ff9f42a33->leave($__internal_3790652cbd704f69c7b2d068d7197e454c9491d424d751f5ad6bd56ff9f42a33_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_6f77169fa8789c56bf627abad5388d565fdb587dae10d4956cf61c2f946234ca = $this->env->getExtension("native_profiler");
        $__internal_6f77169fa8789c56bf627abad5388d565fdb587dae10d4956cf61c2f946234ca->enter($__internal_6f77169fa8789c56bf627abad5388d565fdb587dae10d4956cf61c2f946234ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_6f77169fa8789c56bf627abad5388d565fdb587dae10d4956cf61c2f946234ca->leave($__internal_6f77169fa8789c56bf627abad5388d565fdb587dae10d4956cf61c2f946234ca_prof);

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
