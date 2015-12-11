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
        $__internal_0d4e57c9e821a8df43999f0e90f8ab33c7ba1a92344360f7c37a4174c42ee6ab = $this->env->getExtension("native_profiler");
        $__internal_0d4e57c9e821a8df43999f0e90f8ab33c7ba1a92344360f7c37a4174c42ee6ab->enter($__internal_0d4e57c9e821a8df43999f0e90f8ab33c7ba1a92344360f7c37a4174c42ee6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_0d4e57c9e821a8df43999f0e90f8ab33c7ba1a92344360f7c37a4174c42ee6ab->leave($__internal_0d4e57c9e821a8df43999f0e90f8ab33c7ba1a92344360f7c37a4174c42ee6ab_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_f9d1060114e2ba5c475b9f435824c643376c01266a27c746930286f356a94b35 = $this->env->getExtension("native_profiler");
        $__internal_f9d1060114e2ba5c475b9f435824c643376c01266a27c746930286f356a94b35->enter($__internal_f9d1060114e2ba5c475b9f435824c643376c01266a27c746930286f356a94b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_f9d1060114e2ba5c475b9f435824c643376c01266a27c746930286f356a94b35->leave($__internal_f9d1060114e2ba5c475b9f435824c643376c01266a27c746930286f356a94b35_prof);

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
