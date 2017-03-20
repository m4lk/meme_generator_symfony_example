<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_fc030ddf2e1023222e5996c07d5570ef061f32999e61f3b1a515ef04a0e330b2 extends Twig_Template
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
        $__internal_51efbe0c132e25aa08e93f3b4507800dcd7640d48e0733d02fa932f24195d0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51efbe0c132e25aa08e93f3b4507800dcd7640d48e0733d02fa932f24195d0ff->enter($__internal_51efbe0c132e25aa08e93f3b4507800dcd7640d48e0733d02fa932f24195d0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1b9c08381996859ae6fd4350453f029730a35b01e25d1c5784e58ce7e78c24f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9c08381996859ae6fd4350453f029730a35b01e25d1c5784e58ce7e78c24f2->enter($__internal_1b9c08381996859ae6fd4350453f029730a35b01e25d1c5784e58ce7e78c24f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_51efbe0c132e25aa08e93f3b4507800dcd7640d48e0733d02fa932f24195d0ff->leave($__internal_51efbe0c132e25aa08e93f3b4507800dcd7640d48e0733d02fa932f24195d0ff_prof);

        
        $__internal_1b9c08381996859ae6fd4350453f029730a35b01e25d1c5784e58ce7e78c24f2->leave($__internal_1b9c08381996859ae6fd4350453f029730a35b01e25d1c5784e58ce7e78c24f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
