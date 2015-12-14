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
        $__internal_6018baf1631fec1ab971ec5268b2892dce2c0de7eedc69de5baec0549cfd4b87 = $this->env->getExtension("native_profiler");
        $__internal_6018baf1631fec1ab971ec5268b2892dce2c0de7eedc69de5baec0549cfd4b87->enter($__internal_6018baf1631fec1ab971ec5268b2892dce2c0de7eedc69de5baec0549cfd4b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6018baf1631fec1ab971ec5268b2892dce2c0de7eedc69de5baec0549cfd4b87->leave($__internal_6018baf1631fec1ab971ec5268b2892dce2c0de7eedc69de5baec0549cfd4b87_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_26c084d01e099f64a89bd442f00cb5f1767cc324a64a573be4e3aad60b12c6e6 = $this->env->getExtension("native_profiler");
        $__internal_26c084d01e099f64a89bd442f00cb5f1767cc324a64a573be4e3aad60b12c6e6->enter($__internal_26c084d01e099f64a89bd442f00cb5f1767cc324a64a573be4e3aad60b12c6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_26c084d01e099f64a89bd442f00cb5f1767cc324a64a573be4e3aad60b12c6e6->leave($__internal_26c084d01e099f64a89bd442f00cb5f1767cc324a64a573be4e3aad60b12c6e6_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ff14e641a057a7e0da5e66be9c066f7f5bf103c02bac1ab335b3790350cf0c5b = $this->env->getExtension("native_profiler");
        $__internal_ff14e641a057a7e0da5e66be9c066f7f5bf103c02bac1ab335b3790350cf0c5b->enter($__internal_ff14e641a057a7e0da5e66be9c066f7f5bf103c02bac1ab335b3790350cf0c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ff14e641a057a7e0da5e66be9c066f7f5bf103c02bac1ab335b3790350cf0c5b->leave($__internal_ff14e641a057a7e0da5e66be9c066f7f5bf103c02bac1ab335b3790350cf0c5b_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5e73c428135bfdf3537ddfe5ac64e7f0d660ff4751cd44338772deac39f79c1d = $this->env->getExtension("native_profiler");
        $__internal_5e73c428135bfdf3537ddfe5ac64e7f0d660ff4751cd44338772deac39f79c1d->enter($__internal_5e73c428135bfdf3537ddfe5ac64e7f0d660ff4751cd44338772deac39f79c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_5e73c428135bfdf3537ddfe5ac64e7f0d660ff4751cd44338772deac39f79c1d->leave($__internal_5e73c428135bfdf3537ddfe5ac64e7f0d660ff4751cd44338772deac39f79c1d_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_88f14bd02acf02aa7a57d5029d51949f896361635336ed0fec3048fc324863d7 = $this->env->getExtension("native_profiler");
        $__internal_88f14bd02acf02aa7a57d5029d51949f896361635336ed0fec3048fc324863d7->enter($__internal_88f14bd02acf02aa7a57d5029d51949f896361635336ed0fec3048fc324863d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_88f14bd02acf02aa7a57d5029d51949f896361635336ed0fec3048fc324863d7->leave($__internal_88f14bd02acf02aa7a57d5029d51949f896361635336ed0fec3048fc324863d7_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3046aef32544f42763094bb1f9c195718912e779a4fdd9448587b86b394d448 = $this->env->getExtension("native_profiler");
        $__internal_c3046aef32544f42763094bb1f9c195718912e779a4fdd9448587b86b394d448->enter($__internal_c3046aef32544f42763094bb1f9c195718912e779a4fdd9448587b86b394d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c3046aef32544f42763094bb1f9c195718912e779a4fdd9448587b86b394d448->leave($__internal_c3046aef32544f42763094bb1f9c195718912e779a4fdd9448587b86b394d448_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e847955143c976b2d8e3bb80a155c4343835e102b0ade63288897d44202cda7e = $this->env->getExtension("native_profiler");
        $__internal_e847955143c976b2d8e3bb80a155c4343835e102b0ade63288897d44202cda7e->enter($__internal_e847955143c976b2d8e3bb80a155c4343835e102b0ade63288897d44202cda7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_e847955143c976b2d8e3bb80a155c4343835e102b0ade63288897d44202cda7e->leave($__internal_e847955143c976b2d8e3bb80a155c4343835e102b0ade63288897d44202cda7e_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_793c7c9c1445814f5029cb30b73ba5982492a4262bce262336e07a57af4e7cd4 = $this->env->getExtension("native_profiler");
        $__internal_793c7c9c1445814f5029cb30b73ba5982492a4262bce262336e07a57af4e7cd4->enter($__internal_793c7c9c1445814f5029cb30b73ba5982492a4262bce262336e07a57af4e7cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_793c7c9c1445814f5029cb30b73ba5982492a4262bce262336e07a57af4e7cd4->leave($__internal_793c7c9c1445814f5029cb30b73ba5982492a4262bce262336e07a57af4e7cd4_prof);

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
