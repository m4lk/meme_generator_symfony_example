<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2297193844409e406fa264b5cf3020997639f209b9b04f24838edecda51c004e extends Twig_Template
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
        $__internal_fb7d84ffb2fc12f4a8ca4858b2d75b67ad8b77a7258f6edfe3e0f6aa1ec942ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7d84ffb2fc12f4a8ca4858b2d75b67ad8b77a7258f6edfe3e0f6aa1ec942ba->enter($__internal_fb7d84ffb2fc12f4a8ca4858b2d75b67ad8b77a7258f6edfe3e0f6aa1ec942ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_214bd9880073cdc49226609be4176addd03288a66b9696435fe540c60de240f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214bd9880073cdc49226609be4176addd03288a66b9696435fe540c60de240f9->enter($__internal_214bd9880073cdc49226609be4176addd03288a66b9696435fe540c60de240f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_fb7d84ffb2fc12f4a8ca4858b2d75b67ad8b77a7258f6edfe3e0f6aa1ec942ba->leave($__internal_fb7d84ffb2fc12f4a8ca4858b2d75b67ad8b77a7258f6edfe3e0f6aa1ec942ba_prof);

        
        $__internal_214bd9880073cdc49226609be4176addd03288a66b9696435fe540c60de240f9->leave($__internal_214bd9880073cdc49226609be4176addd03288a66b9696435fe540c60de240f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
