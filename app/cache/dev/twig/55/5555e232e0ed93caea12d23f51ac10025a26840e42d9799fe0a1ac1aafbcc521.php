<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_fb49aa5e3bbb0616ceae86165540e5ef17e2ec83d18fdc0aaff02362a8092a9c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa3e40ad0ef0359a958bf66585acc6e48b51ec22d538b160183b7e8c7f20e790 = $this->env->getExtension("native_profiler");
        $__internal_fa3e40ad0ef0359a958bf66585acc6e48b51ec22d538b160183b7e8c7f20e790->enter($__internal_fa3e40ad0ef0359a958bf66585acc6e48b51ec22d538b160183b7e8c7f20e790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa3e40ad0ef0359a958bf66585acc6e48b51ec22d538b160183b7e8c7f20e790->leave($__internal_fa3e40ad0ef0359a958bf66585acc6e48b51ec22d538b160183b7e8c7f20e790_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_94e762a101816d6cb47bf8c7a9a5aec7892f5dba1a1b32a7924750f68368b949 = $this->env->getExtension("native_profiler");
        $__internal_94e762a101816d6cb47bf8c7a9a5aec7892f5dba1a1b32a7924750f68368b949->enter($__internal_94e762a101816d6cb47bf8c7a9a5aec7892f5dba1a1b32a7924750f68368b949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_94e762a101816d6cb47bf8c7a9a5aec7892f5dba1a1b32a7924750f68368b949->leave($__internal_94e762a101816d6cb47bf8c7a9a5aec7892f5dba1a1b32a7924750f68368b949_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
