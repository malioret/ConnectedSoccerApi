<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_57ad38c391d77080d2179a1df031e7a38c0e75286d35c8c4bd75646f1eb5bbf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_230ab0e63ad5181731dbe6b9a502a2aa236adafd20df07b30a4825b4d107b9d1 = $this->env->getExtension("native_profiler");
        $__internal_230ab0e63ad5181731dbe6b9a502a2aa236adafd20df07b30a4825b4d107b9d1->enter($__internal_230ab0e63ad5181731dbe6b9a502a2aa236adafd20df07b30a4825b4d107b9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_230ab0e63ad5181731dbe6b9a502a2aa236adafd20df07b30a4825b4d107b9d1->leave($__internal_230ab0e63ad5181731dbe6b9a502a2aa236adafd20df07b30a4825b4d107b9d1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_423c4c429133ede8a9a1c05fa88d92c2286474f1b733eff5218b8ad4921483f8 = $this->env->getExtension("native_profiler");
        $__internal_423c4c429133ede8a9a1c05fa88d92c2286474f1b733eff5218b8ad4921483f8->enter($__internal_423c4c429133ede8a9a1c05fa88d92c2286474f1b733eff5218b8ad4921483f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_423c4c429133ede8a9a1c05fa88d92c2286474f1b733eff5218b8ad4921483f8->leave($__internal_423c4c429133ede8a9a1c05fa88d92c2286474f1b733eff5218b8ad4921483f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
