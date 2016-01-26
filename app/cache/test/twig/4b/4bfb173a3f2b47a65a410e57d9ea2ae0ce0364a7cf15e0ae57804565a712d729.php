<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_f02ea2917ec7ed39d74e2eb2500867a2bf1c4eddcd4cababb5613a24c324c86d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::empty_layout.html.twig", 12);
        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e160c00ecc08461d17d270bdd823244e5281548e4ea7ffef609003ce0811e277 = $this->env->getExtension("native_profiler");
        $__internal_e160c00ecc08461d17d270bdd823244e5281548e4ea7ffef609003ce0811e277->enter($__internal_e160c00ecc08461d17d270bdd823244e5281548e4ea7ffef609003ce0811e277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e160c00ecc08461d17d270bdd823244e5281548e4ea7ffef609003ce0811e277->leave($__internal_e160c00ecc08461d17d270bdd823244e5281548e4ea7ffef609003ce0811e277_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_c6c0d31f3d6684295d3463fd90593b1913f7667bb9fde6c7532d1b2abca997ce = $this->env->getExtension("native_profiler");
        $__internal_c6c0d31f3d6684295d3463fd90593b1913f7667bb9fde6c7532d1b2abca997ce->enter($__internal_c6c0d31f3d6684295d3463fd90593b1913f7667bb9fde6c7532d1b2abca997ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_c6c0d31f3d6684295d3463fd90593b1913f7667bb9fde6c7532d1b2abca997ce->leave($__internal_c6c0d31f3d6684295d3463fd90593b1913f7667bb9fde6c7532d1b2abca997ce_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_d7bd9254b92fc10eb3bce434743b5990925a2b99705e083456f5344ada49e14c = $this->env->getExtension("native_profiler");
        $__internal_d7bd9254b92fc10eb3bce434743b5990925a2b99705e083456f5344ada49e14c->enter($__internal_d7bd9254b92fc10eb3bce434743b5990925a2b99705e083456f5344ada49e14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_d7bd9254b92fc10eb3bce434743b5990925a2b99705e083456f5344ada49e14c->leave($__internal_d7bd9254b92fc10eb3bce434743b5990925a2b99705e083456f5344ada49e14c_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e79d3a9ddf088a43afd1b2a6988a48f544b8847c2f1794423d02881e7365b405 = $this->env->getExtension("native_profiler");
        $__internal_e79d3a9ddf088a43afd1b2a6988a48f544b8847c2f1794423d02881e7365b405->enter($__internal_e79d3a9ddf088a43afd1b2a6988a48f544b8847c2f1794423d02881e7365b405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e79d3a9ddf088a43afd1b2a6988a48f544b8847c2f1794423d02881e7365b405->leave($__internal_e79d3a9ddf088a43afd1b2a6988a48f544b8847c2f1794423d02881e7365b405_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_6d0d27030f95d76988b4b258a4f728d4d52c8c3bd27a12385626c278fa02baa8 = $this->env->getExtension("native_profiler");
        $__internal_6d0d27030f95d76988b4b258a4f728d4d52c8c3bd27a12385626c278fa02baa8->enter($__internal_6d0d27030f95d76988b4b258a4f728d4d52c8c3bd27a12385626c278fa02baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_6d0d27030f95d76988b4b258a4f728d4d52c8c3bd27a12385626c278fa02baa8->leave($__internal_6d0d27030f95d76988b4b258a4f728d4d52c8c3bd27a12385626c278fa02baa8_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6f393edd301a22d8ac8ed6df1484fb5b78b41c2ca1510eded3e9fbc2cf447fc = $this->env->getExtension("native_profiler");
        $__internal_c6f393edd301a22d8ac8ed6df1484fb5b78b41c2ca1510eded3e9fbc2cf447fc->enter($__internal_c6f393edd301a22d8ac8ed6df1484fb5b78b41c2ca1510eded3e9fbc2cf447fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_c6f393edd301a22d8ac8ed6df1484fb5b78b41c2ca1510eded3e9fbc2cf447fc->leave($__internal_c6f393edd301a22d8ac8ed6df1484fb5b78b41c2ca1510eded3e9fbc2cf447fc_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_f06b5b74d4a85f1bff228f73b8ce473ff2f00ceb2e41dca950706f1020f5e3d6 = $this->env->getExtension("native_profiler");
        $__internal_f06b5b74d4a85f1bff228f73b8ce473ff2f00ceb2e41dca950706f1020f5e3d6->enter($__internal_f06b5b74d4a85f1bff228f73b8ce473ff2f00ceb2e41dca950706f1020f5e3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_f06b5b74d4a85f1bff228f73b8ce473ff2f00ceb2e41dca950706f1020f5e3d6->leave($__internal_f06b5b74d4a85f1bff228f73b8ce473ff2f00ceb2e41dca950706f1020f5e3d6_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_d5adbe5dc059d52ef0c14993b2fd39b3e51ea70716440e36b104b34b236d8b53 = $this->env->getExtension("native_profiler");
        $__internal_d5adbe5dc059d52ef0c14993b2fd39b3e51ea70716440e36b104b34b236d8b53->enter($__internal_d5adbe5dc059d52ef0c14993b2fd39b3e51ea70716440e36b104b34b236d8b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_d5adbe5dc059d52ef0c14993b2fd39b3e51ea70716440e36b104b34b236d8b53->leave($__internal_d5adbe5dc059d52ef0c14993b2fd39b3e51ea70716440e36b104b34b236d8b53_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  114 => 32,  108 => 31,  90 => 20,  84 => 19,  73 => 17,  62 => 16,  51 => 15,  40 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
