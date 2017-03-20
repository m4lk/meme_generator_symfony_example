<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_92f127d5134415efc06d4164fb76b1f741c82b1bab02f137b054d0f7bb4dab1d extends Twig_Template
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
        $__internal_594084abd74631a02d3a589393d2b07d7f5925e075c19591d504106d25abd00b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594084abd74631a02d3a589393d2b07d7f5925e075c19591d504106d25abd00b->enter($__internal_594084abd74631a02d3a589393d2b07d7f5925e075c19591d504106d25abd00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c2f90664a3ddad1568de2439dda812a9bac6c6b0d060f41cf9edd6e9fcfa44df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f90664a3ddad1568de2439dda812a9bac6c6b0d060f41cf9edd6e9fcfa44df->enter($__internal_c2f90664a3ddad1568de2439dda812a9bac6c6b0d060f41cf9edd6e9fcfa44df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_594084abd74631a02d3a589393d2b07d7f5925e075c19591d504106d25abd00b->leave($__internal_594084abd74631a02d3a589393d2b07d7f5925e075c19591d504106d25abd00b_prof);

        
        $__internal_c2f90664a3ddad1568de2439dda812a9bac6c6b0d060f41cf9edd6e9fcfa44df->leave($__internal_c2f90664a3ddad1568de2439dda812a9bac6c6b0d060f41cf9edd6e9fcfa44df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
