<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_9a164b39c20a24fed87da8dd91597c8597c80628ce4427bf099fd78c5f485a63 extends Twig_Template
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
        $__internal_1a5cdd7a5167f1b88bb434975cdb00e0fc4bc42d694b67c2e4aa35e37b15dcb2 = $this->env->getExtension("native_profiler");
        $__internal_1a5cdd7a5167f1b88bb434975cdb00e0fc4bc42d694b67c2e4aa35e37b15dcb2->enter($__internal_1a5cdd7a5167f1b88bb434975cdb00e0fc4bc42d694b67c2e4aa35e37b15dcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1a5cdd7a5167f1b88bb434975cdb00e0fc4bc42d694b67c2e4aa35e37b15dcb2->leave($__internal_1a5cdd7a5167f1b88bb434975cdb00e0fc4bc42d694b67c2e4aa35e37b15dcb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
