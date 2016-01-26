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
        $__internal_e0e5495e178729d434d1d54b65b8ec54f03c2735f5b26fc51be131505f2a47ec = $this->env->getExtension("native_profiler");
        $__internal_e0e5495e178729d434d1d54b65b8ec54f03c2735f5b26fc51be131505f2a47ec->enter($__internal_e0e5495e178729d434d1d54b65b8ec54f03c2735f5b26fc51be131505f2a47ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e0e5495e178729d434d1d54b65b8ec54f03c2735f5b26fc51be131505f2a47ec->leave($__internal_e0e5495e178729d434d1d54b65b8ec54f03c2735f5b26fc51be131505f2a47ec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8789a85b4d63bd47e1dc0864ac45aeb1b053b83cbe79b15789b0b4f449811d3f = $this->env->getExtension("native_profiler");
        $__internal_8789a85b4d63bd47e1dc0864ac45aeb1b053b83cbe79b15789b0b4f449811d3f->enter($__internal_8789a85b4d63bd47e1dc0864ac45aeb1b053b83cbe79b15789b0b4f449811d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8789a85b4d63bd47e1dc0864ac45aeb1b053b83cbe79b15789b0b4f449811d3f->leave($__internal_8789a85b4d63bd47e1dc0864ac45aeb1b053b83cbe79b15789b0b4f449811d3f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_26f8cc3c6d4eca10c684dbea9d804a836dbeb9ffc8ebc50a4c81310fd8fc91a1 = $this->env->getExtension("native_profiler");
        $__internal_26f8cc3c6d4eca10c684dbea9d804a836dbeb9ffc8ebc50a4c81310fd8fc91a1->enter($__internal_26f8cc3c6d4eca10c684dbea9d804a836dbeb9ffc8ebc50a4c81310fd8fc91a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_26f8cc3c6d4eca10c684dbea9d804a836dbeb9ffc8ebc50a4c81310fd8fc91a1->leave($__internal_26f8cc3c6d4eca10c684dbea9d804a836dbeb9ffc8ebc50a4c81310fd8fc91a1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aae5807eb7bbfd545e77e58e6b9e03649e4b424af07dc63fa767a487da1586a5 = $this->env->getExtension("native_profiler");
        $__internal_aae5807eb7bbfd545e77e58e6b9e03649e4b424af07dc63fa767a487da1586a5->enter($__internal_aae5807eb7bbfd545e77e58e6b9e03649e4b424af07dc63fa767a487da1586a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aae5807eb7bbfd545e77e58e6b9e03649e4b424af07dc63fa767a487da1586a5->leave($__internal_aae5807eb7bbfd545e77e58e6b9e03649e4b424af07dc63fa767a487da1586a5_prof);

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
