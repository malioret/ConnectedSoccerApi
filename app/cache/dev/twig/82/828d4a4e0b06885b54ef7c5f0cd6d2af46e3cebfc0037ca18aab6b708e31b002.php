<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_a55d8b76624a6441c1a19ef37b2833cb89c2001fd5466095ae2491d3079611eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9170e0265d114a633930c95e5aa0ecf86bddc65577aa311653e5350373c27d3d = $this->env->getExtension("native_profiler");
        $__internal_9170e0265d114a633930c95e5aa0ecf86bddc65577aa311653e5350373c27d3d->enter($__internal_9170e0265d114a633930c95e5aa0ecf86bddc65577aa311653e5350373c27d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9170e0265d114a633930c95e5aa0ecf86bddc65577aa311653e5350373c27d3d->leave($__internal_9170e0265d114a633930c95e5aa0ecf86bddc65577aa311653e5350373c27d3d_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_aba88e70b6765f18c5556f070190293780e4d5b475b7679e85399a7440be5f64 = $this->env->getExtension("native_profiler");
        $__internal_aba88e70b6765f18c5556f070190293780e4d5b475b7679e85399a7440be5f64->enter($__internal_aba88e70b6765f18c5556f070190293780e4d5b475b7679e85399a7440be5f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 16)->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 17)->display($context);
        echo "</li>
";
        
        $__internal_aba88e70b6765f18c5556f070190293780e4d5b475b7679e85399a7440be5f64->leave($__internal_aba88e70b6765f18c5556f070190293780e4d5b475b7679e85399a7440be5f64_prof);

    }

    // line 20
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_6c5a272c83bbf186a18257ce77288a012088b5bc9abc53f4ea12c902b63ce22c = $this->env->getExtension("native_profiler");
        $__internal_6c5a272c83bbf186a18257ce77288a012088b5bc9abc53f4ea12c902b63ce22c->enter($__internal_6c5a272c83bbf186a18257ce77288a012088b5bc9abc53f4ea12c902b63ce22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_6c5a272c83bbf186a18257ce77288a012088b5bc9abc53f4ea12c902b63ce22c->leave($__internal_6c5a272c83bbf186a18257ce77288a012088b5bc9abc53f4ea12c902b63ce22c_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0a1af64b7b1752053601566fec64a9c1b2ece512b08201e4aed36e4824f1eeb = $this->env->getExtension("native_profiler");
        $__internal_a0a1af64b7b1752053601566fec64a9c1b2ece512b08201e4aed36e4824f1eeb->enter($__internal_a0a1af64b7b1752053601566fec64a9c1b2ece512b08201e4aed36e4824f1eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"glyphicon glyphicon-trash\"></i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 38
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 39
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"glyphicon glyphicon-edit\"></i>
                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 45
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_a0a1af64b7b1752053601566fec64a9c1b2ece512b08201e4aed36e4824f1eeb->leave($__internal_a0a1af64b7b1752053601566fec64a9c1b2ece512b08201e4aed36e4824f1eeb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  122 => 43,  117 => 41,  111 => 39,  109 => 38,  105 => 37,  100 => 35,  95 => 33,  89 => 30,  83 => 27,  77 => 23,  71 => 22,  59 => 20,  50 => 17,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:edit_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="sonata-ba-delete">*/
/* */
/*         <div class="box box-danger">*/
/*             <div class="box-header">*/
/*                 <h3 class="box-title">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}*/
/*             </div>*/
/*             <div class="box-footer clearfix">*/
/*                 <form method="POST" action="{{ admin.generateObjectUrl('delete', object) }}">*/
/*                     <input type="hidden" name="_method" value="DELETE">*/
/*                     <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/* */
/*                     <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                     {% if admin.hasRoute('edit') and admin.isGranted('EDIT', object) %}*/
/*                         {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*                         <a class="btn btn-success" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*                             <i class="glyphicon glyphicon-edit"></i>*/
/*                             {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                     {% endif %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
