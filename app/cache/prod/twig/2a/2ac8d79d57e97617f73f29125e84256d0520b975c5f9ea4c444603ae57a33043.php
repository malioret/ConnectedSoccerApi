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
        $__internal_107a746f268689986b9e8106d3478a0d902478ede3e7e4127e7810a6209c3ef0 = $this->env->getExtension("native_profiler");
        $__internal_107a746f268689986b9e8106d3478a0d902478ede3e7e4127e7810a6209c3ef0->enter($__internal_107a746f268689986b9e8106d3478a0d902478ede3e7e4127e7810a6209c3ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107a746f268689986b9e8106d3478a0d902478ede3e7e4127e7810a6209c3ef0->leave($__internal_107a746f268689986b9e8106d3478a0d902478ede3e7e4127e7810a6209c3ef0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d7195b5ae71f80773658b1452d8ae4fee5313c7c022d1a0bf23ed8252ecde7f = $this->env->getExtension("native_profiler");
        $__internal_8d7195b5ae71f80773658b1452d8ae4fee5313c7c022d1a0bf23ed8252ecde7f->enter($__internal_8d7195b5ae71f80773658b1452d8ae4fee5313c7c022d1a0bf23ed8252ecde7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d7195b5ae71f80773658b1452d8ae4fee5313c7c022d1a0bf23ed8252ecde7f->leave($__internal_8d7195b5ae71f80773658b1452d8ae4fee5313c7c022d1a0bf23ed8252ecde7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec9a4b94b0625b49716c80ca667352ea2a69220f3c8c39698ca82be2f72a5426 = $this->env->getExtension("native_profiler");
        $__internal_ec9a4b94b0625b49716c80ca667352ea2a69220f3c8c39698ca82be2f72a5426->enter($__internal_ec9a4b94b0625b49716c80ca667352ea2a69220f3c8c39698ca82be2f72a5426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ec9a4b94b0625b49716c80ca667352ea2a69220f3c8c39698ca82be2f72a5426->leave($__internal_ec9a4b94b0625b49716c80ca667352ea2a69220f3c8c39698ca82be2f72a5426_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb181ee61e241a8cf296efe45259b26f73820cbdf3754c494903f1bec5614cc2 = $this->env->getExtension("native_profiler");
        $__internal_eb181ee61e241a8cf296efe45259b26f73820cbdf3754c494903f1bec5614cc2->enter($__internal_eb181ee61e241a8cf296efe45259b26f73820cbdf3754c494903f1bec5614cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_eb181ee61e241a8cf296efe45259b26f73820cbdf3754c494903f1bec5614cc2->leave($__internal_eb181ee61e241a8cf296efe45259b26f73820cbdf3754c494903f1bec5614cc2_prof);

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
