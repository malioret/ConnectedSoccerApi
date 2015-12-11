<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_cb066ccac09c0ac5ef223e128e02fad00b17d08072d02328fb9951143f7357f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a068281666c3b2246759574dd01fbd8266e619f89bb4e68f459455501dc4c12b = $this->env->getExtension("native_profiler");
        $__internal_a068281666c3b2246759574dd01fbd8266e619f89bb4e68f459455501dc4c12b->enter($__internal_a068281666c3b2246759574dd01fbd8266e619f89bb4e68f459455501dc4c12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-edit\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_a068281666c3b2246759574dd01fbd8266e619f89bb4e68f459455501dc4c12b->leave($__internal_a068281666c3b2246759574dd01fbd8266e619f89bb4e68f459455501dc4c12b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.hasRoute('edit') and admin.id(object) and admin.isGranted('EDIT', object)%}*/
/*     <a class="sonata-action-element" href="{{ admin.generateObjectUrl('edit', object) }}">*/
/*         <i class="fa fa-edit"></i>*/
/*         {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>*/
/* {% endif %}*/
