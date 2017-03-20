<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_169e9e75dcf04d77fa7fb4f3352907d8bb6a97f9d43e84d18eb9562f7328964d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76d917197cba3d8678095a48e9d0bfed10f67e1ff30986fd0f9424d9b010cc4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d917197cba3d8678095a48e9d0bfed10f67e1ff30986fd0f9424d9b010cc4d->enter($__internal_76d917197cba3d8678095a48e9d0bfed10f67e1ff30986fd0f9424d9b010cc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f755244d34d623898e73d875078210db75582e50457c737ca1b072f15f6e70cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f755244d34d623898e73d875078210db75582e50457c737ca1b072f15f6e70cd->enter($__internal_f755244d34d623898e73d875078210db75582e50457c737ca1b072f15f6e70cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76d917197cba3d8678095a48e9d0bfed10f67e1ff30986fd0f9424d9b010cc4d->leave($__internal_76d917197cba3d8678095a48e9d0bfed10f67e1ff30986fd0f9424d9b010cc4d_prof);

        
        $__internal_f755244d34d623898e73d875078210db75582e50457c737ca1b072f15f6e70cd->leave($__internal_f755244d34d623898e73d875078210db75582e50457c737ca1b072f15f6e70cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_457e3560f063988fdbe9e75ebeaac26ee2ce66a3263398cbaca607a73f9e28f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457e3560f063988fdbe9e75ebeaac26ee2ce66a3263398cbaca607a73f9e28f3->enter($__internal_457e3560f063988fdbe9e75ebeaac26ee2ce66a3263398cbaca607a73f9e28f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e635bf7e036c8f132132a36c85f52d8ac39f9e0815b63784a5cfd31f1550a42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e635bf7e036c8f132132a36c85f52d8ac39f9e0815b63784a5cfd31f1550a42e->enter($__internal_e635bf7e036c8f132132a36c85f52d8ac39f9e0815b63784a5cfd31f1550a42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e635bf7e036c8f132132a36c85f52d8ac39f9e0815b63784a5cfd31f1550a42e->leave($__internal_e635bf7e036c8f132132a36c85f52d8ac39f9e0815b63784a5cfd31f1550a42e_prof);

        
        $__internal_457e3560f063988fdbe9e75ebeaac26ee2ce66a3263398cbaca607a73f9e28f3->leave($__internal_457e3560f063988fdbe9e75ebeaac26ee2ce66a3263398cbaca607a73f9e28f3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a537ff309d3f93ef2e1bea36131d05166dc54b17fbe8b0578694381344e0b783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a537ff309d3f93ef2e1bea36131d05166dc54b17fbe8b0578694381344e0b783->enter($__internal_a537ff309d3f93ef2e1bea36131d05166dc54b17fbe8b0578694381344e0b783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2aece15bfd098e8332e91d5e79d9214ac059f1ed11f1e7950a5bbc1f458f3940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aece15bfd098e8332e91d5e79d9214ac059f1ed11f1e7950a5bbc1f458f3940->enter($__internal_2aece15bfd098e8332e91d5e79d9214ac059f1ed11f1e7950a5bbc1f458f3940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_2aece15bfd098e8332e91d5e79d9214ac059f1ed11f1e7950a5bbc1f458f3940->leave($__internal_2aece15bfd098e8332e91d5e79d9214ac059f1ed11f1e7950a5bbc1f458f3940_prof);

        
        $__internal_a537ff309d3f93ef2e1bea36131d05166dc54b17fbe8b0578694381344e0b783->leave($__internal_a537ff309d3f93ef2e1bea36131d05166dc54b17fbe8b0578694381344e0b783_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
