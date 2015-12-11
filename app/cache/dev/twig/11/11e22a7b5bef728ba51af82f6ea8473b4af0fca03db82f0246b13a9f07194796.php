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
        $__internal_2f55fe707167efa43dede008e8b40124f1752bd6b42fddb8c62df15431422400 = $this->env->getExtension("native_profiler");
        $__internal_2f55fe707167efa43dede008e8b40124f1752bd6b42fddb8c62df15431422400->enter($__internal_2f55fe707167efa43dede008e8b40124f1752bd6b42fddb8c62df15431422400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f55fe707167efa43dede008e8b40124f1752bd6b42fddb8c62df15431422400->leave($__internal_2f55fe707167efa43dede008e8b40124f1752bd6b42fddb8c62df15431422400_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9618e809612905b20748cc749d62145080ea698a6a255e84d718786ce7d80c6d = $this->env->getExtension("native_profiler");
        $__internal_9618e809612905b20748cc749d62145080ea698a6a255e84d718786ce7d80c6d->enter($__internal_9618e809612905b20748cc749d62145080ea698a6a255e84d718786ce7d80c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9618e809612905b20748cc749d62145080ea698a6a255e84d718786ce7d80c6d->leave($__internal_9618e809612905b20748cc749d62145080ea698a6a255e84d718786ce7d80c6d_prof);

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
