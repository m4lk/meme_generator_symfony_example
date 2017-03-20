<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_82cda9981c2f09982efcdb246405bbe878aab73e4cfa1da2139ff80349ddc983 extends Twig_Template
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
        $__internal_5d08c09b181d89ec659cfc8be7b22924399f7e8ea8eb07c437f0569f7e3c2b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d08c09b181d89ec659cfc8be7b22924399f7e8ea8eb07c437f0569f7e3c2b83->enter($__internal_5d08c09b181d89ec659cfc8be7b22924399f7e8ea8eb07c437f0569f7e3c2b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e2088047bd2a07ac3b498d8af08b88c7214de04896fe01d2c1820a1f9942ab3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2088047bd2a07ac3b498d8af08b88c7214de04896fe01d2c1820a1f9942ab3a->enter($__internal_e2088047bd2a07ac3b498d8af08b88c7214de04896fe01d2c1820a1f9942ab3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5d08c09b181d89ec659cfc8be7b22924399f7e8ea8eb07c437f0569f7e3c2b83->leave($__internal_5d08c09b181d89ec659cfc8be7b22924399f7e8ea8eb07c437f0569f7e3c2b83_prof);

        
        $__internal_e2088047bd2a07ac3b498d8af08b88c7214de04896fe01d2c1820a1f9942ab3a->leave($__internal_e2088047bd2a07ac3b498d8af08b88c7214de04896fe01d2c1820a1f9942ab3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
