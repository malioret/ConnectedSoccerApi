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
        $__internal_c7ee1fdefa1d6fbe9a0c27bbf80c3b35594244f72822cda62215efc209d31f3e = $this->env->getExtension("native_profiler");
        $__internal_c7ee1fdefa1d6fbe9a0c27bbf80c3b35594244f72822cda62215efc209d31f3e->enter($__internal_c7ee1fdefa1d6fbe9a0c27bbf80c3b35594244f72822cda62215efc209d31f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7ee1fdefa1d6fbe9a0c27bbf80c3b35594244f72822cda62215efc209d31f3e->leave($__internal_c7ee1fdefa1d6fbe9a0c27bbf80c3b35594244f72822cda62215efc209d31f3e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4834c9b2cc1d4ccb36f2f7682d615d0b3b277fdb53fdcb7eaac4fa853b073c6a = $this->env->getExtension("native_profiler");
        $__internal_4834c9b2cc1d4ccb36f2f7682d615d0b3b277fdb53fdcb7eaac4fa853b073c6a->enter($__internal_4834c9b2cc1d4ccb36f2f7682d615d0b3b277fdb53fdcb7eaac4fa853b073c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_4834c9b2cc1d4ccb36f2f7682d615d0b3b277fdb53fdcb7eaac4fa853b073c6a->leave($__internal_4834c9b2cc1d4ccb36f2f7682d615d0b3b277fdb53fdcb7eaac4fa853b073c6a_prof);

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
