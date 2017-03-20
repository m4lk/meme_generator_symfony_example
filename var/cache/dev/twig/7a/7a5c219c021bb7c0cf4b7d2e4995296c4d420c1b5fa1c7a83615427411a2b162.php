<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a32e6da723a9baf191574ae09459a37cefe96fc4845deaf5ca8905e8d7caf427 extends Twig_Template
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
        $__internal_f50f6961a5a606049730ab2c89dc2798b73a26d77a89ca696c2d2d9b9f7ad717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50f6961a5a606049730ab2c89dc2798b73a26d77a89ca696c2d2d9b9f7ad717->enter($__internal_f50f6961a5a606049730ab2c89dc2798b73a26d77a89ca696c2d2d9b9f7ad717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_f2adb37ff321becadbf4dc101be58692f23d0189cf202bbc8f5a8d60fcdce27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2adb37ff321becadbf4dc101be58692f23d0189cf202bbc8f5a8d60fcdce27a->enter($__internal_f2adb37ff321becadbf4dc101be58692f23d0189cf202bbc8f5a8d60fcdce27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f50f6961a5a606049730ab2c89dc2798b73a26d77a89ca696c2d2d9b9f7ad717->leave($__internal_f50f6961a5a606049730ab2c89dc2798b73a26d77a89ca696c2d2d9b9f7ad717_prof);

        
        $__internal_f2adb37ff321becadbf4dc101be58692f23d0189cf202bbc8f5a8d60fcdce27a->leave($__internal_f2adb37ff321becadbf4dc101be58692f23d0189cf202bbc8f5a8d60fcdce27a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
