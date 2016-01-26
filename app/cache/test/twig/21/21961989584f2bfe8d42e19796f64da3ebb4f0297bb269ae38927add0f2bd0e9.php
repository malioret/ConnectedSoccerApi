<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2b3c0113c08ef4dbcce3a0b584af6bdf693adf58b2463dda20049b69241a0915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_4ddbcd9c0897e4b07ebd779a8726cc87c17c8539ce93ddf0d85e6d1adac659f4 = $this->env->getExtension("native_profiler");
        $__internal_4ddbcd9c0897e4b07ebd779a8726cc87c17c8539ce93ddf0d85e6d1adac659f4->enter($__internal_4ddbcd9c0897e4b07ebd779a8726cc87c17c8539ce93ddf0d85e6d1adac659f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ddbcd9c0897e4b07ebd779a8726cc87c17c8539ce93ddf0d85e6d1adac659f4->leave($__internal_4ddbcd9c0897e4b07ebd779a8726cc87c17c8539ce93ddf0d85e6d1adac659f4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58befa8398d10efb23777ad2b6d4c952e415e4405f9e59798952b414fc89e89c = $this->env->getExtension("native_profiler");
        $__internal_58befa8398d10efb23777ad2b6d4c952e415e4405f9e59798952b414fc89e89c->enter($__internal_58befa8398d10efb23777ad2b6d4c952e415e4405f9e59798952b414fc89e89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_58befa8398d10efb23777ad2b6d4c952e415e4405f9e59798952b414fc89e89c->leave($__internal_58befa8398d10efb23777ad2b6d4c952e415e4405f9e59798952b414fc89e89c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
