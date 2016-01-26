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
        $__internal_1c95245da2de2a2307164a0a67d512c0d9f25bebd35ee7743a3731d49a09d678 = $this->env->getExtension("native_profiler");
        $__internal_1c95245da2de2a2307164a0a67d512c0d9f25bebd35ee7743a3731d49a09d678->enter($__internal_1c95245da2de2a2307164a0a67d512c0d9f25bebd35ee7743a3731d49a09d678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c95245da2de2a2307164a0a67d512c0d9f25bebd35ee7743a3731d49a09d678->leave($__internal_1c95245da2de2a2307164a0a67d512c0d9f25bebd35ee7743a3731d49a09d678_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0f63c7d80d9b8fb320f66410e57a0ad198df19bff51daa91c0a46ed68c90f00f = $this->env->getExtension("native_profiler");
        $__internal_0f63c7d80d9b8fb320f66410e57a0ad198df19bff51daa91c0a46ed68c90f00f->enter($__internal_0f63c7d80d9b8fb320f66410e57a0ad198df19bff51daa91c0a46ed68c90f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_0f63c7d80d9b8fb320f66410e57a0ad198df19bff51daa91c0a46ed68c90f00f->leave($__internal_0f63c7d80d9b8fb320f66410e57a0ad198df19bff51daa91c0a46ed68c90f00f_prof);

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
