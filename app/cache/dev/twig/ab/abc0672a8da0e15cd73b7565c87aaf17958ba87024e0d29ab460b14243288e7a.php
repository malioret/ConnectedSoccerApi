<?php

/* SoccerCommentBundle:Default:index.html.twig */
class __TwigTemplate_b1e06a1375fdd98355cb929b53d2621d4656de1fcf8bec2fb4056d80a90c9dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d54fdbe0ed21e93186a743533d4ef5a70f24988c4e44c0e219c57ca3a8ec0e67 = $this->env->getExtension("native_profiler");
        $__internal_d54fdbe0ed21e93186a743533d4ef5a70f24988c4e44c0e219c57ca3a8ec0e67->enter($__internal_d54fdbe0ed21e93186a743533d4ef5a70f24988c4e44c0e219c57ca3a8ec0e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerCommentBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_d54fdbe0ed21e93186a743533d4ef5a70f24988c4e44c0e219c57ca3a8ec0e67->leave($__internal_d54fdbe0ed21e93186a743533d4ef5a70f24988c4e44c0e219c57ca3a8ec0e67_prof);

    }

    public function getTemplateName()
    {
        return "SoccerCommentBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
