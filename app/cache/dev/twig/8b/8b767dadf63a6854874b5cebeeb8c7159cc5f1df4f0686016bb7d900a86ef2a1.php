<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_23e06eade03daf00201c9f122963c160f72768b53f488b2cdd09ea0cc1604e19 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4761108fecf6be25299985935f45aaa2d17b37660cc7fec67c441bf10d6c1b8 = $this->env->getExtension("native_profiler");
        $__internal_a4761108fecf6be25299985935f45aaa2d17b37660cc7fec67c441bf10d6c1b8->enter($__internal_a4761108fecf6be25299985935f45aaa2d17b37660cc7fec67c441bf10d6c1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4761108fecf6be25299985935f45aaa2d17b37660cc7fec67c441bf10d6c1b8->leave($__internal_a4761108fecf6be25299985935f45aaa2d17b37660cc7fec67c441bf10d6c1b8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9c8fe9607f2a7d271d81381af82941a1516b72baa93deddd65d2b37285ba8ec0 = $this->env->getExtension("native_profiler");
        $__internal_9c8fe9607f2a7d271d81381af82941a1516b72baa93deddd65d2b37285ba8ec0->enter($__internal_9c8fe9607f2a7d271d81381af82941a1516b72baa93deddd65d2b37285ba8ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_9c8fe9607f2a7d271d81381af82941a1516b72baa93deddd65d2b37285ba8ec0->leave($__internal_9c8fe9607f2a7d271d81381af82941a1516b72baa93deddd65d2b37285ba8ec0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
