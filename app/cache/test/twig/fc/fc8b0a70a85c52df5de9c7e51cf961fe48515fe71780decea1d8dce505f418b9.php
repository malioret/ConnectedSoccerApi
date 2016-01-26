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
        $__internal_73fbff51059ac4d9d1759270e03abab7256594bbea64ccea2dc94c62240bf97d = $this->env->getExtension("native_profiler");
        $__internal_73fbff51059ac4d9d1759270e03abab7256594bbea64ccea2dc94c62240bf97d->enter($__internal_73fbff51059ac4d9d1759270e03abab7256594bbea64ccea2dc94c62240bf97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_73fbff51059ac4d9d1759270e03abab7256594bbea64ccea2dc94c62240bf97d->leave($__internal_73fbff51059ac4d9d1759270e03abab7256594bbea64ccea2dc94c62240bf97d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bbac474e89e62e75c209c20faf605e14f8666dcd6de50a17b28ea47b68e8dcd4 = $this->env->getExtension("native_profiler");
        $__internal_bbac474e89e62e75c209c20faf605e14f8666dcd6de50a17b28ea47b68e8dcd4->enter($__internal_bbac474e89e62e75c209c20faf605e14f8666dcd6de50a17b28ea47b68e8dcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bbac474e89e62e75c209c20faf605e14f8666dcd6de50a17b28ea47b68e8dcd4->leave($__internal_bbac474e89e62e75c209c20faf605e14f8666dcd6de50a17b28ea47b68e8dcd4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dde4872d61e65b77bf7a46c1f3534988d5c5d88d92197e4453eb32bcbbae1477 = $this->env->getExtension("native_profiler");
        $__internal_dde4872d61e65b77bf7a46c1f3534988d5c5d88d92197e4453eb32bcbbae1477->enter($__internal_dde4872d61e65b77bf7a46c1f3534988d5c5d88d92197e4453eb32bcbbae1477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dde4872d61e65b77bf7a46c1f3534988d5c5d88d92197e4453eb32bcbbae1477->leave($__internal_dde4872d61e65b77bf7a46c1f3534988d5c5d88d92197e4453eb32bcbbae1477_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b6d0bfd05b41ef2c2e62e31a6262ac0680801282067f19f832e8ee54c4df4087 = $this->env->getExtension("native_profiler");
        $__internal_b6d0bfd05b41ef2c2e62e31a6262ac0680801282067f19f832e8ee54c4df4087->enter($__internal_b6d0bfd05b41ef2c2e62e31a6262ac0680801282067f19f832e8ee54c4df4087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b6d0bfd05b41ef2c2e62e31a6262ac0680801282067f19f832e8ee54c4df4087->leave($__internal_b6d0bfd05b41ef2c2e62e31a6262ac0680801282067f19f832e8ee54c4df4087_prof);

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
