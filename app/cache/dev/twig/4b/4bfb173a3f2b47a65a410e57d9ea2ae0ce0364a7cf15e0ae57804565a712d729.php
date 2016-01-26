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
        $__internal_fe99590379884793bf92b5d3bb19a5634997a8ade5488f50e9ae70a052eba587 = $this->env->getExtension("native_profiler");
        $__internal_fe99590379884793bf92b5d3bb19a5634997a8ade5488f50e9ae70a052eba587->enter($__internal_fe99590379884793bf92b5d3bb19a5634997a8ade5488f50e9ae70a052eba587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe99590379884793bf92b5d3bb19a5634997a8ade5488f50e9ae70a052eba587->leave($__internal_fe99590379884793bf92b5d3bb19a5634997a8ade5488f50e9ae70a052eba587_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_4eb93b4d4a7adb011ce7da7f5af77fecfdde851e14e9049bf3d28da46343f09c = $this->env->getExtension("native_profiler");
        $__internal_4eb93b4d4a7adb011ce7da7f5af77fecfdde851e14e9049bf3d28da46343f09c->enter($__internal_4eb93b4d4a7adb011ce7da7f5af77fecfdde851e14e9049bf3d28da46343f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_4eb93b4d4a7adb011ce7da7f5af77fecfdde851e14e9049bf3d28da46343f09c->leave($__internal_4eb93b4d4a7adb011ce7da7f5af77fecfdde851e14e9049bf3d28da46343f09c_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_c78e83f5f6f4773afd97b002a595395243470f40d9bbe52665593d11b188f366 = $this->env->getExtension("native_profiler");
        $__internal_c78e83f5f6f4773afd97b002a595395243470f40d9bbe52665593d11b188f366->enter($__internal_c78e83f5f6f4773afd97b002a595395243470f40d9bbe52665593d11b188f366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_c78e83f5f6f4773afd97b002a595395243470f40d9bbe52665593d11b188f366->leave($__internal_c78e83f5f6f4773afd97b002a595395243470f40d9bbe52665593d11b188f366_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5fb06f8e2a159b06567bf76d2f05ca5103229a7bfe3f11b0e4991845a8de1f95 = $this->env->getExtension("native_profiler");
        $__internal_5fb06f8e2a159b06567bf76d2f05ca5103229a7bfe3f11b0e4991845a8de1f95->enter($__internal_5fb06f8e2a159b06567bf76d2f05ca5103229a7bfe3f11b0e4991845a8de1f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_5fb06f8e2a159b06567bf76d2f05ca5103229a7bfe3f11b0e4991845a8de1f95->leave($__internal_5fb06f8e2a159b06567bf76d2f05ca5103229a7bfe3f11b0e4991845a8de1f95_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_91eca909506d335ccdb97078c2193e8334fe5ea0a1c556db740c34e26a21245e = $this->env->getExtension("native_profiler");
        $__internal_91eca909506d335ccdb97078c2193e8334fe5ea0a1c556db740c34e26a21245e->enter($__internal_91eca909506d335ccdb97078c2193e8334fe5ea0a1c556db740c34e26a21245e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_91eca909506d335ccdb97078c2193e8334fe5ea0a1c556db740c34e26a21245e->leave($__internal_91eca909506d335ccdb97078c2193e8334fe5ea0a1c556db740c34e26a21245e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2cc9e040ce9d7985350374041590e2ed2043cc5008bb3b1fa863416f37a2026 = $this->env->getExtension("native_profiler");
        $__internal_b2cc9e040ce9d7985350374041590e2ed2043cc5008bb3b1fa863416f37a2026->enter($__internal_b2cc9e040ce9d7985350374041590e2ed2043cc5008bb3b1fa863416f37a2026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b2cc9e040ce9d7985350374041590e2ed2043cc5008bb3b1fa863416f37a2026->leave($__internal_b2cc9e040ce9d7985350374041590e2ed2043cc5008bb3b1fa863416f37a2026_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_23ca884ead203ec9684bbc09cf35db037c145cee9f017ffe2f5f139a122185d6 = $this->env->getExtension("native_profiler");
        $__internal_23ca884ead203ec9684bbc09cf35db037c145cee9f017ffe2f5f139a122185d6->enter($__internal_23ca884ead203ec9684bbc09cf35db037c145cee9f017ffe2f5f139a122185d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_23ca884ead203ec9684bbc09cf35db037c145cee9f017ffe2f5f139a122185d6->leave($__internal_23ca884ead203ec9684bbc09cf35db037c145cee9f017ffe2f5f139a122185d6_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_3b8989b1a899b51588845df0d1a24bba579eed944aa02d950c3db357f3a3a6f6 = $this->env->getExtension("native_profiler");
        $__internal_3b8989b1a899b51588845df0d1a24bba579eed944aa02d950c3db357f3a3a6f6->enter($__internal_3b8989b1a899b51588845df0d1a24bba579eed944aa02d950c3db357f3a3a6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_3b8989b1a899b51588845df0d1a24bba579eed944aa02d950c3db357f3a3a6f6->leave($__internal_3b8989b1a899b51588845df0d1a24bba579eed944aa02d950c3db357f3a3a6f6_prof);

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
