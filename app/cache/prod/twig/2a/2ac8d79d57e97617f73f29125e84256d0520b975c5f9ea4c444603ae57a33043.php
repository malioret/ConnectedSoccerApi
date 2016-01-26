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
        $__internal_36e7eae287473b073765f4a41cad2600830deea0673829a3bcac6cab273961da = $this->env->getExtension("native_profiler");
        $__internal_36e7eae287473b073765f4a41cad2600830deea0673829a3bcac6cab273961da->enter($__internal_36e7eae287473b073765f4a41cad2600830deea0673829a3bcac6cab273961da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e7eae287473b073765f4a41cad2600830deea0673829a3bcac6cab273961da->leave($__internal_36e7eae287473b073765f4a41cad2600830deea0673829a3bcac6cab273961da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d91b88dcb7c9fee2db8dacf57d5d992809618557f0362f14fc5641938d2ba66 = $this->env->getExtension("native_profiler");
        $__internal_5d91b88dcb7c9fee2db8dacf57d5d992809618557f0362f14fc5641938d2ba66->enter($__internal_5d91b88dcb7c9fee2db8dacf57d5d992809618557f0362f14fc5641938d2ba66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5d91b88dcb7c9fee2db8dacf57d5d992809618557f0362f14fc5641938d2ba66->leave($__internal_5d91b88dcb7c9fee2db8dacf57d5d992809618557f0362f14fc5641938d2ba66_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32d245f200f801517125733761729274e6e671e67529c0c856cd4658b446c50a = $this->env->getExtension("native_profiler");
        $__internal_32d245f200f801517125733761729274e6e671e67529c0c856cd4658b446c50a->enter($__internal_32d245f200f801517125733761729274e6e671e67529c0c856cd4658b446c50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_32d245f200f801517125733761729274e6e671e67529c0c856cd4658b446c50a->leave($__internal_32d245f200f801517125733761729274e6e671e67529c0c856cd4658b446c50a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_69687758f6823c9507cac5aadeb223c1dd0160308236cfb0e961b6aefd799e31 = $this->env->getExtension("native_profiler");
        $__internal_69687758f6823c9507cac5aadeb223c1dd0160308236cfb0e961b6aefd799e31->enter($__internal_69687758f6823c9507cac5aadeb223c1dd0160308236cfb0e961b6aefd799e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_69687758f6823c9507cac5aadeb223c1dd0160308236cfb0e961b6aefd799e31->leave($__internal_69687758f6823c9507cac5aadeb223c1dd0160308236cfb0e961b6aefd799e31_prof);

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
