<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_a3c8cadb8a5880b0cc5e21591629a8a50ca4d3931ff3e2632743f0992aee8c0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_615d4cf4c7809752d04d4cf20201e751337dc105b1a66b8762f65fd91ecf28f1 = $this->env->getExtension("native_profiler");
        $__internal_615d4cf4c7809752d04d4cf20201e751337dc105b1a66b8762f65fd91ecf28f1->enter($__internal_615d4cf4c7809752d04d4cf20201e751337dc105b1a66b8762f65fd91ecf28f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_615d4cf4c7809752d04d4cf20201e751337dc105b1a66b8762f65fd91ecf28f1->leave($__internal_615d4cf4c7809752d04d4cf20201e751337dc105b1a66b8762f65fd91ecf28f1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0edbc9701a326620537cd9a1c50bb20551be3487980b88aa2fef43ad06b66e3 = $this->env->getExtension("native_profiler");
        $__internal_b0edbc9701a326620537cd9a1c50bb20551be3487980b88aa2fef43ad06b66e3->enter($__internal_b0edbc9701a326620537cd9a1c50bb20551be3487980b88aa2fef43ad06b66e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b0edbc9701a326620537cd9a1c50bb20551be3487980b88aa2fef43ad06b66e3->leave($__internal_b0edbc9701a326620537cd9a1c50bb20551be3487980b88aa2fef43ad06b66e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
