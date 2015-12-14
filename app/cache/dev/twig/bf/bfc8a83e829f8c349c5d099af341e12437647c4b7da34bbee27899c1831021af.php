<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_5b3b811a9ba286ee1fa24bd17b5ef4372d3d095e51bf74f953a65a95e07caadf extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3524f76e4fcd367047c5a7e202d57f6a6fd73d0a59fdc03b7ab018d4e2c1a3a7 = $this->env->getExtension("native_profiler");
        $__internal_3524f76e4fcd367047c5a7e202d57f6a6fd73d0a59fdc03b7ab018d4e2c1a3a7->enter($__internal_3524f76e4fcd367047c5a7e202d57f6a6fd73d0a59fdc03b7ab018d4e2c1a3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3524f76e4fcd367047c5a7e202d57f6a6fd73d0a59fdc03b7ab018d4e2c1a3a7->leave($__internal_3524f76e4fcd367047c5a7e202d57f6a6fd73d0a59fdc03b7ab018d4e2c1a3a7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_af171c368cd4a81df1113378673cba17363b51c0764c666be10a2d2d7c06fb9e = $this->env->getExtension("native_profiler");
        $__internal_af171c368cd4a81df1113378673cba17363b51c0764c666be10a2d2d7c06fb9e->enter($__internal_af171c368cd4a81df1113378673cba17363b51c0764c666be10a2d2d7c06fb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_af171c368cd4a81df1113378673cba17363b51c0764c666be10a2d2d7c06fb9e->leave($__internal_af171c368cd4a81df1113378673cba17363b51c0764c666be10a2d2d7c06fb9e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
