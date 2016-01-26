<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_9fe3e5cb4d84559e1a5edb48ecb69fe5d98109a0a7c9d4ab7966695ce2a2aa0d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b998e40fe1e177eecf4c9a1cf0ab6f1140ba731d54da4d9b167f4f513f2caa8 = $this->env->getExtension("native_profiler");
        $__internal_6b998e40fe1e177eecf4c9a1cf0ab6f1140ba731d54da4d9b167f4f513f2caa8->enter($__internal_6b998e40fe1e177eecf4c9a1cf0ab6f1140ba731d54da4d9b167f4f513f2caa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b998e40fe1e177eecf4c9a1cf0ab6f1140ba731d54da4d9b167f4f513f2caa8->leave($__internal_6b998e40fe1e177eecf4c9a1cf0ab6f1140ba731d54da4d9b167f4f513f2caa8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e7633f71a4ef01d5ec8cb14f6b67bdcfbf7e8da5f519b06d64a8ec0ed2f4dc44 = $this->env->getExtension("native_profiler");
        $__internal_e7633f71a4ef01d5ec8cb14f6b67bdcfbf7e8da5f519b06d64a8ec0ed2f4dc44->enter($__internal_e7633f71a4ef01d5ec8cb14f6b67bdcfbf7e8da5f519b06d64a8ec0ed2f4dc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_e7633f71a4ef01d5ec8cb14f6b67bdcfbf7e8da5f519b06d64a8ec0ed2f4dc44->leave($__internal_e7633f71a4ef01d5ec8cb14f6b67bdcfbf7e8da5f519b06d64a8ec0ed2f4dc44_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_65e5ee901555c3963227adf0837bf179a1eafa3866b3ea2292b7a720d8698cfc = $this->env->getExtension("native_profiler");
        $__internal_65e5ee901555c3963227adf0837bf179a1eafa3866b3ea2292b7a720d8698cfc->enter($__internal_65e5ee901555c3963227adf0837bf179a1eafa3866b3ea2292b7a720d8698cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_65e5ee901555c3963227adf0837bf179a1eafa3866b3ea2292b7a720d8698cfc->leave($__internal_65e5ee901555c3963227adf0837bf179a1eafa3866b3ea2292b7a720d8698cfc_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_b64a1c0c28f0e903b271fb17b9f1a58ec33ca1669bc9e88b7be92db886399027 = $this->env->getExtension("native_profiler");
        $__internal_b64a1c0c28f0e903b271fb17b9f1a58ec33ca1669bc9e88b7be92db886399027->enter($__internal_b64a1c0c28f0e903b271fb17b9f1a58ec33ca1669bc9e88b7be92db886399027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <div class=\"sonata-ba-delete\">
        <h1>";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h1>

        ";
        // line 25
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements", array())) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        ";
        } else {
            // line 28
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array())), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array()))), "SonataAdminBundle");
            // line 29
            echo "        ";
        }
        // line 30
        echo "
        <div class=\"well well-small form-actions\">
            <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                <div style=\"display: none\">
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-danger\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                ";
        // line 43
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 44
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                        <i class=\"glyphicon glyphicon-th-list\"></i> ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 50
        echo "            </form>
        </div>
    </div>
";
        
        $__internal_b64a1c0c28f0e903b271fb17b9f1a58ec33ca1669bc9e88b7be92db886399027->leave($__internal_b64a1c0c28f0e903b271fb17b9f1a58ec33ca1669bc9e88b7be92db886399027_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  137 => 47,  133 => 46,  127 => 44,  125 => 43,  120 => 41,  114 => 38,  108 => 35,  104 => 34,  99 => 32,  95 => 30,  92 => 29,  89 => 28,  83 => 26,  81 => 25,  76 => 23,  73 => 22,  67 => 21,  55 => 19,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="sonata-ba-delete">*/
/*         <h1>{% trans with {'%action%': action_label} from 'SonataAdminBundle' %}title_batch_confirmation{% endtrans %}</h1>*/
/* */
/*         {% if data.all_elements %}*/
/*             {{ 'message_batch_all_confirmation'|trans({}, 'SonataAdminBundle') }}*/
/*         {% else %}*/
/*             {% transchoice data.idx|length with {'%count%': data.idx|length} from 'SonataAdminBundle' %}message_batch_confirmation{% endtranschoice %}*/
/*         {% endif %}*/
/* */
/*         <div class="well well-small form-actions">*/
/*             <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST" >*/
/*                 <input type="hidden" name="confirmation" value="ok">*/
/*                 <input type="hidden" name="data" value="{{ data|json_encode }}">*/
/*                 <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/* */
/*                 <div style="display: none">*/
/*                     {{ form_rest(form) }}*/
/*                 </div>*/
/* */
/*                 <button type="submit" class="btn btn-danger">{{ 'btn_execute_batch_action'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                 {% if admin.hasRoute('list') and admin.isGranted('LIST') %}*/
/*                     {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*                     <a class="btn btn-success" href="{{ admin.generateUrl('list') }}">*/
/*                         <i class="glyphicon glyphicon-th-list"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
