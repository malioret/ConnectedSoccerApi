<?php

/* SoccerEventBundle:Event:getEvents.html.twig */
class __TwigTemplate_376dfc4588f547fe98a0c755cbeb4be6a63f4c4f593ccd0b400d196af043060e extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 4
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nom", array()));
            echo " </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "SoccerEventBundle:Event:getEvents.html.twig";
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
/*     {% for event in events %}*/
/*         <li>{{ event.nom|e }} </li>*/
/*     {% endfor %}*/
/* </ul>*/
