<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8ab53397e925886a1b337f45b4e9e4109ab219684050b1194389617133a7e6e2 extends Twig_Template
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
        $__internal_daf87f1233f54e53f3d5b71c03d439364d688e692c06457c506f96eda8fd9f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf87f1233f54e53f3d5b71c03d439364d688e692c06457c506f96eda8fd9f71->enter($__internal_daf87f1233f54e53f3d5b71c03d439364d688e692c06457c506f96eda8fd9f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1fa23c04a897478d77a24ba361b0797b2c7f7f605771323e55146462724c6c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa23c04a897478d77a24ba361b0797b2c7f7f605771323e55146462724c6c0a->enter($__internal_1fa23c04a897478d77a24ba361b0797b2c7f7f605771323e55146462724c6c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_daf87f1233f54e53f3d5b71c03d439364d688e692c06457c506f96eda8fd9f71->leave($__internal_daf87f1233f54e53f3d5b71c03d439364d688e692c06457c506f96eda8fd9f71_prof);

        
        $__internal_1fa23c04a897478d77a24ba361b0797b2c7f7f605771323e55146462724c6c0a->leave($__internal_1fa23c04a897478d77a24ba361b0797b2c7f7f605771323e55146462724c6c0a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
