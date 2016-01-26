<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_4dcb13cfeb2fb2730c335e7fd51182aa490f3cbbec1cfba349588bc5a85938b3 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb1dfa3d50aaeb8ed6a70cd71655c5fc539fc9240683c2ec71116c0aa8250124 = $this->env->getExtension("native_profiler");
        $__internal_cb1dfa3d50aaeb8ed6a70cd71655c5fc539fc9240683c2ec71116c0aa8250124->enter($__internal_cb1dfa3d50aaeb8ed6a70cd71655c5fc539fc9240683c2ec71116c0aa8250124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1dfa3d50aaeb8ed6a70cd71655c5fc539fc9240683c2ec71116c0aa8250124->leave($__internal_cb1dfa3d50aaeb8ed6a70cd71655c5fc539fc9240683c2ec71116c0aa8250124_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ac140301ae82ce2fd7fae055b7dba9357a2a500e6b1f80f5aaf715db7bdfb099 = $this->env->getExtension("native_profiler");
        $__internal_ac140301ae82ce2fd7fae055b7dba9357a2a500e6b1f80f5aaf715db7bdfb099->enter($__internal_ac140301ae82ce2fd7fae055b7dba9357a2a500e6b1f80f5aaf715db7bdfb099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_ac140301ae82ce2fd7fae055b7dba9357a2a500e6b1f80f5aaf715db7bdfb099->leave($__internal_ac140301ae82ce2fd7fae055b7dba9357a2a500e6b1f80f5aaf715db7bdfb099_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_1dbd3d1b482fdfc2df1c34ab789bd19c7f3e38f87122c14678c4e8f4ec36c72c = $this->env->getExtension("native_profiler");
        $__internal_1dbd3d1b482fdfc2df1c34ab789bd19c7f3e38f87122c14678c4e8f4ec36c72c->enter($__internal_1dbd3d1b482fdfc2df1c34ab789bd19c7f3e38f87122c14678c4e8f4ec36c72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_1dbd3d1b482fdfc2df1c34ab789bd19c7f3e38f87122c14678c4e8f4ec36c72c->leave($__internal_1dbd3d1b482fdfc2df1c34ab789bd19c7f3e38f87122c14678c4e8f4ec36c72c_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd4b7eb149f142ba1f8dc38fc192733ecf5effcf47f729277a35104f66781b5f = $this->env->getExtension("native_profiler");
        $__internal_bd4b7eb149f142ba1f8dc38fc192733ecf5effcf47f729277a35104f66781b5f->enter($__internal_bd4b7eb149f142ba1f8dc38fc192733ecf5effcf47f729277a35104f66781b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    Redefine the content block in your action template

";
        
        $__internal_bd4b7eb149f142ba1f8dc38fc192733ecf5effcf47f729277a35104f66781b5f->leave($__internal_bd4b7eb149f142ba1f8dc38fc192733ecf5effcf47f729277a35104f66781b5f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  75 => 25,  64 => 21,  61 => 20,  55 => 19,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */
