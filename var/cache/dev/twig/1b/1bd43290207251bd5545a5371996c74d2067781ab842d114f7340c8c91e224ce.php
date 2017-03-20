<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1424805b9fdcc985f6ab732d8770a62819dd8665cf1d0bdd0374b4b5cc6879a2 extends Twig_Template
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
        $__internal_f4b33107448b28b14fc7ad94412e6cbbcbbf174a330908084363d9e2c0da5850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b33107448b28b14fc7ad94412e6cbbcbbf174a330908084363d9e2c0da5850->enter($__internal_f4b33107448b28b14fc7ad94412e6cbbcbbf174a330908084363d9e2c0da5850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d08b760368dd3c9cbac1fa4094825a73790d55a5793db0f7a436e434acba0278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08b760368dd3c9cbac1fa4094825a73790d55a5793db0f7a436e434acba0278->enter($__internal_d08b760368dd3c9cbac1fa4094825a73790d55a5793db0f7a436e434acba0278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f4b33107448b28b14fc7ad94412e6cbbcbbf174a330908084363d9e2c0da5850->leave($__internal_f4b33107448b28b14fc7ad94412e6cbbcbbf174a330908084363d9e2c0da5850_prof);

        
        $__internal_d08b760368dd3c9cbac1fa4094825a73790d55a5793db0f7a436e434acba0278->leave($__internal_d08b760368dd3c9cbac1fa4094825a73790d55a5793db0f7a436e434acba0278_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
