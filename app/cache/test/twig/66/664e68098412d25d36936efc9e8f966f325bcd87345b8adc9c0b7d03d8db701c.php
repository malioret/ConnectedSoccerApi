<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_55d86efa6db8e1db46eee62a706ee9b4881b1a49743b2f44122624e007087db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9203ddf93d29a3af3088df445d75557aa808220fba2589c1640236c3802cab3 = $this->env->getExtension("native_profiler");
        $__internal_f9203ddf93d29a3af3088df445d75557aa808220fba2589c1640236c3802cab3->enter($__internal_f9203ddf93d29a3af3088df445d75557aa808220fba2589c1640236c3802cab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f9203ddf93d29a3af3088df445d75557aa808220fba2589c1640236c3802cab3->leave($__internal_f9203ddf93d29a3af3088df445d75557aa808220fba2589c1640236c3802cab3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
