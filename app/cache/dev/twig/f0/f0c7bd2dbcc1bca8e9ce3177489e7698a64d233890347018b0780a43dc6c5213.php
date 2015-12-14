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
        $__internal_5c007da79998fc8f769290c342af200b799bd76263c50a6e9421aef761a79ba6 = $this->env->getExtension("native_profiler");
        $__internal_5c007da79998fc8f769290c342af200b799bd76263c50a6e9421aef761a79ba6->enter($__internal_5c007da79998fc8f769290c342af200b799bd76263c50a6e9421aef761a79ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_5c007da79998fc8f769290c342af200b799bd76263c50a6e9421aef761a79ba6->leave($__internal_5c007da79998fc8f769290c342af200b799bd76263c50a6e9421aef761a79ba6_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_8e61f11efab199bf6b7a7d8184db6a810d0970f21814bb7f57708e91fa63fe6c = $this->env->getExtension("native_profiler");
        $__internal_8e61f11efab199bf6b7a7d8184db6a810d0970f21814bb7f57708e91fa63fe6c->enter($__internal_8e61f11efab199bf6b7a7d8184db6a810d0970f21814bb7f57708e91fa63fe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_8e61f11efab199bf6b7a7d8184db6a810d0970f21814bb7f57708e91fa63fe6c->leave($__internal_8e61f11efab199bf6b7a7d8184db6a810d0970f21814bb7f57708e91fa63fe6c_prof);

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
