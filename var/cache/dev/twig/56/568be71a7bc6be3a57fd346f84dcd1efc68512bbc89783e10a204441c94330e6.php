<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5305a33aeb7ab0a5e783b379c8bfe75edc84e887ae6b5ec7df5d74ec72f3cdf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cada747942bbbf65a3e72abaa59de445d11ddd82cfa26391b5361f10bf5dbc56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cada747942bbbf65a3e72abaa59de445d11ddd82cfa26391b5361f10bf5dbc56->enter($__internal_cada747942bbbf65a3e72abaa59de445d11ddd82cfa26391b5361f10bf5dbc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_13c58ab4fcbf1d8aabd071554f74bbb2f85724d449b8c3a7340e097dc4868d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c58ab4fcbf1d8aabd071554f74bbb2f85724d449b8c3a7340e097dc4868d9d->enter($__internal_13c58ab4fcbf1d8aabd071554f74bbb2f85724d449b8c3a7340e097dc4868d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cada747942bbbf65a3e72abaa59de445d11ddd82cfa26391b5361f10bf5dbc56->leave($__internal_cada747942bbbf65a3e72abaa59de445d11ddd82cfa26391b5361f10bf5dbc56_prof);

        
        $__internal_13c58ab4fcbf1d8aabd071554f74bbb2f85724d449b8c3a7340e097dc4868d9d->leave($__internal_13c58ab4fcbf1d8aabd071554f74bbb2f85724d449b8c3a7340e097dc4868d9d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61d68cf2496faea70ad96ddcbda9978d5f21830a6086468e18fe65b24987331e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d68cf2496faea70ad96ddcbda9978d5f21830a6086468e18fe65b24987331e->enter($__internal_61d68cf2496faea70ad96ddcbda9978d5f21830a6086468e18fe65b24987331e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3ad83dabd3ad0fe1385e61ca984842dfe10c6c22923483804786739a299e940a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad83dabd3ad0fe1385e61ca984842dfe10c6c22923483804786739a299e940a->enter($__internal_3ad83dabd3ad0fe1385e61ca984842dfe10c6c22923483804786739a299e940a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3ad83dabd3ad0fe1385e61ca984842dfe10c6c22923483804786739a299e940a->leave($__internal_3ad83dabd3ad0fe1385e61ca984842dfe10c6c22923483804786739a299e940a_prof);

        
        $__internal_61d68cf2496faea70ad96ddcbda9978d5f21830a6086468e18fe65b24987331e->leave($__internal_61d68cf2496faea70ad96ddcbda9978d5f21830a6086468e18fe65b24987331e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
