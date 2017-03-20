<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f6ea8d55d7482bc3bf34f743a191a961929e7f87ae94cedb6b8a024f56794612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a0557c5b1fdbd07c6bc270cb28de997694f4cf906b3deb3aad245434ac6965d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0557c5b1fdbd07c6bc270cb28de997694f4cf906b3deb3aad245434ac6965d->enter($__internal_0a0557c5b1fdbd07c6bc270cb28de997694f4cf906b3deb3aad245434ac6965d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6ddd2ebbab926f0c741e1d5600e964dc48931d0cbf2157e1547c3268eb9c1575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ddd2ebbab926f0c741e1d5600e964dc48931d0cbf2157e1547c3268eb9c1575->enter($__internal_6ddd2ebbab926f0c741e1d5600e964dc48931d0cbf2157e1547c3268eb9c1575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a0557c5b1fdbd07c6bc270cb28de997694f4cf906b3deb3aad245434ac6965d->leave($__internal_0a0557c5b1fdbd07c6bc270cb28de997694f4cf906b3deb3aad245434ac6965d_prof);

        
        $__internal_6ddd2ebbab926f0c741e1d5600e964dc48931d0cbf2157e1547c3268eb9c1575->leave($__internal_6ddd2ebbab926f0c741e1d5600e964dc48931d0cbf2157e1547c3268eb9c1575_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26bfeb13263ff39d06cbb2b9fd9883301c8e44ab598f35a626a1b3077dc1802e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26bfeb13263ff39d06cbb2b9fd9883301c8e44ab598f35a626a1b3077dc1802e->enter($__internal_26bfeb13263ff39d06cbb2b9fd9883301c8e44ab598f35a626a1b3077dc1802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d97487418cf75ce27a3c81ba7f8b6ca72bdc9a9fc767825f8ddaf93f396598a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d97487418cf75ce27a3c81ba7f8b6ca72bdc9a9fc767825f8ddaf93f396598a->enter($__internal_5d97487418cf75ce27a3c81ba7f8b6ca72bdc9a9fc767825f8ddaf93f396598a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5d97487418cf75ce27a3c81ba7f8b6ca72bdc9a9fc767825f8ddaf93f396598a->leave($__internal_5d97487418cf75ce27a3c81ba7f8b6ca72bdc9a9fc767825f8ddaf93f396598a_prof);

        
        $__internal_26bfeb13263ff39d06cbb2b9fd9883301c8e44ab598f35a626a1b3077dc1802e->leave($__internal_26bfeb13263ff39d06cbb2b9fd9883301c8e44ab598f35a626a1b3077dc1802e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6147cd5e705dce333ad9f01d50be528df2da0555724eb164c4e23e9a8a424fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6147cd5e705dce333ad9f01d50be528df2da0555724eb164c4e23e9a8a424fe3->enter($__internal_6147cd5e705dce333ad9f01d50be528df2da0555724eb164c4e23e9a8a424fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8bfb4ac50865ce68dcf92135aaa5e29b9c3e953d20b8fadb5b0294efffc9ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bfb4ac50865ce68dcf92135aaa5e29b9c3e953d20b8fadb5b0294efffc9ffb->enter($__internal_d8bfb4ac50865ce68dcf92135aaa5e29b9c3e953d20b8fadb5b0294efffc9ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d8bfb4ac50865ce68dcf92135aaa5e29b9c3e953d20b8fadb5b0294efffc9ffb->leave($__internal_d8bfb4ac50865ce68dcf92135aaa5e29b9c3e953d20b8fadb5b0294efffc9ffb_prof);

        
        $__internal_6147cd5e705dce333ad9f01d50be528df2da0555724eb164c4e23e9a8a424fe3->leave($__internal_6147cd5e705dce333ad9f01d50be528df2da0555724eb164c4e23e9a8a424fe3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
