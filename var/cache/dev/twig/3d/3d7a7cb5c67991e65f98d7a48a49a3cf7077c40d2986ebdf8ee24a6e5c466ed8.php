<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_fa7c8e29a3dd0d6b0222043c12cc4715e245765599a7149f50c1ab29cf83e812 extends Twig_Template
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
        $__internal_4616463818234de044a1f8114a228e42bf945a4b5e739b1ef39bf7432bf41d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4616463818234de044a1f8114a228e42bf945a4b5e739b1ef39bf7432bf41d46->enter($__internal_4616463818234de044a1f8114a228e42bf945a4b5e739b1ef39bf7432bf41d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f7bfafb83a35b3e2e51d913a81dd750372cf905d4587818230acaf45f921f5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bfafb83a35b3e2e51d913a81dd750372cf905d4587818230acaf45f921f5ac->enter($__internal_f7bfafb83a35b3e2e51d913a81dd750372cf905d4587818230acaf45f921f5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4616463818234de044a1f8114a228e42bf945a4b5e739b1ef39bf7432bf41d46->leave($__internal_4616463818234de044a1f8114a228e42bf945a4b5e739b1ef39bf7432bf41d46_prof);

        
        $__internal_f7bfafb83a35b3e2e51d913a81dd750372cf905d4587818230acaf45f921f5ac->leave($__internal_f7bfafb83a35b3e2e51d913a81dd750372cf905d4587818230acaf45f921f5ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
