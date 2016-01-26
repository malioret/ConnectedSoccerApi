<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a6b576a8463995043fd39e55f8dc3c25eb796e2753b0fa142ed4048391da0daa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72e64b18d37686eaff9255e9a29b3517b376fd8ca3bb16514e325e477c22e3a4 = $this->env->getExtension("native_profiler");
        $__internal_72e64b18d37686eaff9255e9a29b3517b376fd8ca3bb16514e325e477c22e3a4->enter($__internal_72e64b18d37686eaff9255e9a29b3517b376fd8ca3bb16514e325e477c22e3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72e64b18d37686eaff9255e9a29b3517b376fd8ca3bb16514e325e477c22e3a4->leave($__internal_72e64b18d37686eaff9255e9a29b3517b376fd8ca3bb16514e325e477c22e3a4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0f22611283f62d5b7d8aa04b9497505916ad75ef774eb7c387e3c719cae38ee = $this->env->getExtension("native_profiler");
        $__internal_d0f22611283f62d5b7d8aa04b9497505916ad75ef774eb7c387e3c719cae38ee->enter($__internal_d0f22611283f62d5b7d8aa04b9497505916ad75ef774eb7c387e3c719cae38ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d0f22611283f62d5b7d8aa04b9497505916ad75ef774eb7c387e3c719cae38ee->leave($__internal_d0f22611283f62d5b7d8aa04b9497505916ad75ef774eb7c387e3c719cae38ee_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
