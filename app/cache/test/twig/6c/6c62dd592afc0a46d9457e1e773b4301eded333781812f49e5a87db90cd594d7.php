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
        $__internal_307125477be949b07cc5e33b38dded6d12f2f8f32306a071fc0b7352eb17fe3c = $this->env->getExtension("native_profiler");
        $__internal_307125477be949b07cc5e33b38dded6d12f2f8f32306a071fc0b7352eb17fe3c->enter($__internal_307125477be949b07cc5e33b38dded6d12f2f8f32306a071fc0b7352eb17fe3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_307125477be949b07cc5e33b38dded6d12f2f8f32306a071fc0b7352eb17fe3c->leave($__internal_307125477be949b07cc5e33b38dded6d12f2f8f32306a071fc0b7352eb17fe3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91913f3a8697312543bd2b9538d8a05c9ef7b9f868ffad31c7ee6d82bb98031c = $this->env->getExtension("native_profiler");
        $__internal_91913f3a8697312543bd2b9538d8a05c9ef7b9f868ffad31c7ee6d82bb98031c->enter($__internal_91913f3a8697312543bd2b9538d8a05c9ef7b9f868ffad31c7ee6d82bb98031c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91913f3a8697312543bd2b9538d8a05c9ef7b9f868ffad31c7ee6d82bb98031c->leave($__internal_91913f3a8697312543bd2b9538d8a05c9ef7b9f868ffad31c7ee6d82bb98031c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_55cc3222293599e0595cf7f7b0f85b944162a9bc6585352d5a3b1dd8e3997162 = $this->env->getExtension("native_profiler");
        $__internal_55cc3222293599e0595cf7f7b0f85b944162a9bc6585352d5a3b1dd8e3997162->enter($__internal_55cc3222293599e0595cf7f7b0f85b944162a9bc6585352d5a3b1dd8e3997162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_55cc3222293599e0595cf7f7b0f85b944162a9bc6585352d5a3b1dd8e3997162->leave($__internal_55cc3222293599e0595cf7f7b0f85b944162a9bc6585352d5a3b1dd8e3997162_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d74364595ed091d096b94798ce99e1fb1c1e8dbead6e657b2e1cc33d44d6266 = $this->env->getExtension("native_profiler");
        $__internal_6d74364595ed091d096b94798ce99e1fb1c1e8dbead6e657b2e1cc33d44d6266->enter($__internal_6d74364595ed091d096b94798ce99e1fb1c1e8dbead6e657b2e1cc33d44d6266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6d74364595ed091d096b94798ce99e1fb1c1e8dbead6e657b2e1cc33d44d6266->leave($__internal_6d74364595ed091d096b94798ce99e1fb1c1e8dbead6e657b2e1cc33d44d6266_prof);

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
