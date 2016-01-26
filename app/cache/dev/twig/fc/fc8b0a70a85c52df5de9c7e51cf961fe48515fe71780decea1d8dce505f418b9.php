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
        $__internal_12f48e9e012fc6eecc269a372bfc0b0af87477c68fd57cda2139388f2af05cc1 = $this->env->getExtension("native_profiler");
        $__internal_12f48e9e012fc6eecc269a372bfc0b0af87477c68fd57cda2139388f2af05cc1->enter($__internal_12f48e9e012fc6eecc269a372bfc0b0af87477c68fd57cda2139388f2af05cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_12f48e9e012fc6eecc269a372bfc0b0af87477c68fd57cda2139388f2af05cc1->leave($__internal_12f48e9e012fc6eecc269a372bfc0b0af87477c68fd57cda2139388f2af05cc1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3cc54711d5f1e5f866d6524bfa6d72f48ad0edce0354cadb772732ec5a3b9eb0 = $this->env->getExtension("native_profiler");
        $__internal_3cc54711d5f1e5f866d6524bfa6d72f48ad0edce0354cadb772732ec5a3b9eb0->enter($__internal_3cc54711d5f1e5f866d6524bfa6d72f48ad0edce0354cadb772732ec5a3b9eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3cc54711d5f1e5f866d6524bfa6d72f48ad0edce0354cadb772732ec5a3b9eb0->leave($__internal_3cc54711d5f1e5f866d6524bfa6d72f48ad0edce0354cadb772732ec5a3b9eb0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fd32d9ae71302d31cfa811005fbe5ecc80834c8d977d31d2c62d03a458a53321 = $this->env->getExtension("native_profiler");
        $__internal_fd32d9ae71302d31cfa811005fbe5ecc80834c8d977d31d2c62d03a458a53321->enter($__internal_fd32d9ae71302d31cfa811005fbe5ecc80834c8d977d31d2c62d03a458a53321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fd32d9ae71302d31cfa811005fbe5ecc80834c8d977d31d2c62d03a458a53321->leave($__internal_fd32d9ae71302d31cfa811005fbe5ecc80834c8d977d31d2c62d03a458a53321_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_484ca37fcc4afb5003730182597210bf0f3567736189f150569b4aefb95be5cf = $this->env->getExtension("native_profiler");
        $__internal_484ca37fcc4afb5003730182597210bf0f3567736189f150569b4aefb95be5cf->enter($__internal_484ca37fcc4afb5003730182597210bf0f3567736189f150569b4aefb95be5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_484ca37fcc4afb5003730182597210bf0f3567736189f150569b4aefb95be5cf->leave($__internal_484ca37fcc4afb5003730182597210bf0f3567736189f150569b4aefb95be5cf_prof);

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
