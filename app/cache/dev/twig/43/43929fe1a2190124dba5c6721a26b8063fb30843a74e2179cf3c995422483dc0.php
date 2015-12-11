<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_e2e284cd66bf6d102229623bddc025c888c6ec7601bd5ada7293d34f6492ca58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9df4c989c688d9dac03318dca4533c296d3ad3bce6b3d80fa1584afa1419c189 = $this->env->getExtension("native_profiler");
        $__internal_9df4c989c688d9dac03318dca4533c296d3ad3bce6b3d80fa1584afa1419c189->enter($__internal_9df4c989c688d9dac03318dca4533c296d3ad3bce6b3d80fa1584afa1419c189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9df4c989c688d9dac03318dca4533c296d3ad3bce6b3d80fa1584afa1419c189->leave($__internal_9df4c989c688d9dac03318dca4533c296d3ad3bce6b3d80fa1584afa1419c189_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_83dc22b2e5215f785a37ee4a908e767f174c3b1f6072e8af985ffcc47628bdf9 = $this->env->getExtension("native_profiler");
        $__internal_83dc22b2e5215f785a37ee4a908e767f174c3b1f6072e8af985ffcc47628bdf9->enter($__internal_83dc22b2e5215f785a37ee4a908e767f174c3b1f6072e8af985ffcc47628bdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-title\">
        <th colspan=\"3\">
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
        </th>
    </tr>
";
        
        $__internal_83dc22b2e5215f785a37ee4a908e767f174c3b1f6072e8af985ffcc47628bdf9->leave($__internal_83dc22b2e5215f785a37ee4a908e767f174c3b1f6072e8af985ffcc47628bdf9_prof);

    }

    // line 22
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_b89cda840df358f68bd116dabe26aba4867f8611b2d39a97ddaac0bd4488a918 = $this->env->getExtension("native_profiler");
        $__internal_b89cda840df358f68bd116dabe26aba4867f8611b2d39a97ddaac0bd4488a918->enter($__internal_b89cda840df358f68bd116dabe26aba4867f8611b2d39a97ddaac0bd4488a918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 23
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 24
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 25
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 27
        echo "    </tr>
";
        
        $__internal_b89cda840df358f68bd116dabe26aba4867f8611b2d39a97ddaac0bd4488a918->leave($__internal_b89cda840df358f68bd116dabe26aba4867f8611b2d39a97ddaac0bd4488a918_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  65 => 24,  62 => 23,  56 => 22,  45 => 17,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     <tr class="sonata-ba-view-title">*/
/*         <th colspan="3">*/
/*             {{ admin.trans(name) }}*/
/*         </th>*/
/*     </tr>*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */
