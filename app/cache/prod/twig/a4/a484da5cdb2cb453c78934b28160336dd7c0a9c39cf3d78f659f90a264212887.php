<?php

/* SubwayBuddyUserBundle:User:getUsers.html.twig */
class __TwigTemplate_56f9317e03e6f33fb0399f171adb935ec1a081f6cfddf0787f2097e8ddf8c1ef extends Twig_Template
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
        $__internal_90da372cef080d5e8def38132968f300fc9b5d59b27e2dda8dcb7d73d7929cf5 = $this->env->getExtension("native_profiler");
        $__internal_90da372cef080d5e8def38132968f300fc9b5d59b27e2dda8dcb7d73d7929cf5->enter($__internal_90da372cef080d5e8def38132968f300fc9b5d59b27e2dda8dcb7d73d7929cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SubwayBuddyUserBundle:User:getUsers.html.twig"));

        // line 1
        echo "<h1>Utilisateurs</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()));
            echo " </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
        
        $__internal_90da372cef080d5e8def38132968f300fc9b5d59b27e2dda8dcb7d73d7929cf5->leave($__internal_90da372cef080d5e8def38132968f300fc9b5d59b27e2dda8dcb7d73d7929cf5_prof);

    }

    public function getTemplateName()
    {
        return "SubwayBuddyUserBundle:User:getUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <h1>Utilisateurs</h1>*/
/* <ul>*/
/*     {% for user in users %}*/
/*         <li>{{ user.username|e }} </li>*/
/*     {% endfor %}*/
/* </ul>*/
