<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_0b98a2b3313ce78395b6900e6f20ad4dc252074bd8d66c0f01c56b89ebff238c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f97747458be036f0225a7811e1db224dcbb14d800358601e159a7ad0c30b89a = $this->env->getExtension("native_profiler");
        $__internal_9f97747458be036f0225a7811e1db224dcbb14d800358601e159a7ad0c30b89a->enter($__internal_9f97747458be036f0225a7811e1db224dcbb14d800358601e159a7ad0c30b89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f97747458be036f0225a7811e1db224dcbb14d800358601e159a7ad0c30b89a->leave($__internal_9f97747458be036f0225a7811e1db224dcbb14d800358601e159a7ad0c30b89a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bff9522a805b1daadf27a1fa41f807c2b86d02b7faaf21c842f0d35dc8d0518c = $this->env->getExtension("native_profiler");
        $__internal_bff9522a805b1daadf27a1fa41f807c2b86d02b7faaf21c842f0d35dc8d0518c->enter($__internal_bff9522a805b1daadf27a1fa41f807c2b86d02b7faaf21c842f0d35dc8d0518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bff9522a805b1daadf27a1fa41f807c2b86d02b7faaf21c842f0d35dc8d0518c->leave($__internal_bff9522a805b1daadf27a1fa41f807c2b86d02b7faaf21c842f0d35dc8d0518c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% for key, val in value %}*/
/*         [{{ key }} => {{ val }}]*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
