<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8f86478ac25dc11a71141ac4442469f483b4d9cb09fc4cb055b197f2f0ef6dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82b528f7b5a479ae007d2a82664b2b0e5d3e3d91c686fe230705ebb774617279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b528f7b5a479ae007d2a82664b2b0e5d3e3d91c686fe230705ebb774617279->enter($__internal_82b528f7b5a479ae007d2a82664b2b0e5d3e3d91c686fe230705ebb774617279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_94de294cbd336b7b8c7dc2720440720726c99ec789b1b1172e1f10477a8af9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94de294cbd336b7b8c7dc2720440720726c99ec789b1b1172e1f10477a8af9fe->enter($__internal_94de294cbd336b7b8c7dc2720440720726c99ec789b1b1172e1f10477a8af9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82b528f7b5a479ae007d2a82664b2b0e5d3e3d91c686fe230705ebb774617279->leave($__internal_82b528f7b5a479ae007d2a82664b2b0e5d3e3d91c686fe230705ebb774617279_prof);

        
        $__internal_94de294cbd336b7b8c7dc2720440720726c99ec789b1b1172e1f10477a8af9fe->leave($__internal_94de294cbd336b7b8c7dc2720440720726c99ec789b1b1172e1f10477a8af9fe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f357c4e67e61d58a6bb96e4104cf821975cc586d1e597cb3b7c9f2c027aad8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f357c4e67e61d58a6bb96e4104cf821975cc586d1e597cb3b7c9f2c027aad8ce->enter($__internal_f357c4e67e61d58a6bb96e4104cf821975cc586d1e597cb3b7c9f2c027aad8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a168b80de4df50d4aa9c82108b99f466eaa7f989d52844a2b263eda91e392795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a168b80de4df50d4aa9c82108b99f466eaa7f989d52844a2b263eda91e392795->enter($__internal_a168b80de4df50d4aa9c82108b99f466eaa7f989d52844a2b263eda91e392795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a168b80de4df50d4aa9c82108b99f466eaa7f989d52844a2b263eda91e392795->leave($__internal_a168b80de4df50d4aa9c82108b99f466eaa7f989d52844a2b263eda91e392795_prof);

        
        $__internal_f357c4e67e61d58a6bb96e4104cf821975cc586d1e597cb3b7c9f2c027aad8ce->leave($__internal_f357c4e67e61d58a6bb96e4104cf821975cc586d1e597cb3b7c9f2c027aad8ce_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e5e21dbc91ec49b49849a3e61d76aa635cd2195cbd3b77e3ae1072e12ce1079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5e21dbc91ec49b49849a3e61d76aa635cd2195cbd3b77e3ae1072e12ce1079->enter($__internal_6e5e21dbc91ec49b49849a3e61d76aa635cd2195cbd3b77e3ae1072e12ce1079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6bb1bf1ef2f580b1b22de9286d5ce50c3332e64b2a59fbdbaf4ad9eaf8c1a15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb1bf1ef2f580b1b22de9286d5ce50c3332e64b2a59fbdbaf4ad9eaf8c1a15f->enter($__internal_6bb1bf1ef2f580b1b22de9286d5ce50c3332e64b2a59fbdbaf4ad9eaf8c1a15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6bb1bf1ef2f580b1b22de9286d5ce50c3332e64b2a59fbdbaf4ad9eaf8c1a15f->leave($__internal_6bb1bf1ef2f580b1b22de9286d5ce50c3332e64b2a59fbdbaf4ad9eaf8c1a15f_prof);

        
        $__internal_6e5e21dbc91ec49b49849a3e61d76aa635cd2195cbd3b77e3ae1072e12ce1079->leave($__internal_6e5e21dbc91ec49b49849a3e61d76aa635cd2195cbd3b77e3ae1072e12ce1079_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3df479e2c4eeda49775c7810eec9e0cfc8c532c63a31b1ff07bd212afe1747ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df479e2c4eeda49775c7810eec9e0cfc8c532c63a31b1ff07bd212afe1747ae->enter($__internal_3df479e2c4eeda49775c7810eec9e0cfc8c532c63a31b1ff07bd212afe1747ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0be3825398a1bf44aa7b9ce53308f16ee35bc1385243aea64597ace4999f4f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be3825398a1bf44aa7b9ce53308f16ee35bc1385243aea64597ace4999f4f89->enter($__internal_0be3825398a1bf44aa7b9ce53308f16ee35bc1385243aea64597ace4999f4f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0be3825398a1bf44aa7b9ce53308f16ee35bc1385243aea64597ace4999f4f89->leave($__internal_0be3825398a1bf44aa7b9ce53308f16ee35bc1385243aea64597ace4999f4f89_prof);

        
        $__internal_3df479e2c4eeda49775c7810eec9e0cfc8c532c63a31b1ff07bd212afe1747ae->leave($__internal_3df479e2c4eeda49775c7810eec9e0cfc8c532c63a31b1ff07bd212afe1747ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
