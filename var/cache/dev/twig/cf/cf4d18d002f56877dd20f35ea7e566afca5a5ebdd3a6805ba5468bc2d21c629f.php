<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7e9b907bd51bc114e8842a26f35fe05b4b31a525588284e826481b7331386c99 extends Twig_Template
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
        $__internal_808334acf2f46b4ff76affdb04728961540dc47aac8480296779f15bde1fe904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808334acf2f46b4ff76affdb04728961540dc47aac8480296779f15bde1fe904->enter($__internal_808334acf2f46b4ff76affdb04728961540dc47aac8480296779f15bde1fe904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e5e416698d55fdf289f53a85741fc011d0089ccfd39e6fb16a35cf641ea7dbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e416698d55fdf289f53a85741fc011d0089ccfd39e6fb16a35cf641ea7dbc2->enter($__internal_e5e416698d55fdf289f53a85741fc011d0089ccfd39e6fb16a35cf641ea7dbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_808334acf2f46b4ff76affdb04728961540dc47aac8480296779f15bde1fe904->leave($__internal_808334acf2f46b4ff76affdb04728961540dc47aac8480296779f15bde1fe904_prof);

        
        $__internal_e5e416698d55fdf289f53a85741fc011d0089ccfd39e6fb16a35cf641ea7dbc2->leave($__internal_e5e416698d55fdf289f53a85741fc011d0089ccfd39e6fb16a35cf641ea7dbc2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
