<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_305ab9dc5dece5068c431f4cf110d7ce85fc336eac6b2b5df8d3204fadc331a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_eab2a7f3aeee95c6f63f1fbe4ef969126923365122872136017e9b9417d1ded1 = $this->env->getExtension("native_profiler");
        $__internal_eab2a7f3aeee95c6f63f1fbe4ef969126923365122872136017e9b9417d1ded1->enter($__internal_eab2a7f3aeee95c6f63f1fbe4ef969126923365122872136017e9b9417d1ded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eab2a7f3aeee95c6f63f1fbe4ef969126923365122872136017e9b9417d1ded1->leave($__internal_eab2a7f3aeee95c6f63f1fbe4ef969126923365122872136017e9b9417d1ded1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eb0db25a05247aff06d81135e9d9d87aa52cb4561a6eefb677e5e519db581068 = $this->env->getExtension("native_profiler");
        $__internal_eb0db25a05247aff06d81135e9d9d87aa52cb4561a6eefb677e5e519db581068->enter($__internal_eb0db25a05247aff06d81135e9d9d87aa52cb4561a6eefb677e5e519db581068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <i class=\"icon-ok-circle\"></i>";
            // line 18
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        } else {
            // line 20
            echo "        <i class=\"icon-ban-circle\"></i>";
            // line 21
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eb0db25a05247aff06d81135e9d9d87aa52cb4561a6eefb677e5e519db581068->leave($__internal_eb0db25a05247aff06d81135e9d9d87aa52cb4561a6eefb677e5e519db581068_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  50 => 20,  47 => 18,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <i class="icon-ok-circle"></i>*/
/*         {%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}*/
/*     {% else %}*/
/*         <i class="icon-ban-circle"></i>*/
/*         {%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
