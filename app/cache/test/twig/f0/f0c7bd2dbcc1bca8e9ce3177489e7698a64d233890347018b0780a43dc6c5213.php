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
        $__internal_ecee168f53855e23ae4d833524447448fbaf3445e5763a715d1a3bb6a3791701 = $this->env->getExtension("native_profiler");
        $__internal_ecee168f53855e23ae4d833524447448fbaf3445e5763a715d1a3bb6a3791701->enter($__internal_ecee168f53855e23ae4d833524447448fbaf3445e5763a715d1a3bb6a3791701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_ecee168f53855e23ae4d833524447448fbaf3445e5763a715d1a3bb6a3791701->leave($__internal_ecee168f53855e23ae4d833524447448fbaf3445e5763a715d1a3bb6a3791701_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_5ede9cfaf7171ecf83a9ef2c8f3be8a4d3aa8f68d29a7da27aaf1c81d9b4059a = $this->env->getExtension("native_profiler");
        $__internal_5ede9cfaf7171ecf83a9ef2c8f3be8a4d3aa8f68d29a7da27aaf1c81d9b4059a->enter($__internal_5ede9cfaf7171ecf83a9ef2c8f3be8a4d3aa8f68d29a7da27aaf1c81d9b4059a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_5ede9cfaf7171ecf83a9ef2c8f3be8a4d3aa8f68d29a7da27aaf1c81d9b4059a->leave($__internal_5ede9cfaf7171ecf83a9ef2c8f3be8a4d3aa8f68d29a7da27aaf1c81d9b4059a_prof);

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
