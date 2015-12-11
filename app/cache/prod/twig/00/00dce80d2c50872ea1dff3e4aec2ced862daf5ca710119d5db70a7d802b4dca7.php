<?php

/* SubwayBuddyUserBundle:User:getUsers.html.twig */
class __TwigTemplate_438a775f335462b32db980a66a872fc616512d7fc453157fb8862018f8284601 extends Twig_Template
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
        // line 1
        echo "<h1>Utilisateurs</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
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
        return array (  36 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h1>Utilisateurs</h1>*/
/* <ul>*/
/*     {% for user in users %}*/
/*         <li>{{ user.username|e }} </li>*/
/*     {% endfor %}*/
/* </ul>*/
