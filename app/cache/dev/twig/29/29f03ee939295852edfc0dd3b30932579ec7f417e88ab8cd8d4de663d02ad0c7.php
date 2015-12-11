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
        $__internal_9a8215d2906c5f7fb6b2038fdc5c0145b992b6b79460f44b30d8271ef21cbb23 = $this->env->getExtension("native_profiler");
        $__internal_9a8215d2906c5f7fb6b2038fdc5c0145b992b6b79460f44b30d8271ef21cbb23->enter($__internal_9a8215d2906c5f7fb6b2038fdc5c0145b992b6b79460f44b30d8271ef21cbb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8215d2906c5f7fb6b2038fdc5c0145b992b6b79460f44b30d8271ef21cbb23->leave($__internal_9a8215d2906c5f7fb6b2038fdc5c0145b992b6b79460f44b30d8271ef21cbb23_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c46680d5fdbb2cdf732bca63c4a5c16aa6d9a5602c3619f09ef0bd9ada69c74b = $this->env->getExtension("native_profiler");
        $__internal_c46680d5fdbb2cdf732bca63c4a5c16aa6d9a5602c3619f09ef0bd9ada69c74b->enter($__internal_c46680d5fdbb2cdf732bca63c4a5c16aa6d9a5602c3619f09ef0bd9ada69c74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c46680d5fdbb2cdf732bca63c4a5c16aa6d9a5602c3619f09ef0bd9ada69c74b->leave($__internal_c46680d5fdbb2cdf732bca63c4a5c16aa6d9a5602c3619f09ef0bd9ada69c74b_prof);

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
