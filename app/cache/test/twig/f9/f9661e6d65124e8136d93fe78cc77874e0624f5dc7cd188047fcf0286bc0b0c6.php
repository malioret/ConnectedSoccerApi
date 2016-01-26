<?php

/* SoccerUserBundle:User:getUsers.html.twig */
class __TwigTemplate_a17a1c21a4b5261b316697927717727de3cb66cefd880582d39d9c434ee9fe85 extends Twig_Template
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
        $__internal_f2cf245e9a4ca9a5f2f5414cd46e9efa804a668ebc105eac9838286936433551 = $this->env->getExtension("native_profiler");
        $__internal_f2cf245e9a4ca9a5f2f5414cd46e9efa804a668ebc105eac9838286936433551->enter($__internal_f2cf245e9a4ca9a5f2f5414cd46e9efa804a668ebc105eac9838286936433551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerUserBundle:User:getUsers.html.twig"));

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
        
        $__internal_f2cf245e9a4ca9a5f2f5414cd46e9efa804a668ebc105eac9838286936433551->leave($__internal_f2cf245e9a4ca9a5f2f5414cd46e9efa804a668ebc105eac9838286936433551_prof);

    }

    public function getTemplateName()
    {
        return "SoccerUserBundle:User:getUsers.html.twig";
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
