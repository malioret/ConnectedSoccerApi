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
        $__internal_747c9a7afbb7bed18c726c9fbc2874f5553449c074aba95af8589d063fe80a81 = $this->env->getExtension("native_profiler");
        $__internal_747c9a7afbb7bed18c726c9fbc2874f5553449c074aba95af8589d063fe80a81->enter($__internal_747c9a7afbb7bed18c726c9fbc2874f5553449c074aba95af8589d063fe80a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747c9a7afbb7bed18c726c9fbc2874f5553449c074aba95af8589d063fe80a81->leave($__internal_747c9a7afbb7bed18c726c9fbc2874f5553449c074aba95af8589d063fe80a81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c493bae576aba224b44d06eca1d2d9093f01959e39b32405f0ccda6862a9ed8f = $this->env->getExtension("native_profiler");
        $__internal_c493bae576aba224b44d06eca1d2d9093f01959e39b32405f0ccda6862a9ed8f->enter($__internal_c493bae576aba224b44d06eca1d2d9093f01959e39b32405f0ccda6862a9ed8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c493bae576aba224b44d06eca1d2d9093f01959e39b32405f0ccda6862a9ed8f->leave($__internal_c493bae576aba224b44d06eca1d2d9093f01959e39b32405f0ccda6862a9ed8f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_83325349e3c448c17db32fb2e3dc3dc14062a8c29dc0a89d49671a980863ec0d = $this->env->getExtension("native_profiler");
        $__internal_83325349e3c448c17db32fb2e3dc3dc14062a8c29dc0a89d49671a980863ec0d->enter($__internal_83325349e3c448c17db32fb2e3dc3dc14062a8c29dc0a89d49671a980863ec0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_83325349e3c448c17db32fb2e3dc3dc14062a8c29dc0a89d49671a980863ec0d->leave($__internal_83325349e3c448c17db32fb2e3dc3dc14062a8c29dc0a89d49671a980863ec0d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce76f809224e0514e43cd700a86ac23914d547fe2e71fe137e287010ff26e424 = $this->env->getExtension("native_profiler");
        $__internal_ce76f809224e0514e43cd700a86ac23914d547fe2e71fe137e287010ff26e424->enter($__internal_ce76f809224e0514e43cd700a86ac23914d547fe2e71fe137e287010ff26e424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ce76f809224e0514e43cd700a86ac23914d547fe2e71fe137e287010ff26e424->leave($__internal_ce76f809224e0514e43cd700a86ac23914d547fe2e71fe137e287010ff26e424_prof);

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
