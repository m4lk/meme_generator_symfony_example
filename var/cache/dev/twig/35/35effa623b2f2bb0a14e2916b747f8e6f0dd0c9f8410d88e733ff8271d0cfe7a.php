<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a65b81658467db623891a3201328503c3d3d88a136f4dd13657348c7164c78e5 extends Twig_Template
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
        $__internal_025c747453d284d516e1b8a3d938e436cfc3e6a95bc5667a1b51ffb32f10ee81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025c747453d284d516e1b8a3d938e436cfc3e6a95bc5667a1b51ffb32f10ee81->enter($__internal_025c747453d284d516e1b8a3d938e436cfc3e6a95bc5667a1b51ffb32f10ee81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_08a06e9f696d25d4705f49d29a9f9470b00107ce8e48da2b8df0c16368131b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a06e9f696d25d4705f49d29a9f9470b00107ce8e48da2b8df0c16368131b55->enter($__internal_08a06e9f696d25d4705f49d29a9f9470b00107ce8e48da2b8df0c16368131b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_025c747453d284d516e1b8a3d938e436cfc3e6a95bc5667a1b51ffb32f10ee81->leave($__internal_025c747453d284d516e1b8a3d938e436cfc3e6a95bc5667a1b51ffb32f10ee81_prof);

        
        $__internal_08a06e9f696d25d4705f49d29a9f9470b00107ce8e48da2b8df0c16368131b55->leave($__internal_08a06e9f696d25d4705f49d29a9f9470b00107ce8e48da2b8df0c16368131b55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
