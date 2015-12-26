<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5b317e1bb62f384ce0e5ff7a0656c8c611ad764568a371cecec5af7f26683444 extends Twig_Template
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
        $__internal_e07774bcb23d3e34193bfb205e031ef1dda678a9c8fb07e2e5540b1f5c3c2b0c = $this->env->getExtension("native_profiler");
        $__internal_e07774bcb23d3e34193bfb205e031ef1dda678a9c8fb07e2e5540b1f5c3c2b0c->enter($__internal_e07774bcb23d3e34193bfb205e031ef1dda678a9c8fb07e2e5540b1f5c3c2b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e07774bcb23d3e34193bfb205e031ef1dda678a9c8fb07e2e5540b1f5c3c2b0c->leave($__internal_e07774bcb23d3e34193bfb205e031ef1dda678a9c8fb07e2e5540b1f5c3c2b0c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b437e6a4b8ba1fb8b05621c16e78b8625998605956a38f46e488fa13b7b6583e = $this->env->getExtension("native_profiler");
        $__internal_b437e6a4b8ba1fb8b05621c16e78b8625998605956a38f46e488fa13b7b6583e->enter($__internal_b437e6a4b8ba1fb8b05621c16e78b8625998605956a38f46e488fa13b7b6583e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b437e6a4b8ba1fb8b05621c16e78b8625998605956a38f46e488fa13b7b6583e->leave($__internal_b437e6a4b8ba1fb8b05621c16e78b8625998605956a38f46e488fa13b7b6583e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f07b139adbd5b488438c8d58f2f0f04e99b6f8ff90a51d422265f2cab0727836 = $this->env->getExtension("native_profiler");
        $__internal_f07b139adbd5b488438c8d58f2f0f04e99b6f8ff90a51d422265f2cab0727836->enter($__internal_f07b139adbd5b488438c8d58f2f0f04e99b6f8ff90a51d422265f2cab0727836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f07b139adbd5b488438c8d58f2f0f04e99b6f8ff90a51d422265f2cab0727836->leave($__internal_f07b139adbd5b488438c8d58f2f0f04e99b6f8ff90a51d422265f2cab0727836_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e9f71d912b3d2905f15ae68290f053992828a258b09b439eda1ed3c25704119 = $this->env->getExtension("native_profiler");
        $__internal_4e9f71d912b3d2905f15ae68290f053992828a258b09b439eda1ed3c25704119->enter($__internal_4e9f71d912b3d2905f15ae68290f053992828a258b09b439eda1ed3c25704119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4e9f71d912b3d2905f15ae68290f053992828a258b09b439eda1ed3c25704119->leave($__internal_4e9f71d912b3d2905f15ae68290f053992828a258b09b439eda1ed3c25704119_prof);

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
