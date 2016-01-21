<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_2bc68ef8d9383725b35655ae1c192d6f6a58607978135e3f64b0d6a142a8c3e6 extends Twig_Template
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
        $__internal_6dd44f919c6bad9fde3b2c2d556ee88f04c3f5cbc760c4084c1bc86dd12bd6d8 = $this->env->getExtension("native_profiler");
        $__internal_6dd44f919c6bad9fde3b2c2d556ee88f04c3f5cbc760c4084c1bc86dd12bd6d8->enter($__internal_6dd44f919c6bad9fde3b2c2d556ee88f04c3f5cbc760c4084c1bc86dd12bd6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_6dd44f919c6bad9fde3b2c2d556ee88f04c3f5cbc760c4084c1bc86dd12bd6d8->leave($__internal_6dd44f919c6bad9fde3b2c2d556ee88f04c3f5cbc760c4084c1bc86dd12bd6d8_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_096ae8b35b0d8492b39ebb12d42972dcea1227e593b7b17a8bd377126287efbb = $this->env->getExtension("native_profiler");
        $__internal_096ae8b35b0d8492b39ebb12d42972dcea1227e593b7b17a8bd377126287efbb->enter($__internal_096ae8b35b0d8492b39ebb12d42972dcea1227e593b7b17a8bd377126287efbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_096ae8b35b0d8492b39ebb12d42972dcea1227e593b7b17a8bd377126287efbb->leave($__internal_096ae8b35b0d8492b39ebb12d42972dcea1227e593b7b17a8bd377126287efbb_prof);

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
