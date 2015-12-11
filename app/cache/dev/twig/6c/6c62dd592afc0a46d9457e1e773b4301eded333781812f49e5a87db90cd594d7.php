<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_779ac714a250a0a17d34f583b2dabf0ce778a91b2f9f0048cfa661587788762c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2807771db54bd4c28c8138fbecbbeb9d7052649f271e174e1e57d2dff7ff483 = $this->env->getExtension("native_profiler");
        $__internal_d2807771db54bd4c28c8138fbecbbeb9d7052649f271e174e1e57d2dff7ff483->enter($__internal_d2807771db54bd4c28c8138fbecbbeb9d7052649f271e174e1e57d2dff7ff483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2807771db54bd4c28c8138fbecbbeb9d7052649f271e174e1e57d2dff7ff483->leave($__internal_d2807771db54bd4c28c8138fbecbbeb9d7052649f271e174e1e57d2dff7ff483_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b875355d1ba2ab307edde2488f742934ac50ba21d06bc31f27c01f011510725 = $this->env->getExtension("native_profiler");
        $__internal_8b875355d1ba2ab307edde2488f742934ac50ba21d06bc31f27c01f011510725->enter($__internal_8b875355d1ba2ab307edde2488f742934ac50ba21d06bc31f27c01f011510725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8b875355d1ba2ab307edde2488f742934ac50ba21d06bc31f27c01f011510725->leave($__internal_8b875355d1ba2ab307edde2488f742934ac50ba21d06bc31f27c01f011510725_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab3bf13a0270bdd60e5cdfc4862d6f914732f512ec06cfde7972f0c54dfcd553 = $this->env->getExtension("native_profiler");
        $__internal_ab3bf13a0270bdd60e5cdfc4862d6f914732f512ec06cfde7972f0c54dfcd553->enter($__internal_ab3bf13a0270bdd60e5cdfc4862d6f914732f512ec06cfde7972f0c54dfcd553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ab3bf13a0270bdd60e5cdfc4862d6f914732f512ec06cfde7972f0c54dfcd553->leave($__internal_ab3bf13a0270bdd60e5cdfc4862d6f914732f512ec06cfde7972f0c54dfcd553_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c667f07d7e15bb5656f0803bdba1e71ff1ab045056ee226f90e618e4633c7f7b = $this->env->getExtension("native_profiler");
        $__internal_c667f07d7e15bb5656f0803bdba1e71ff1ab045056ee226f90e618e4633c7f7b->enter($__internal_c667f07d7e15bb5656f0803bdba1e71ff1ab045056ee226f90e618e4633c7f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c667f07d7e15bb5656f0803bdba1e71ff1ab045056ee226f90e618e4633c7f7b->leave($__internal_c667f07d7e15bb5656f0803bdba1e71ff1ab045056ee226f90e618e4633c7f7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
