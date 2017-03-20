<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4df2947dbe9f426a69504f59c3186a8aa7723cf7edaf64e6e122f24124e1e69d extends Twig_Template
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
        $__internal_e78a5a85f209ad785a19da962ee1e4247c76748f4a14a16eb399f96da971e650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78a5a85f209ad785a19da962ee1e4247c76748f4a14a16eb399f96da971e650->enter($__internal_e78a5a85f209ad785a19da962ee1e4247c76748f4a14a16eb399f96da971e650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1ec203405bfe05a00a4c2a33ac90858d53153c12fde9ad62ea7e55fb4b7bb55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec203405bfe05a00a4c2a33ac90858d53153c12fde9ad62ea7e55fb4b7bb55a->enter($__internal_1ec203405bfe05a00a4c2a33ac90858d53153c12fde9ad62ea7e55fb4b7bb55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e78a5a85f209ad785a19da962ee1e4247c76748f4a14a16eb399f96da971e650->leave($__internal_e78a5a85f209ad785a19da962ee1e4247c76748f4a14a16eb399f96da971e650_prof);

        
        $__internal_1ec203405bfe05a00a4c2a33ac90858d53153c12fde9ad62ea7e55fb4b7bb55a->leave($__internal_1ec203405bfe05a00a4c2a33ac90858d53153c12fde9ad62ea7e55fb4b7bb55a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
