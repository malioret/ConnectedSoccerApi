<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_5444c70e0882e0f37e390c118ac9f2eea8be8e8eff5400498c5a83bbb1395c0a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f126cc477c4d78f1062e79b838de5ca18d68e51a26affa73aa19e66f8d785149 = $this->env->getExtension("native_profiler");
        $__internal_f126cc477c4d78f1062e79b838de5ca18d68e51a26affa73aa19e66f8d785149->enter($__internal_f126cc477c4d78f1062e79b838de5ca18d68e51a26affa73aa19e66f8d785149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f126cc477c4d78f1062e79b838de5ca18d68e51a26affa73aa19e66f8d785149->leave($__internal_f126cc477c4d78f1062e79b838de5ca18d68e51a26affa73aa19e66f8d785149_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_025d4776d7e8af59fa9bbe6981ca88903d8017e84b0e477802895585febcdcb3 = $this->env->getExtension("native_profiler");
        $__internal_025d4776d7e8af59fa9bbe6981ca88903d8017e84b0e477802895585febcdcb3->enter($__internal_025d4776d7e8af59fa9bbe6981ca88903d8017e84b0e477802895585febcdcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"#\">
        <i class=\"glyphicon glyphicon-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_025d4776d7e8af59fa9bbe6981ca88903d8017e84b0e477802895585febcdcb3->leave($__internal_025d4776d7e8af59fa9bbe6981ca88903d8017e84b0e477802895585febcdcb3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-default" href="#">*/
/*         <i class="glyphicon glyphicon-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
