<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_02dad5d0e736a5b613dbb6586eddbab71d7c9fe3b0ffb08bf7528104cb264e7f extends Twig_Template
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
        $__internal_b86d0dfe984cecd0639c80f72c24b6d198c31d67e08cd1ebea5b423841fa334c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86d0dfe984cecd0639c80f72c24b6d198c31d67e08cd1ebea5b423841fa334c->enter($__internal_b86d0dfe984cecd0639c80f72c24b6d198c31d67e08cd1ebea5b423841fa334c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c480c92dd62c772f7eb999ea0ce4be17244fb035e17c60b547ab34921818e251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c480c92dd62c772f7eb999ea0ce4be17244fb035e17c60b547ab34921818e251->enter($__internal_c480c92dd62c772f7eb999ea0ce4be17244fb035e17c60b547ab34921818e251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b86d0dfe984cecd0639c80f72c24b6d198c31d67e08cd1ebea5b423841fa334c->leave($__internal_b86d0dfe984cecd0639c80f72c24b6d198c31d67e08cd1ebea5b423841fa334c_prof);

        
        $__internal_c480c92dd62c772f7eb999ea0ce4be17244fb035e17c60b547ab34921818e251->leave($__internal_c480c92dd62c772f7eb999ea0ce4be17244fb035e17c60b547ab34921818e251_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
