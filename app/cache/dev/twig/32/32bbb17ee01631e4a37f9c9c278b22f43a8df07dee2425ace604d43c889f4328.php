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
        $__internal_ed087250a98172240550f01ab17918ce0d45924c80e586c9714cb31283e0e1f3 = $this->env->getExtension("native_profiler");
        $__internal_ed087250a98172240550f01ab17918ce0d45924c80e586c9714cb31283e0e1f3->enter($__internal_ed087250a98172240550f01ab17918ce0d45924c80e586c9714cb31283e0e1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed087250a98172240550f01ab17918ce0d45924c80e586c9714cb31283e0e1f3->leave($__internal_ed087250a98172240550f01ab17918ce0d45924c80e586c9714cb31283e0e1f3_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_31d6cdcc9e0bd0ed88f32807506129cdfa3df0372a03fc7fed9f34db5531dcab = $this->env->getExtension("native_profiler");
        $__internal_31d6cdcc9e0bd0ed88f32807506129cdfa3df0372a03fc7fed9f34db5531dcab->enter($__internal_31d6cdcc9e0bd0ed88f32807506129cdfa3df0372a03fc7fed9f34db5531dcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_31d6cdcc9e0bd0ed88f32807506129cdfa3df0372a03fc7fed9f34db5531dcab->leave($__internal_31d6cdcc9e0bd0ed88f32807506129cdfa3df0372a03fc7fed9f34db5531dcab_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_033b6e3d9bf7a8aa4e30cfd961e02f07db1082e7c85998d47a31f43da875ead1 = $this->env->getExtension("native_profiler");
        $__internal_033b6e3d9bf7a8aa4e30cfd961e02f07db1082e7c85998d47a31f43da875ead1->enter($__internal_033b6e3d9bf7a8aa4e30cfd961e02f07db1082e7c85998d47a31f43da875ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_033b6e3d9bf7a8aa4e30cfd961e02f07db1082e7c85998d47a31f43da875ead1->leave($__internal_033b6e3d9bf7a8aa4e30cfd961e02f07db1082e7c85998d47a31f43da875ead1_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_c97e0df040915af283475a06ca7ef89afe02a4f46b9e05d557ad01ae55444ec3 = $this->env->getExtension("native_profiler");
        $__internal_c97e0df040915af283475a06ca7ef89afe02a4f46b9e05d557ad01ae55444ec3->enter($__internal_c97e0df040915af283475a06ca7ef89afe02a4f46b9e05d557ad01ae55444ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    Redefine the content block in your action template

";
        
        $__internal_c97e0df040915af283475a06ca7ef89afe02a4f46b9e05d557ad01ae55444ec3->leave($__internal_c97e0df040915af283475a06ca7ef89afe02a4f46b9e05d557ad01ae55444ec3_prof);

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
