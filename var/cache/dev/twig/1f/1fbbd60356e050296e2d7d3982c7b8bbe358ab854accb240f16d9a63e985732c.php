<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7e60543b86aeed766f9996ee13d6c09d4344e6ba013132d6262972e5ea02c2bd extends Twig_Template
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
        $__internal_cbe63ed8955f84e6072212b6372025396c781946ecf538c0dd0851effdb8645d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe63ed8955f84e6072212b6372025396c781946ecf538c0dd0851effdb8645d->enter($__internal_cbe63ed8955f84e6072212b6372025396c781946ecf538c0dd0851effdb8645d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_56713e000e1ad396f5100673505c28c9644cc116143c7b94864a3927c566d088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56713e000e1ad396f5100673505c28c9644cc116143c7b94864a3927c566d088->enter($__internal_56713e000e1ad396f5100673505c28c9644cc116143c7b94864a3927c566d088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cbe63ed8955f84e6072212b6372025396c781946ecf538c0dd0851effdb8645d->leave($__internal_cbe63ed8955f84e6072212b6372025396c781946ecf538c0dd0851effdb8645d_prof);

        
        $__internal_56713e000e1ad396f5100673505c28c9644cc116143c7b94864a3927c566d088->leave($__internal_56713e000e1ad396f5100673505c28c9644cc116143c7b94864a3927c566d088_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
