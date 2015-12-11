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
        $__internal_58503a35a2fefe609530577a0ed3625a33baf43c8b4c6500c509c9cb1f531527 = $this->env->getExtension("native_profiler");
        $__internal_58503a35a2fefe609530577a0ed3625a33baf43c8b4c6500c509c9cb1f531527->enter($__internal_58503a35a2fefe609530577a0ed3625a33baf43c8b4c6500c509c9cb1f531527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_58503a35a2fefe609530577a0ed3625a33baf43c8b4c6500c509c9cb1f531527->leave($__internal_58503a35a2fefe609530577a0ed3625a33baf43c8b4c6500c509c9cb1f531527_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dc401ee788b417a4cade8b54f73b93b353c18db02bc74570755eead385715716 = $this->env->getExtension("native_profiler");
        $__internal_dc401ee788b417a4cade8b54f73b93b353c18db02bc74570755eead385715716->enter($__internal_dc401ee788b417a4cade8b54f73b93b353c18db02bc74570755eead385715716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dc401ee788b417a4cade8b54f73b93b353c18db02bc74570755eead385715716->leave($__internal_dc401ee788b417a4cade8b54f73b93b353c18db02bc74570755eead385715716_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0e27d163c15e3790cfe8f3b7304f5bff4a5f80d257f6943457228ffb829c76df = $this->env->getExtension("native_profiler");
        $__internal_0e27d163c15e3790cfe8f3b7304f5bff4a5f80d257f6943457228ffb829c76df->enter($__internal_0e27d163c15e3790cfe8f3b7304f5bff4a5f80d257f6943457228ffb829c76df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0e27d163c15e3790cfe8f3b7304f5bff4a5f80d257f6943457228ffb829c76df->leave($__internal_0e27d163c15e3790cfe8f3b7304f5bff4a5f80d257f6943457228ffb829c76df_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3fd1914fef50c332c65354d53f31ee7783d6379e5278fc2f471dad1939cd1f73 = $this->env->getExtension("native_profiler");
        $__internal_3fd1914fef50c332c65354d53f31ee7783d6379e5278fc2f471dad1939cd1f73->enter($__internal_3fd1914fef50c332c65354d53f31ee7783d6379e5278fc2f471dad1939cd1f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3fd1914fef50c332c65354d53f31ee7783d6379e5278fc2f471dad1939cd1f73->leave($__internal_3fd1914fef50c332c65354d53f31ee7783d6379e5278fc2f471dad1939cd1f73_prof);

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
