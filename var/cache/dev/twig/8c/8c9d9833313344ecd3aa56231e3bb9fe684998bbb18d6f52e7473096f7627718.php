<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b6accece8157d65efe15f4b3f71f5e5348c4732629cefe7dc0fa403274b137ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ff71145e682d4adca64170715c5527abfed8e9d7aedab05875e80bacba11f898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff71145e682d4adca64170715c5527abfed8e9d7aedab05875e80bacba11f898->enter($__internal_ff71145e682d4adca64170715c5527abfed8e9d7aedab05875e80bacba11f898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_712717db3c22ec67d3c1bd3614f4394438c7cc7b1ab3bdd2876af18dedaf8700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712717db3c22ec67d3c1bd3614f4394438c7cc7b1ab3bdd2876af18dedaf8700->enter($__internal_712717db3c22ec67d3c1bd3614f4394438c7cc7b1ab3bdd2876af18dedaf8700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff71145e682d4adca64170715c5527abfed8e9d7aedab05875e80bacba11f898->leave($__internal_ff71145e682d4adca64170715c5527abfed8e9d7aedab05875e80bacba11f898_prof);

        
        $__internal_712717db3c22ec67d3c1bd3614f4394438c7cc7b1ab3bdd2876af18dedaf8700->leave($__internal_712717db3c22ec67d3c1bd3614f4394438c7cc7b1ab3bdd2876af18dedaf8700_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c18585f93768a2143368ac003945a87da95d1ccca04b4aeeaa15d3d21765447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c18585f93768a2143368ac003945a87da95d1ccca04b4aeeaa15d3d21765447->enter($__internal_0c18585f93768a2143368ac003945a87da95d1ccca04b4aeeaa15d3d21765447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5efe8099af022175af9a8d188829af871e7ea0489f6e9fa42cc910a2fcba0a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5efe8099af022175af9a8d188829af871e7ea0489f6e9fa42cc910a2fcba0a20->enter($__internal_5efe8099af022175af9a8d188829af871e7ea0489f6e9fa42cc910a2fcba0a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5efe8099af022175af9a8d188829af871e7ea0489f6e9fa42cc910a2fcba0a20->leave($__internal_5efe8099af022175af9a8d188829af871e7ea0489f6e9fa42cc910a2fcba0a20_prof);

        
        $__internal_0c18585f93768a2143368ac003945a87da95d1ccca04b4aeeaa15d3d21765447->leave($__internal_0c18585f93768a2143368ac003945a87da95d1ccca04b4aeeaa15d3d21765447_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9f6eb3548ca8f69b68cd67e462f41b962d8b6c2c9c15886de6239fbe93c42d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f6eb3548ca8f69b68cd67e462f41b962d8b6c2c9c15886de6239fbe93c42d5->enter($__internal_f9f6eb3548ca8f69b68cd67e462f41b962d8b6c2c9c15886de6239fbe93c42d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_55ee7989dfbd4afdda3e7ae12c635b2d0f57377cc56724d8d88ca0f179ca2150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ee7989dfbd4afdda3e7ae12c635b2d0f57377cc56724d8d88ca0f179ca2150->enter($__internal_55ee7989dfbd4afdda3e7ae12c635b2d0f57377cc56724d8d88ca0f179ca2150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_55ee7989dfbd4afdda3e7ae12c635b2d0f57377cc56724d8d88ca0f179ca2150->leave($__internal_55ee7989dfbd4afdda3e7ae12c635b2d0f57377cc56724d8d88ca0f179ca2150_prof);

        
        $__internal_f9f6eb3548ca8f69b68cd67e462f41b962d8b6c2c9c15886de6239fbe93c42d5->leave($__internal_f9f6eb3548ca8f69b68cd67e462f41b962d8b6c2c9c15886de6239fbe93c42d5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4ce6ad6944bcb3aa5e9cdd517bf50f7dd80ddd117ca7c0aeeb308d3ca04fdb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ce6ad6944bcb3aa5e9cdd517bf50f7dd80ddd117ca7c0aeeb308d3ca04fdb1->enter($__internal_b4ce6ad6944bcb3aa5e9cdd517bf50f7dd80ddd117ca7c0aeeb308d3ca04fdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4b4af5cc406dfa5691bbeeecf6a7921efe5bda7731710ad129f0e9822236a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b4af5cc406dfa5691bbeeecf6a7921efe5bda7731710ad129f0e9822236a14->enter($__internal_b4b4af5cc406dfa5691bbeeecf6a7921efe5bda7731710ad129f0e9822236a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b4b4af5cc406dfa5691bbeeecf6a7921efe5bda7731710ad129f0e9822236a14->leave($__internal_b4b4af5cc406dfa5691bbeeecf6a7921efe5bda7731710ad129f0e9822236a14_prof);

        
        $__internal_b4ce6ad6944bcb3aa5e9cdd517bf50f7dd80ddd117ca7c0aeeb308d3ca04fdb1->leave($__internal_b4ce6ad6944bcb3aa5e9cdd517bf50f7dd80ddd117ca7c0aeeb308d3ca04fdb1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
