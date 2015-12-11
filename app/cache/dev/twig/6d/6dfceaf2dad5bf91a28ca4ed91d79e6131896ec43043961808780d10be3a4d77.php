<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_c9b7cb3c799e3d6fbc5edb6b1e4d2d70d242d408133a653c95499870e63eaa50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f32e4fb0fe6333191ebc935fa196071f6c563a12a7965dd2c3c069ece3d49810 = $this->env->getExtension("native_profiler");
        $__internal_f32e4fb0fe6333191ebc935fa196071f6c563a12a7965dd2c3c069ece3d49810->enter($__internal_f32e4fb0fe6333191ebc935fa196071f6c563a12a7965dd2c3c069ece3d49810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32e4fb0fe6333191ebc935fa196071f6c563a12a7965dd2c3c069ece3d49810->leave($__internal_f32e4fb0fe6333191ebc935fa196071f6c563a12a7965dd2c3c069ece3d49810_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1f1eb4b824891fc149dfb541d72151ab2a2ceb1d61977cb73826e275a4721656 = $this->env->getExtension("native_profiler");
        $__internal_1f1eb4b824891fc149dfb541d72151ab2a2ceb1d61977cb73826e275a4721656->enter($__internal_1f1eb4b824891fc149dfb541d72151ab2a2ceb1d61977cb73826e275a4721656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_1f1eb4b824891fc149dfb541d72151ab2a2ceb1d61977cb73826e275a4721656->leave($__internal_1f1eb4b824891fc149dfb541d72151ab2a2ceb1d61977cb73826e275a4721656_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */
