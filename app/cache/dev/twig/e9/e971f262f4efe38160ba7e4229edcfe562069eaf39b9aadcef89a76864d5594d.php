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
        $__internal_b07bdafeb8158277553f5e0ef2963106d5ca6cd6cb4fab561cfd835a49a1a8bc = $this->env->getExtension("native_profiler");
        $__internal_b07bdafeb8158277553f5e0ef2963106d5ca6cd6cb4fab561cfd835a49a1a8bc->enter($__internal_b07bdafeb8158277553f5e0ef2963106d5ca6cd6cb4fab561cfd835a49a1a8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b07bdafeb8158277553f5e0ef2963106d5ca6cd6cb4fab561cfd835a49a1a8bc->leave($__internal_b07bdafeb8158277553f5e0ef2963106d5ca6cd6cb4fab561cfd835a49a1a8bc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2230a0cbe33fa3aeb361e594f0a6551ec9f4f327332230ba13c625ea83495890 = $this->env->getExtension("native_profiler");
        $__internal_2230a0cbe33fa3aeb361e594f0a6551ec9f4f327332230ba13c625ea83495890->enter($__internal_2230a0cbe33fa3aeb361e594f0a6551ec9f4f327332230ba13c625ea83495890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2230a0cbe33fa3aeb361e594f0a6551ec9f4f327332230ba13c625ea83495890->leave($__internal_2230a0cbe33fa3aeb361e594f0a6551ec9f4f327332230ba13c625ea83495890_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f9686b41ee1a8fc03ad0f6af895e5010e44ae896f2a76ebe8a2f2904bebaa921 = $this->env->getExtension("native_profiler");
        $__internal_f9686b41ee1a8fc03ad0f6af895e5010e44ae896f2a76ebe8a2f2904bebaa921->enter($__internal_f9686b41ee1a8fc03ad0f6af895e5010e44ae896f2a76ebe8a2f2904bebaa921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f9686b41ee1a8fc03ad0f6af895e5010e44ae896f2a76ebe8a2f2904bebaa921->leave($__internal_f9686b41ee1a8fc03ad0f6af895e5010e44ae896f2a76ebe8a2f2904bebaa921_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4a0cdc033fb8f9c2bfaca957c87e7bb7d0ed8d486cd0deec9ca4ae402c2cc2fd = $this->env->getExtension("native_profiler");
        $__internal_4a0cdc033fb8f9c2bfaca957c87e7bb7d0ed8d486cd0deec9ca4ae402c2cc2fd->enter($__internal_4a0cdc033fb8f9c2bfaca957c87e7bb7d0ed8d486cd0deec9ca4ae402c2cc2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4a0cdc033fb8f9c2bfaca957c87e7bb7d0ed8d486cd0deec9ca4ae402c2cc2fd->leave($__internal_4a0cdc033fb8f9c2bfaca957c87e7bb7d0ed8d486cd0deec9ca4ae402c2cc2fd_prof);

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
