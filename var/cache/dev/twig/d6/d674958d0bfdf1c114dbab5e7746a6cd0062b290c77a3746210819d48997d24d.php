<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_568a1bc25f9dfaa94510f7172a4f8544c3606e1afdef12262168dc1208583f93 extends Twig_Template
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
        $__internal_29fb457dbb58b722e93d3ef5e9450dcd34a0fdac77bffa11b9913f6e2d629926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29fb457dbb58b722e93d3ef5e9450dcd34a0fdac77bffa11b9913f6e2d629926->enter($__internal_29fb457dbb58b722e93d3ef5e9450dcd34a0fdac77bffa11b9913f6e2d629926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a88e67c2ed4399de482457bc8ac75c4df803bc5641f3784c7e0d24ad8cc7a347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88e67c2ed4399de482457bc8ac75c4df803bc5641f3784c7e0d24ad8cc7a347->enter($__internal_a88e67c2ed4399de482457bc8ac75c4df803bc5641f3784c7e0d24ad8cc7a347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_29fb457dbb58b722e93d3ef5e9450dcd34a0fdac77bffa11b9913f6e2d629926->leave($__internal_29fb457dbb58b722e93d3ef5e9450dcd34a0fdac77bffa11b9913f6e2d629926_prof);

        
        $__internal_a88e67c2ed4399de482457bc8ac75c4df803bc5641f3784c7e0d24ad8cc7a347->leave($__internal_a88e67c2ed4399de482457bc8ac75c4df803bc5641f3784c7e0d24ad8cc7a347_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
