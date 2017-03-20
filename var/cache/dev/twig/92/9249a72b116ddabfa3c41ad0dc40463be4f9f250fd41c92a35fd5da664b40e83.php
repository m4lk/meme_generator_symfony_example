<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8b1c22dbc5e37725ee76dd07bd2866b0a41549f03644ab477fd72aa5695e9bf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc2d89f9e1792e5ae2bd13bdd308a483440864e0b3d3477664224cbd4af6d1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2d89f9e1792e5ae2bd13bdd308a483440864e0b3d3477664224cbd4af6d1ac->enter($__internal_fc2d89f9e1792e5ae2bd13bdd308a483440864e0b3d3477664224cbd4af6d1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_dd8e9ae29d1a75a8fd986596c444a1f12d5c57fe1112ec84a7ae26222affeb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8e9ae29d1a75a8fd986596c444a1f12d5c57fe1112ec84a7ae26222affeb6b->enter($__internal_dd8e9ae29d1a75a8fd986596c444a1f12d5c57fe1112ec84a7ae26222affeb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_fc2d89f9e1792e5ae2bd13bdd308a483440864e0b3d3477664224cbd4af6d1ac->leave($__internal_fc2d89f9e1792e5ae2bd13bdd308a483440864e0b3d3477664224cbd4af6d1ac_prof);

        
        $__internal_dd8e9ae29d1a75a8fd986596c444a1f12d5c57fe1112ec84a7ae26222affeb6b->leave($__internal_dd8e9ae29d1a75a8fd986596c444a1f12d5c57fe1112ec84a7ae26222affeb6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
