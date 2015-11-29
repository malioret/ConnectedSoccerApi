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
        $__internal_f979e9ae6738d795155564dd7e50cd86818b2921c5b26ae5a42009a2e1a3d40e = $this->env->getExtension("native_profiler");
        $__internal_f979e9ae6738d795155564dd7e50cd86818b2921c5b26ae5a42009a2e1a3d40e->enter($__internal_f979e9ae6738d795155564dd7e50cd86818b2921c5b26ae5a42009a2e1a3d40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f979e9ae6738d795155564dd7e50cd86818b2921c5b26ae5a42009a2e1a3d40e->leave($__internal_f979e9ae6738d795155564dd7e50cd86818b2921c5b26ae5a42009a2e1a3d40e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_256c19d6c54f7e30dba50e0472c9d1a5f4f37dd35e29325f70eb863fcaf107ab = $this->env->getExtension("native_profiler");
        $__internal_256c19d6c54f7e30dba50e0472c9d1a5f4f37dd35e29325f70eb863fcaf107ab->enter($__internal_256c19d6c54f7e30dba50e0472c9d1a5f4f37dd35e29325f70eb863fcaf107ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_256c19d6c54f7e30dba50e0472c9d1a5f4f37dd35e29325f70eb863fcaf107ab->leave($__internal_256c19d6c54f7e30dba50e0472c9d1a5f4f37dd35e29325f70eb863fcaf107ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e9f0f62c302bb5bb6bf51e88b3773a0de094961f46dbaec55ac0f42796f753e = $this->env->getExtension("native_profiler");
        $__internal_1e9f0f62c302bb5bb6bf51e88b3773a0de094961f46dbaec55ac0f42796f753e->enter($__internal_1e9f0f62c302bb5bb6bf51e88b3773a0de094961f46dbaec55ac0f42796f753e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1e9f0f62c302bb5bb6bf51e88b3773a0de094961f46dbaec55ac0f42796f753e->leave($__internal_1e9f0f62c302bb5bb6bf51e88b3773a0de094961f46dbaec55ac0f42796f753e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4981a4a873f5270225bd81d6aca97ee5bcdfd11acd7eb0e0cf119da6c13fa028 = $this->env->getExtension("native_profiler");
        $__internal_4981a4a873f5270225bd81d6aca97ee5bcdfd11acd7eb0e0cf119da6c13fa028->enter($__internal_4981a4a873f5270225bd81d6aca97ee5bcdfd11acd7eb0e0cf119da6c13fa028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4981a4a873f5270225bd81d6aca97ee5bcdfd11acd7eb0e0cf119da6c13fa028->leave($__internal_4981a4a873f5270225bd81d6aca97ee5bcdfd11acd7eb0e0cf119da6c13fa028_prof);

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
