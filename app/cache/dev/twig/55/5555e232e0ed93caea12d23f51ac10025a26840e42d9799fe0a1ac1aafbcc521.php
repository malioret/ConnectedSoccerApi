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
        $__internal_3d5367e044ab0c5d3b0eced5448eb14ef6385886830dd7384a04a884056a3fab = $this->env->getExtension("native_profiler");
        $__internal_3d5367e044ab0c5d3b0eced5448eb14ef6385886830dd7384a04a884056a3fab->enter($__internal_3d5367e044ab0c5d3b0eced5448eb14ef6385886830dd7384a04a884056a3fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d5367e044ab0c5d3b0eced5448eb14ef6385886830dd7384a04a884056a3fab->leave($__internal_3d5367e044ab0c5d3b0eced5448eb14ef6385886830dd7384a04a884056a3fab_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4f5d238bda5490f3b34fe3c9948e290fe065bc175b909547572146ed64347b4a = $this->env->getExtension("native_profiler");
        $__internal_4f5d238bda5490f3b34fe3c9948e290fe065bc175b909547572146ed64347b4a->enter($__internal_4f5d238bda5490f3b34fe3c9948e290fe065bc175b909547572146ed64347b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_4f5d238bda5490f3b34fe3c9948e290fe065bc175b909547572146ed64347b4a->leave($__internal_4f5d238bda5490f3b34fe3c9948e290fe065bc175b909547572146ed64347b4a_prof);

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
