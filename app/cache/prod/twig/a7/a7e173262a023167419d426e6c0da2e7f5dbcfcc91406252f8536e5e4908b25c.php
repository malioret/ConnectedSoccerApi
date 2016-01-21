<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_c21ca7f6dec50836ee05c55608c9233d61bbd37171e1f24f63ce2e37c91b1b75 extends Twig_Template
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
        $__internal_d9cbeddeb75f533e03c9ebc4177fb32401dd360ef9690b4789d51d0315cb7a5a = $this->env->getExtension("native_profiler");
        $__internal_d9cbeddeb75f533e03c9ebc4177fb32401dd360ef9690b4789d51d0315cb7a5a->enter($__internal_d9cbeddeb75f533e03c9ebc4177fb32401dd360ef9690b4789d51d0315cb7a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9cbeddeb75f533e03c9ebc4177fb32401dd360ef9690b4789d51d0315cb7a5a->leave($__internal_d9cbeddeb75f533e03c9ebc4177fb32401dd360ef9690b4789d51d0315cb7a5a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4a1d3e59a12e5444d2831a32873bf52a2ba4c014e2df1d696e5c184a19b4ffb0 = $this->env->getExtension("native_profiler");
        $__internal_4a1d3e59a12e5444d2831a32873bf52a2ba4c014e2df1d696e5c184a19b4ffb0->enter($__internal_4a1d3e59a12e5444d2831a32873bf52a2ba4c014e2df1d696e5c184a19b4ffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_4a1d3e59a12e5444d2831a32873bf52a2ba4c014e2df1d696e5c184a19b4ffb0->leave($__internal_4a1d3e59a12e5444d2831a32873bf52a2ba4c014e2df1d696e5c184a19b4ffb0_prof);

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
