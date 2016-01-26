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
        $__internal_3d3ca04247c004b2f4b21959815e4a31e6bb6a45de005beb18f659720a29c0b1 = $this->env->getExtension("native_profiler");
        $__internal_3d3ca04247c004b2f4b21959815e4a31e6bb6a45de005beb18f659720a29c0b1->enter($__internal_3d3ca04247c004b2f4b21959815e4a31e6bb6a45de005beb18f659720a29c0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3ca04247c004b2f4b21959815e4a31e6bb6a45de005beb18f659720a29c0b1->leave($__internal_3d3ca04247c004b2f4b21959815e4a31e6bb6a45de005beb18f659720a29c0b1_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_642823209c24ee70afcabe6653cf90a5f376b25f03d7dd659e7ffb32f52b5d85 = $this->env->getExtension("native_profiler");
        $__internal_642823209c24ee70afcabe6653cf90a5f376b25f03d7dd659e7ffb32f52b5d85->enter($__internal_642823209c24ee70afcabe6653cf90a5f376b25f03d7dd659e7ffb32f52b5d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_642823209c24ee70afcabe6653cf90a5f376b25f03d7dd659e7ffb32f52b5d85->leave($__internal_642823209c24ee70afcabe6653cf90a5f376b25f03d7dd659e7ffb32f52b5d85_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_1577ff043b4829a578f9b355550c10a5dc74e12ddd972a0583ddab02cccf879a = $this->env->getExtension("native_profiler");
        $__internal_1577ff043b4829a578f9b355550c10a5dc74e12ddd972a0583ddab02cccf879a->enter($__internal_1577ff043b4829a578f9b355550c10a5dc74e12ddd972a0583ddab02cccf879a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_1577ff043b4829a578f9b355550c10a5dc74e12ddd972a0583ddab02cccf879a->leave($__internal_1577ff043b4829a578f9b355550c10a5dc74e12ddd972a0583ddab02cccf879a_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b2ebd8044617cdad9f776e2525fb55d02ccf5218bd4208d69e0532d3d7a0d1e = $this->env->getExtension("native_profiler");
        $__internal_6b2ebd8044617cdad9f776e2525fb55d02ccf5218bd4208d69e0532d3d7a0d1e->enter($__internal_6b2ebd8044617cdad9f776e2525fb55d02ccf5218bd4208d69e0532d3d7a0d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    Redefine the content block in your action template

";
        
        $__internal_6b2ebd8044617cdad9f776e2525fb55d02ccf5218bd4208d69e0532d3d7a0d1e->leave($__internal_6b2ebd8044617cdad9f776e2525fb55d02ccf5218bd4208d69e0532d3d7a0d1e_prof);

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
