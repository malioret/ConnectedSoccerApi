<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_2cb7664414224db93bb364a59ea8f620b2524152b4b35ff663570b8a3a4c3932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75b2dd61ff5fe5c94412fedc8a0ec39134acbf9033787c9cb393b81d96da061b = $this->env->getExtension("native_profiler");
        $__internal_75b2dd61ff5fe5c94412fedc8a0ec39134acbf9033787c9cb393b81d96da061b->enter($__internal_75b2dd61ff5fe5c94412fedc8a0ec39134acbf9033787c9cb393b81d96da061b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_75b2dd61ff5fe5c94412fedc8a0ec39134acbf9033787c9cb393b81d96da061b->leave($__internal_75b2dd61ff5fe5c94412fedc8a0ec39134acbf9033787c9cb393b81d96da061b_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_1d02da1fbddc58b5766f66f4a6bcc1461ceb3ccad1c3940cb8066f101224995c = $this->env->getExtension("native_profiler");
        $__internal_1d02da1fbddc58b5766f66f4a6bcc1461ceb3ccad1c3940cb8066f101224995c->enter($__internal_1d02da1fbddc58b5766f66f4a6bcc1461ceb3ccad1c3940cb8066f101224995c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_1d02da1fbddc58b5766f66f4a6bcc1461ceb3ccad1c3940cb8066f101224995c->leave($__internal_1d02da1fbddc58b5766f66f4a6bcc1461ceb3ccad1c3940cb8066f101224995c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
