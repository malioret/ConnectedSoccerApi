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
        $__internal_0dd0a13576e89addb5dd6bf103a8625b7a49c445b38fa2257820193de81c1cc1 = $this->env->getExtension("native_profiler");
        $__internal_0dd0a13576e89addb5dd6bf103a8625b7a49c445b38fa2257820193de81c1cc1->enter($__internal_0dd0a13576e89addb5dd6bf103a8625b7a49c445b38fa2257820193de81c1cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerCommentBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_0dd0a13576e89addb5dd6bf103a8625b7a49c445b38fa2257820193de81c1cc1->leave($__internal_0dd0a13576e89addb5dd6bf103a8625b7a49c445b38fa2257820193de81c1cc1_prof);

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
