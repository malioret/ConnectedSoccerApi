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
        $__internal_8e122b1951717316143c0e5b20f180e2e146e1bd884b9b76839da5dae55896c8 = $this->env->getExtension("native_profiler");
        $__internal_8e122b1951717316143c0e5b20f180e2e146e1bd884b9b76839da5dae55896c8->enter($__internal_8e122b1951717316143c0e5b20f180e2e146e1bd884b9b76839da5dae55896c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e122b1951717316143c0e5b20f180e2e146e1bd884b9b76839da5dae55896c8->leave($__internal_8e122b1951717316143c0e5b20f180e2e146e1bd884b9b76839da5dae55896c8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_16cb3e64a333dc7975f67e8e316dedd524850f8b4d0ac67485c2b87ae6713f65 = $this->env->getExtension("native_profiler");
        $__internal_16cb3e64a333dc7975f67e8e316dedd524850f8b4d0ac67485c2b87ae6713f65->enter($__internal_16cb3e64a333dc7975f67e8e316dedd524850f8b4d0ac67485c2b87ae6713f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_16cb3e64a333dc7975f67e8e316dedd524850f8b4d0ac67485c2b87ae6713f65->leave($__internal_16cb3e64a333dc7975f67e8e316dedd524850f8b4d0ac67485c2b87ae6713f65_prof);

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
