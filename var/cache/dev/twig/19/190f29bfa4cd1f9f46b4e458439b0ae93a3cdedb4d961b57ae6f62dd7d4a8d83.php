<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d7f0435de83419ebc1850b340ef5f9f1a89f386ba3c646564b8a9aa549e5a27a extends Twig_Template
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
        $__internal_d7f140f54eef3f6ce826e74491e3c209848474db990e62ff78db796b9bb0048d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f140f54eef3f6ce826e74491e3c209848474db990e62ff78db796b9bb0048d->enter($__internal_d7f140f54eef3f6ce826e74491e3c209848474db990e62ff78db796b9bb0048d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d38a9155bc88c3feadc5cce404537c524b5716c942275e2288de0f7a03609159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38a9155bc88c3feadc5cce404537c524b5716c942275e2288de0f7a03609159->enter($__internal_d38a9155bc88c3feadc5cce404537c524b5716c942275e2288de0f7a03609159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d7f140f54eef3f6ce826e74491e3c209848474db990e62ff78db796b9bb0048d->leave($__internal_d7f140f54eef3f6ce826e74491e3c209848474db990e62ff78db796b9bb0048d_prof);

        
        $__internal_d38a9155bc88c3feadc5cce404537c524b5716c942275e2288de0f7a03609159->leave($__internal_d38a9155bc88c3feadc5cce404537c524b5716c942275e2288de0f7a03609159_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
