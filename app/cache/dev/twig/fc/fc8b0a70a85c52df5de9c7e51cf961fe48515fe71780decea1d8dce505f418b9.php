<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3bb5f238783bee82d811e0815917fb4101bccec624df77721d31d2641eaea104 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c0d76b39508648a6c68f68df60098a4f038fb2194a63d8cb9bbae1ee91cac6c = $this->env->getExtension("native_profiler");
        $__internal_3c0d76b39508648a6c68f68df60098a4f038fb2194a63d8cb9bbae1ee91cac6c->enter($__internal_3c0d76b39508648a6c68f68df60098a4f038fb2194a63d8cb9bbae1ee91cac6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3c0d76b39508648a6c68f68df60098a4f038fb2194a63d8cb9bbae1ee91cac6c->leave($__internal_3c0d76b39508648a6c68f68df60098a4f038fb2194a63d8cb9bbae1ee91cac6c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b6feef1151fb78a217a19590a9bceaa445570270cbc0460241f6e1c01b2ed257 = $this->env->getExtension("native_profiler");
        $__internal_b6feef1151fb78a217a19590a9bceaa445570270cbc0460241f6e1c01b2ed257->enter($__internal_b6feef1151fb78a217a19590a9bceaa445570270cbc0460241f6e1c01b2ed257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b6feef1151fb78a217a19590a9bceaa445570270cbc0460241f6e1c01b2ed257->leave($__internal_b6feef1151fb78a217a19590a9bceaa445570270cbc0460241f6e1c01b2ed257_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2bbd37a5fa1e8b1313d5ce859cdddea6a8e5de8ae27a3ed426a4e1ec4d696871 = $this->env->getExtension("native_profiler");
        $__internal_2bbd37a5fa1e8b1313d5ce859cdddea6a8e5de8ae27a3ed426a4e1ec4d696871->enter($__internal_2bbd37a5fa1e8b1313d5ce859cdddea6a8e5de8ae27a3ed426a4e1ec4d696871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2bbd37a5fa1e8b1313d5ce859cdddea6a8e5de8ae27a3ed426a4e1ec4d696871->leave($__internal_2bbd37a5fa1e8b1313d5ce859cdddea6a8e5de8ae27a3ed426a4e1ec4d696871_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3943d37d97bb364ccbd0fa4d6a47014dc5fd7cb58b46229dbe97a8c26d0f0ad6 = $this->env->getExtension("native_profiler");
        $__internal_3943d37d97bb364ccbd0fa4d6a47014dc5fd7cb58b46229dbe97a8c26d0f0ad6->enter($__internal_3943d37d97bb364ccbd0fa4d6a47014dc5fd7cb58b46229dbe97a8c26d0f0ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3943d37d97bb364ccbd0fa4d6a47014dc5fd7cb58b46229dbe97a8c26d0f0ad6->leave($__internal_3943d37d97bb364ccbd0fa4d6a47014dc5fd7cb58b46229dbe97a8c26d0f0ad6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
