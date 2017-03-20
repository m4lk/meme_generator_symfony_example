<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ab7ac6e0c8676c8f778ddd5afd5ec52308a37d305ed7ddd28f950d40dcf6dc57 extends Twig_Template
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
        $__internal_d32bc1c95a95efcecab92de1810dba067fc42a93ecc8a01a36b634c5ff284859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32bc1c95a95efcecab92de1810dba067fc42a93ecc8a01a36b634c5ff284859->enter($__internal_d32bc1c95a95efcecab92de1810dba067fc42a93ecc8a01a36b634c5ff284859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5cbd791b3d8b800b91f95425e030c3c1449c64f81f6a8fe1231642582ac71f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cbd791b3d8b800b91f95425e030c3c1449c64f81f6a8fe1231642582ac71f9a->enter($__internal_5cbd791b3d8b800b91f95425e030c3c1449c64f81f6a8fe1231642582ac71f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d32bc1c95a95efcecab92de1810dba067fc42a93ecc8a01a36b634c5ff284859->leave($__internal_d32bc1c95a95efcecab92de1810dba067fc42a93ecc8a01a36b634c5ff284859_prof);

        
        $__internal_5cbd791b3d8b800b91f95425e030c3c1449c64f81f6a8fe1231642582ac71f9a->leave($__internal_5cbd791b3d8b800b91f95425e030c3c1449c64f81f6a8fe1231642582ac71f9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
