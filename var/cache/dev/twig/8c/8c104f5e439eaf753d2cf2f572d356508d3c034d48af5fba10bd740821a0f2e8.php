<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_cb225385f31a49ff98c6ea22e18f19ed576909fd7898a7f2f42f320854a1e7ed extends Twig_Template
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
        $__internal_a75d24bc40979212019214f2017a4ac16efb2243512e7ecdebb8e8ed33aeffa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75d24bc40979212019214f2017a4ac16efb2243512e7ecdebb8e8ed33aeffa9->enter($__internal_a75d24bc40979212019214f2017a4ac16efb2243512e7ecdebb8e8ed33aeffa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_a0751c64295439a19bcd73d7176c320f73faa5fc896a727539764c1205923e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0751c64295439a19bcd73d7176c320f73faa5fc896a727539764c1205923e58->enter($__internal_a0751c64295439a19bcd73d7176c320f73faa5fc896a727539764c1205923e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a75d24bc40979212019214f2017a4ac16efb2243512e7ecdebb8e8ed33aeffa9->leave($__internal_a75d24bc40979212019214f2017a4ac16efb2243512e7ecdebb8e8ed33aeffa9_prof);

        
        $__internal_a0751c64295439a19bcd73d7176c320f73faa5fc896a727539764c1205923e58->leave($__internal_a0751c64295439a19bcd73d7176c320f73faa5fc896a727539764c1205923e58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
