<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_f57893f4a39b0e60f21d73a6bbb364330fc92b911a38e2f2230f5cbc882287a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15e1fa466ccd2cdec5792ec0ecbdd56214adb17c7b7d08599685dd42fd2ee676 = $this->env->getExtension("native_profiler");
        $__internal_15e1fa466ccd2cdec5792ec0ecbdd56214adb17c7b7d08599685dd42fd2ee676->enter($__internal_15e1fa466ccd2cdec5792ec0ecbdd56214adb17c7b7d08599685dd42fd2ee676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15e1fa466ccd2cdec5792ec0ecbdd56214adb17c7b7d08599685dd42fd2ee676->leave($__internal_15e1fa466ccd2cdec5792ec0ecbdd56214adb17c7b7d08599685dd42fd2ee676_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bd2ae5fcd920f60ee45d4614b18bd6bcc3f3c7597ddfa1ddc3b2bebc7ab027b5 = $this->env->getExtension("native_profiler");
        $__internal_bd2ae5fcd920f60ee45d4614b18bd6bcc3f3c7597ddfa1ddc3b2bebc7ab027b5->enter($__internal_bd2ae5fcd920f60ee45d4614b18bd6bcc3f3c7597ddfa1ddc3b2bebc7ab027b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                echo "            <li>
                <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 24
                echo "            <li>
                ";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        // line 29
        echo "    </ul>
";
        
        $__internal_bd2ae5fcd920f60ee45d4614b18bd6bcc3f3c7597ddfa1ddc3b2bebc7ab027b5->leave($__internal_bd2ae5fcd920f60ee45d4614b18bd6bcc3f3c7597ddfa1ddc3b2bebc7ab027b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 29,  84 => 28,  75 => 25,  72 => 24,  67 => 23,  64 => 22,  53 => 19,  50 => 18,  45 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field%}*/
/*     <ul class="sonata-ba-show-many-to-many">*/
/*     {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute('edit') and field_description.associationadmin.isGranted('EDIT')%}*/
/*         {% for element in value%}*/
/*             <li>*/
/*                 <a href="{{ field_description.associationadmin.generateObjectUrl(field_description.options.route.name, element, field_description.options.route.parameters) }}">{{ element|render_relation_element(field_description) }}</a>*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% for element in value%}*/
/*             <li>*/
/*                 {{ element|render_relation_element(field_description) }}*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
