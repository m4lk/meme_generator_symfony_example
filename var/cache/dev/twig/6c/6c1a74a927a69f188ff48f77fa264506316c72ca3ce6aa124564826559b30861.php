<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e5751dc84b6de05772dc8770580f1ccdbce2eed23eabf054ead51b3dbe09fcb9 extends Twig_Template
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
        $__internal_b0302ff9888a09a1a33da7033e5aa26e0b01c2210fbe080a19fa470aca5a9767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0302ff9888a09a1a33da7033e5aa26e0b01c2210fbe080a19fa470aca5a9767->enter($__internal_b0302ff9888a09a1a33da7033e5aa26e0b01c2210fbe080a19fa470aca5a9767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_bad967e9500123338e7afd0a61eaf1f507b4a10ef4a27d41f887b4a1a8f15009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad967e9500123338e7afd0a61eaf1f507b4a10ef4a27d41f887b4a1a8f15009->enter($__internal_bad967e9500123338e7afd0a61eaf1f507b4a10ef4a27d41f887b4a1a8f15009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b0302ff9888a09a1a33da7033e5aa26e0b01c2210fbe080a19fa470aca5a9767->leave($__internal_b0302ff9888a09a1a33da7033e5aa26e0b01c2210fbe080a19fa470aca5a9767_prof);

        
        $__internal_bad967e9500123338e7afd0a61eaf1f507b4a10ef4a27d41f887b4a1a8f15009->leave($__internal_bad967e9500123338e7afd0a61eaf1f507b4a10ef4a27d41f887b4a1a8f15009_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
