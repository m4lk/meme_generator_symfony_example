<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_167da30ea0cd74d4530f4e6e842bcc11ff71d664b948ea20c17f1dc70f637015 extends Twig_Template
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
        $__internal_aaf86fc64c1e9b3613f7fe7fcf43ba9f1f67bfbe4d4f7fdb4d4445986a2fa345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf86fc64c1e9b3613f7fe7fcf43ba9f1f67bfbe4d4f7fdb4d4445986a2fa345->enter($__internal_aaf86fc64c1e9b3613f7fe7fcf43ba9f1f67bfbe4d4f7fdb4d4445986a2fa345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_a4f8846088959cf03161bb475405d7f72edb4f90874d8f3a1a1f608f2bf3696e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f8846088959cf03161bb475405d7f72edb4f90874d8f3a1a1f608f2bf3696e->enter($__internal_a4f8846088959cf03161bb475405d7f72edb4f90874d8f3a1a1f608f2bf3696e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_aaf86fc64c1e9b3613f7fe7fcf43ba9f1f67bfbe4d4f7fdb4d4445986a2fa345->leave($__internal_aaf86fc64c1e9b3613f7fe7fcf43ba9f1f67bfbe4d4f7fdb4d4445986a2fa345_prof);

        
        $__internal_a4f8846088959cf03161bb475405d7f72edb4f90874d8f3a1a1f608f2bf3696e->leave($__internal_a4f8846088959cf03161bb475405d7f72edb4f90874d8f3a1a1f608f2bf3696e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
