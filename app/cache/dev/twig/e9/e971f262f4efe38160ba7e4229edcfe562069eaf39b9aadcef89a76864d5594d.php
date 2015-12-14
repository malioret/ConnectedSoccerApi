<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_081b2ed3fe04f2ae85307582e254595b293001cfd5d977266881ee516801eeca extends Twig_Template
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
        $__internal_dd501d341e58d9841a4c60742a38bd4b79f4b71caeda1ef7f471d0c5dc8d0f2b = $this->env->getExtension("native_profiler");
        $__internal_dd501d341e58d9841a4c60742a38bd4b79f4b71caeda1ef7f471d0c5dc8d0f2b->enter($__internal_dd501d341e58d9841a4c60742a38bd4b79f4b71caeda1ef7f471d0c5dc8d0f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_dd501d341e58d9841a4c60742a38bd4b79f4b71caeda1ef7f471d0c5dc8d0f2b->leave($__internal_dd501d341e58d9841a4c60742a38bd4b79f4b71caeda1ef7f471d0c5dc8d0f2b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a3eeaebaddd47c111096b93a249b00c207b6ef14d2d84164cb8df4b65208a062 = $this->env->getExtension("native_profiler");
        $__internal_a3eeaebaddd47c111096b93a249b00c207b6ef14d2d84164cb8df4b65208a062->enter($__internal_a3eeaebaddd47c111096b93a249b00c207b6ef14d2d84164cb8df4b65208a062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a3eeaebaddd47c111096b93a249b00c207b6ef14d2d84164cb8df4b65208a062->leave($__internal_a3eeaebaddd47c111096b93a249b00c207b6ef14d2d84164cb8df4b65208a062_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9d022e6b333d2cb8b5330fb13449d83667133ddf7209ee0d47323c5f80a13e3a = $this->env->getExtension("native_profiler");
        $__internal_9d022e6b333d2cb8b5330fb13449d83667133ddf7209ee0d47323c5f80a13e3a->enter($__internal_9d022e6b333d2cb8b5330fb13449d83667133ddf7209ee0d47323c5f80a13e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9d022e6b333d2cb8b5330fb13449d83667133ddf7209ee0d47323c5f80a13e3a->leave($__internal_9d022e6b333d2cb8b5330fb13449d83667133ddf7209ee0d47323c5f80a13e3a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_624c52af0c9bb65595e3a351de86d4ec3ac865469f62eeb308216161cc6971e7 = $this->env->getExtension("native_profiler");
        $__internal_624c52af0c9bb65595e3a351de86d4ec3ac865469f62eeb308216161cc6971e7->enter($__internal_624c52af0c9bb65595e3a351de86d4ec3ac865469f62eeb308216161cc6971e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_624c52af0c9bb65595e3a351de86d4ec3ac865469f62eeb308216161cc6971e7->leave($__internal_624c52af0c9bb65595e3a351de86d4ec3ac865469f62eeb308216161cc6971e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
