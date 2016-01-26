<?php

/* SoccerEventBundle:Event:getEvents.html.twig */
class __TwigTemplate_6614c4d9b6938e0392363d3fd4db6d2ecb9d421e1bff97240806ba5055a6d72d extends Twig_Template
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
        $__internal_435b76984c0b38e338bac5ff479469e4c932350f537bb8396ef3b2ee93e4d356 = $this->env->getExtension("native_profiler");
        $__internal_435b76984c0b38e338bac5ff479469e4c932350f537bb8396ef3b2ee93e4d356->enter($__internal_435b76984c0b38e338bac5ff479469e4c932350f537bb8396ef3b2ee93e4d356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoccerEventBundle:Event:getEvents.html.twig"));

        // line 1
        echo "<h1>Utilisateurs</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
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
        
        $__internal_435b76984c0b38e338bac5ff479469e4c932350f537bb8396ef3b2ee93e4d356->leave($__internal_435b76984c0b38e338bac5ff479469e4c932350f537bb8396ef3b2ee93e4d356_prof);

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
        return array (  39 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <h1>Utilisateurs</h1>*/
/* <ul>*/
/*     {% for event in events %}*/
/*         <li>{{ event.nom|e }} </li>*/
/*     {% endfor %}*/
/* </ul>*/
