<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_7730db4b6bbd34417f1d7e988445aab1f4612fdfa74b912ebef390007ccf9846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d442dd7ab0215af895a0e0c38796021e054108393fb08e0a8b4a47df0e094122 = $this->env->getExtension("native_profiler");
        $__internal_d442dd7ab0215af895a0e0c38796021e054108393fb08e0a8b4a47df0e094122->enter($__internal_d442dd7ab0215af895a0e0c38796021e054108393fb08e0a8b4a47df0e094122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d442dd7ab0215af895a0e0c38796021e054108393fb08e0a8b4a47df0e094122->leave($__internal_d442dd7ab0215af895a0e0c38796021e054108393fb08e0a8b4a47df0e094122_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7effe83104f94df2b2381bacc90e7863ccccca8f8bfa9ac425a30ab381f15db2 = $this->env->getExtension("native_profiler");
        $__internal_7effe83104f94df2b2381bacc90e7863ccccca8f8bfa9ac425a30ab381f15db2->enter($__internal_7effe83104f94df2b2381bacc90e7863ccccca8f8bfa9ac425a30ab381f15db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 16)->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 17)->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 18)->display($context);
        echo "</li>
";
        
        $__internal_7effe83104f94df2b2381bacc90e7863ccccca8f8bfa9ac425a30ab381f15db2->leave($__internal_7effe83104f94df2b2381bacc90e7863ccccca8f8bfa9ac425a30ab381f15db2_prof);

    }

    // line 21
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_299b7db35d793fe78502a843aab21ddaf132072115cdabf4641133d049235f73 = $this->env->getExtension("native_profiler");
        $__internal_299b7db35d793fe78502a843aab21ddaf132072115cdabf4641133d049235f73->enter($__internal_299b7db35d793fe78502a843aab21ddaf132072115cdabf4641133d049235f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_299b7db35d793fe78502a843aab21ddaf132072115cdabf4641133d049235f73->leave($__internal_299b7db35d793fe78502a843aab21ddaf132072115cdabf4641133d049235f73_prof);

    }

    // line 23
    public function block_show($context, array $blocks = array())
    {
        $__internal_55751b3c55ea3f3c8e4e3ec6a573ae2256b87f24df28fb7615e17fc5387dde1f = $this->env->getExtension("native_profiler");
        $__internal_55751b3c55ea3f3c8e4e3ec6a573ae2256b87f24df28fb7615e17fc5387dde1f->enter($__internal_55751b3c55ea3f3c8e4e3ec6a573ae2256b87f24df28fb7615e17fc5387dde1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 24
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 29
            echo "            <table class=\"table table-bordered\">
                ";
            // line 30
            if ($context["name"]) {
                // line 31
                echo "                    <thead>
                        ";
                // line 32
                $this->displayBlock('show_title', $context, $blocks);
                // line 39
                echo "                    </thead>
                ";
            }
            // line 41
            echo "
                <tbody>
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                        ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 51
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </tbody>
            </table>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
        ";
        // line 56
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    </div>
";
        
        $__internal_55751b3c55ea3f3c8e4e3ec6a573ae2256b87f24df28fb7615e17fc5387dde1f->leave($__internal_55751b3c55ea3f3c8e4e3ec6a573ae2256b87f24df28fb7615e17fc5387dde1f_prof);

    }

    // line 32
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_a73f4b77e092ab6c026b822b42421dd5080ce4765edf6bb577b4275fb2cc89aa = $this->env->getExtension("native_profiler");
        $__internal_a73f4b77e092ab6c026b822b42421dd5080ce4765edf6bb577b4275fb2cc89aa->enter($__internal_a73f4b77e092ab6c026b822b42421dd5080ce4765edf6bb577b4275fb2cc89aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 33
        echo "                            <tr class=\"sonata-ba-view-title\">
                                <th colspan=\"2\">
                                    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
                                </th>
                            </tr>
                        ";
        
        $__internal_a73f4b77e092ab6c026b822b42421dd5080ce4765edf6bb577b4275fb2cc89aa->leave($__internal_a73f4b77e092ab6c026b822b42421dd5080ce4765edf6bb577b4275fb2cc89aa_prof);

    }

    // line 44
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_d0786b2cd57a53b816d06e871d95665f511a9c3b609046622b922d8c6479fb79 = $this->env->getExtension("native_profiler");
        $__internal_d0786b2cd57a53b816d06e871d95665f511a9c3b609046622b922d8c6479fb79->enter($__internal_d0786b2cd57a53b816d06e871d95665f511a9c3b609046622b922d8c6479fb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 45
        echo "                            <tr class=\"sonata-ba-view-container\">
                                ";
        // line 46
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 47
            echo "                                    ";
            echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                ";
        }
        // line 49
        echo "                            </tr>
                        ";
        
        $__internal_d0786b2cd57a53b816d06e871d95665f511a9c3b609046622b922d8c6479fb79->leave($__internal_d0786b2cd57a53b816d06e871d95665f511a9c3b609046622b922d8c6479fb79_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 49,  223 => 47,  221 => 46,  218 => 45,  212 => 44,  201 => 35,  197 => 33,  191 => 32,  180 => 56,  177 => 55,  161 => 52,  147 => 51,  144 => 44,  127 => 43,  123 => 41,  119 => 39,  117 => 32,  114 => 31,  112 => 30,  109 => 29,  92 => 28,  87 => 26,  83 => 24,  77 => 23,  65 => 21,  56 => 18,  52 => 17,  48 => 16,  43 => 15,  37 => 14,  22 => 12,);
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
/*     <li>{% include 'SonataAdminBundle:Button:edit_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:history_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% block show %}*/
/*     <div class="sonata-ba-view">*/
/* */
/*         {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*         {% for name, view_group in admin.showgroups %}*/
/*             <table class="table table-bordered">*/
/*                 {% if name %}*/
/*                     <thead>*/
/*                         {% block show_title %}*/
/*                             <tr class="sonata-ba-view-title">*/
/*                                 <th colspan="2">*/
/*                                     {{ admin.trans(name) }}*/
/*                                 </th>*/
/*                             </tr>*/
/*                         {% endblock %}*/
/*                     </thead>*/
/*                 {% endif %}*/
/* */
/*                 <tbody>*/
/*                     {% for field_name in view_group.fields %}*/
/*                         {% block show_field %}*/
/*                             <tr class="sonata-ba-view-container">*/
/*                                 {% if elements[field_name] is defined %}*/
/*                                     {{ elements[field_name]|render_view_element(object) }}*/
/*                                 {% endif %}*/
/*                             </tr>*/
/*                         {% endblock %}*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         {% endfor %}*/
/* */
/*         {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
