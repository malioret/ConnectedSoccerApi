<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_739cfb9ffb8e382fdd059e19750846ec54cd93e18e3a5fd069a985f5e527e6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66385e1d3a4020fc6cf08825829a458704ff6df119dc9979656cce5532e9f380 = $this->env->getExtension("native_profiler");
        $__internal_66385e1d3a4020fc6cf08825829a458704ff6df119dc9979656cce5532e9f380->enter($__internal_66385e1d3a4020fc6cf08825829a458704ff6df119dc9979656cce5532e9f380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66385e1d3a4020fc6cf08825829a458704ff6df119dc9979656cce5532e9f380->leave($__internal_66385e1d3a4020fc6cf08825829a458704ff6df119dc9979656cce5532e9f380_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8752e054dfdd9ae94fa732649e813c8a99718c879996fa8b696c14da5d7e5898 = $this->env->getExtension("native_profiler");
        $__internal_8752e054dfdd9ae94fa732649e813c8a99718c879996fa8b696c14da5d7e5898->enter($__internal_8752e054dfdd9ae94fa732649e813c8a99718c879996fa8b696c14da5d7e5898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_8752e054dfdd9ae94fa732649e813c8a99718c879996fa8b696c14da5d7e5898->leave($__internal_8752e054dfdd9ae94fa732649e813c8a99718c879996fa8b696c14da5d7e5898_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_be771d4b9d4c6af77f4de0c5154b7a481b9c00d7012e337e893085f5e3412e5a = $this->env->getExtension("native_profiler");
        $__internal_be771d4b9d4c6af77f4de0c5154b7a481b9c00d7012e337e893085f5e3412e5a->enter($__internal_be771d4b9d4c6af77f4de0c5154b7a481b9c00d7012e337e893085f5e3412e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_be771d4b9d4c6af77f4de0c5154b7a481b9c00d7012e337e893085f5e3412e5a->leave($__internal_be771d4b9d4c6af77f4de0c5154b7a481b9c00d7012e337e893085f5e3412e5a_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_c4b1dae8ff45a73b5b05052b5bce697369c5cc473b92ed75e9e197b95f7b8c3c = $this->env->getExtension("native_profiler");
        $__internal_c4b1dae8ff45a73b5b05052b5bce697369c5cc473b92ed75e9e197b95f7b8c3c->enter($__internal_c4b1dae8ff45a73b5b05052b5bce697369c5cc473b92ed75e9e197b95f7b8c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"glyphicon glyphicon-ok\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"glyphicon glyphicon-remove\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_c4b1dae8ff45a73b5b05052b5bce697369c5cc473b92ed75e9e197b95f7b8c3c->leave($__internal_c4b1dae8ff45a73b5b05052b5bce697369c5cc473b92ed75e9e197b95f7b8c3c_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_7335e56af98e99a01c2d9db1aecf15a0d886f2cdd8e8fdc50f57d2bf74039311 = $this->env->getExtension("native_profiler");
        $__internal_7335e56af98e99a01c2d9db1aecf15a0d886f2cdd8e8fdc50f57d2bf74039311->enter($__internal_7335e56af98e99a01c2d9db1aecf15a0d886f2cdd8e8fdc50f57d2bf74039311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"]), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_7335e56af98e99a01c2d9db1aecf15a0d886f2cdd8e8fdc50f57d2bf74039311->leave($__internal_7335e56af98e99a01c2d9db1aecf15a0d886f2cdd8e8fdc50f57d2bf74039311_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_8428c1f36767a55643467e05e60b6e4eb5d0ddf7053e1888107252eaba233adf = $this->env->getExtension("native_profiler");
        $__internal_8428c1f36767a55643467e05e60b6e4eb5d0ddf7053e1888107252eaba233adf->enter($__internal_8428c1f36767a55643467e05e60b6e4eb5d0ddf7053e1888107252eaba233adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_8428c1f36767a55643467e05e60b6e4eb5d0ddf7053e1888107252eaba233adf->leave($__internal_8428c1f36767a55643467e05e60b6e4eb5d0ddf7053e1888107252eaba233adf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}*/
/* */
/* {% block actions %}*/
/* {% endblock %}*/
/* */
/* {% block side_menu %}*/
/* {% endblock %}*/
/* */
/* {% block formactions %}*/
/*     <button class="btn btn-success" type="submit" name="btn_preview_approve">*/
/*         <i class="glyphicon glyphicon-ok"></i>*/
/*         {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/*     <button class="btn btn-danger" type="submit" name="btn_preview_decline">*/
/*         <i class="glyphicon glyphicon-remove"></i>*/
/*         {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}*/
/*     </button>*/
/* {% endblock %}*/
/* */
/* {% block preview %}*/
/*     <div class="sonata-ba-view">*/
/*         {% for name, view_group in admin.showgroups %}*/
/*             <table class="table table-bordered">*/
/*                 {% if name %}*/
/*                     <tr class="sonata-ba-view-title">*/
/*                         <td colspan="2">*/
/*                             {{ admin.trans(name) }}*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endif %}*/
/* */
/*                 {% for field_name in view_group.fields %}*/
/*                     <tr class="sonata-ba-view-container">*/
/*                         {% if admin.show[field_name] is defined %}*/
/*                             {{ admin.show[field_name]|render_view_element(object) }}*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form %}*/
/*     <div class="sonata-preview-form-container">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
