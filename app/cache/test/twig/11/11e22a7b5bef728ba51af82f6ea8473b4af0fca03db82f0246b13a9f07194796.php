<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_a3c8cadb8a5880b0cc5e21591629a8a50ca4d3931ff3e2632743f0992aee8c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_94a816bafaa105dc420667f06904cfeafb8d9b49f0bba5b57e370a8bb910f4d5 = $this->env->getExtension("native_profiler");
        $__internal_94a816bafaa105dc420667f06904cfeafb8d9b49f0bba5b57e370a8bb910f4d5->enter($__internal_94a816bafaa105dc420667f06904cfeafb8d9b49f0bba5b57e370a8bb910f4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94a816bafaa105dc420667f06904cfeafb8d9b49f0bba5b57e370a8bb910f4d5->leave($__internal_94a816bafaa105dc420667f06904cfeafb8d9b49f0bba5b57e370a8bb910f4d5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc1775b36642056315cfdf61f96dd47cc9c5c74fbd33c07c0f8fcbb31f3323e9 = $this->env->getExtension("native_profiler");
        $__internal_fc1775b36642056315cfdf61f96dd47cc9c5c74fbd33c07c0f8fcbb31f3323e9->enter($__internal_fc1775b36642056315cfdf61f96dd47cc9c5c74fbd33c07c0f8fcbb31f3323e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fc1775b36642056315cfdf61f96dd47cc9c5c74fbd33c07c0f8fcbb31f3323e9->leave($__internal_fc1775b36642056315cfdf61f96dd47cc9c5c74fbd33c07c0f8fcbb31f3323e9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
