<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_127b466076d51d20ab8ebecfdde2cc605bcc41e40a50d9f597d4e25f981a4274 extends Twig_Template
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
        $__internal_9602fec6c7295cab0cb511827bb5de159659d8944afb91b61c96c01d12b3b549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9602fec6c7295cab0cb511827bb5de159659d8944afb91b61c96c01d12b3b549->enter($__internal_9602fec6c7295cab0cb511827bb5de159659d8944afb91b61c96c01d12b3b549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_1935bb147e6569c72b9633120d5d78b1b944ed44a8d17c6751008e9971d8446b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1935bb147e6569c72b9633120d5d78b1b944ed44a8d17c6751008e9971d8446b->enter($__internal_1935bb147e6569c72b9633120d5d78b1b944ed44a8d17c6751008e9971d8446b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9602fec6c7295cab0cb511827bb5de159659d8944afb91b61c96c01d12b3b549->leave($__internal_9602fec6c7295cab0cb511827bb5de159659d8944afb91b61c96c01d12b3b549_prof);

        
        $__internal_1935bb147e6569c72b9633120d5d78b1b944ed44a8d17c6751008e9971d8446b->leave($__internal_1935bb147e6569c72b9633120d5d78b1b944ed44a8d17c6751008e9971d8446b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
