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
        $__internal_875e25c17136c68047b215858fd3c9425228aea31919733e0cd77fc7469a8ab8 = $this->env->getExtension("native_profiler");
        $__internal_875e25c17136c68047b215858fd3c9425228aea31919733e0cd77fc7469a8ab8->enter($__internal_875e25c17136c68047b215858fd3c9425228aea31919733e0cd77fc7469a8ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_875e25c17136c68047b215858fd3c9425228aea31919733e0cd77fc7469a8ab8->leave($__internal_875e25c17136c68047b215858fd3c9425228aea31919733e0cd77fc7469a8ab8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bb55163bc6cae95bada4e6e25659e35192b6970496ccb42bdf886ef0c2cdb4fe = $this->env->getExtension("native_profiler");
        $__internal_bb55163bc6cae95bada4e6e25659e35192b6970496ccb42bdf886ef0c2cdb4fe->enter($__internal_bb55163bc6cae95bada4e6e25659e35192b6970496ccb42bdf886ef0c2cdb4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_bb55163bc6cae95bada4e6e25659e35192b6970496ccb42bdf886ef0c2cdb4fe->leave($__internal_bb55163bc6cae95bada4e6e25659e35192b6970496ccb42bdf886ef0c2cdb4fe_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_188c3fe40d925bf59e8d9e0da05111eacfdc1d873cbb84d9379f332260e06f28 = $this->env->getExtension("native_profiler");
        $__internal_188c3fe40d925bf59e8d9e0da05111eacfdc1d873cbb84d9379f332260e06f28->enter($__internal_188c3fe40d925bf59e8d9e0da05111eacfdc1d873cbb84d9379f332260e06f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_188c3fe40d925bf59e8d9e0da05111eacfdc1d873cbb84d9379f332260e06f28->leave($__internal_188c3fe40d925bf59e8d9e0da05111eacfdc1d873cbb84d9379f332260e06f28_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ae98aceec0ba2baea7f3803ea28292fbedde488acec7a8107020b364ac24f32e = $this->env->getExtension("native_profiler");
        $__internal_ae98aceec0ba2baea7f3803ea28292fbedde488acec7a8107020b364ac24f32e->enter($__internal_ae98aceec0ba2baea7f3803ea28292fbedde488acec7a8107020b364ac24f32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ae98aceec0ba2baea7f3803ea28292fbedde488acec7a8107020b364ac24f32e->leave($__internal_ae98aceec0ba2baea7f3803ea28292fbedde488acec7a8107020b364ac24f32e_prof);

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
