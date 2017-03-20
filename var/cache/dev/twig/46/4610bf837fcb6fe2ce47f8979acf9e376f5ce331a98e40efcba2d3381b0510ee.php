<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2cade0925d14ea3aafaee5872c3d8b588d09601bc28307458cfb973403b33ba9 extends Twig_Template
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
        $__internal_248e01057bb858312c402b601784e82bdcdc302c79fef6f7974c1501ec7ad05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248e01057bb858312c402b601784e82bdcdc302c79fef6f7974c1501ec7ad05a->enter($__internal_248e01057bb858312c402b601784e82bdcdc302c79fef6f7974c1501ec7ad05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2ffda4163cc158b5359802a4d99a0e5f22a3ad2a21b56c01c8cc38c095d9544d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffda4163cc158b5359802a4d99a0e5f22a3ad2a21b56c01c8cc38c095d9544d->enter($__internal_2ffda4163cc158b5359802a4d99a0e5f22a3ad2a21b56c01c8cc38c095d9544d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_248e01057bb858312c402b601784e82bdcdc302c79fef6f7974c1501ec7ad05a->leave($__internal_248e01057bb858312c402b601784e82bdcdc302c79fef6f7974c1501ec7ad05a_prof);

        
        $__internal_2ffda4163cc158b5359802a4d99a0e5f22a3ad2a21b56c01c8cc38c095d9544d->leave($__internal_2ffda4163cc158b5359802a4d99a0e5f22a3ad2a21b56c01c8cc38c095d9544d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
