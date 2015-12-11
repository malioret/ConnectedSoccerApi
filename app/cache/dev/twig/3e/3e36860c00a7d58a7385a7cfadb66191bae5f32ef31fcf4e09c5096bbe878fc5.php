<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_bd2956a3e58cf3d5af34421a595b9bda719b7aecfb6c1a861b49de0172f2d126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34457e979cd82b99507c7dc1274fd29c13b2e53f98e6ad85794e07545fda32aa = $this->env->getExtension("native_profiler");
        $__internal_34457e979cd82b99507c7dc1274fd29c13b2e53f98e6ad85794e07545fda32aa->enter($__internal_34457e979cd82b99507c7dc1274fd29c13b2e53f98e6ad85794e07545fda32aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_34457e979cd82b99507c7dc1274fd29c13b2e53f98e6ad85794e07545fda32aa->leave($__internal_34457e979cd82b99507c7dc1274fd29c13b2e53f98e6ad85794e07545fda32aa_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_79f3f6d5c6425ce7cc72cad4db148792eeb3cbe18831a388be84e85695a47161 = $this->env->getExtension("native_profiler");
        $__internal_79f3f6d5c6425ce7cc72cad4db148792eeb3cbe18831a388be84e85695a47161->enter($__internal_79f3f6d5c6425ce7cc72cad4db148792eeb3cbe18831a388be84e85695a47161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_79f3f6d5c6425ce7cc72cad4db148792eeb3cbe18831a388be84e85695a47161->leave($__internal_79f3f6d5c6425ce7cc72cad4db148792eeb3cbe18831a388be84e85695a47161_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_1d646cb62b42c22de0f3a76e45655cb4f5d62b88840350fd6cbe101194a6194f = $this->env->getExtension("native_profiler");
        $__internal_1d646cb62b42c22de0f3a76e45655cb4f5d62b88840350fd6cbe101194a6194f->enter($__internal_1d646cb62b42c22de0f3a76e45655cb4f5d62b88840350fd6cbe101194a6194f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_1d646cb62b42c22de0f3a76e45655cb4f5d62b88840350fd6cbe101194a6194f->leave($__internal_1d646cb62b42c22de0f3a76e45655cb4f5d62b88840350fd6cbe101194a6194f_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_9ff90827557c7ae3032bba41aa46cd6f26855781d7d525caad53fc6ca7527cf0 = $this->env->getExtension("native_profiler");
        $__internal_9ff90827557c7ae3032bba41aa46cd6f26855781d7d525caad53fc6ca7527cf0->enter($__internal_9ff90827557c7ae3032bba41aa46cd6f26855781d7d525caad53fc6ca7527cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"form-control per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_9ff90827557c7ae3032bba41aa46cd6f26855781d7d525caad53fc6ca7527cf0->leave($__internal_9ff90827557c7ae3032bba41aa46cd6f26855781d7d525caad53fc6ca7527cf0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  111 => 27,  102 => 26,  98 => 25,  94 => 24,  87 => 23,  81 => 22,  73 => 19,  70 => 18,  64 => 17,  51 => 13,  45 => 12,  38 => 22,  35 => 21,  33 => 17,  30 => 16,  28 => 12,  25 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% block num_pages %}*/
/*     {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
/* {% block num_results %}*/
/*     {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
/* {% block max_per_page %}*/
/*     <label class="control-label" for="{{ admin.uniqid }}_per_page">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>*/
/*     <select class="form-control per-page small" id="{{ admin.uniqid }}_per_page" style="width: auto">*/
/*         {% for per_page in admin.getperpageoptions %}*/
/*             <option {% if per_page == admin.datagrid.pager.maxperpage %}selected="selected"{% endif %} value="{{ admin.generateUrl('list', {'filter': admin.datagrid.values | merge({'_page': 1, '_per_page': per_page})}) }}">*/
/*                 {{ per_page }}*/
/*             </option>*/
/*         {% endfor %}*/
/*     </select>*/
/* {% endblock %}*/
/* */
