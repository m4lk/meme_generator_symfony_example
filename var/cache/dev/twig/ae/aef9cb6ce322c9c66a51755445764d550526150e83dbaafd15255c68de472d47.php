<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cc9aaea6ae3d372f6464b82e3cf8210e106474bc5db1103417d2723403d9ee23 extends Twig_Template
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
        $__internal_4a125b78c5c6ad8259f09181c34cadd3ea67dfd324dbdbb64c61facf623036b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a125b78c5c6ad8259f09181c34cadd3ea67dfd324dbdbb64c61facf623036b1->enter($__internal_4a125b78c5c6ad8259f09181c34cadd3ea67dfd324dbdbb64c61facf623036b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_528d2a37dfe919bd7f89d91ab96aa409378f7631acb9901b63f65f9b54c665af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528d2a37dfe919bd7f89d91ab96aa409378f7631acb9901b63f65f9b54c665af->enter($__internal_528d2a37dfe919bd7f89d91ab96aa409378f7631acb9901b63f65f9b54c665af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4a125b78c5c6ad8259f09181c34cadd3ea67dfd324dbdbb64c61facf623036b1->leave($__internal_4a125b78c5c6ad8259f09181c34cadd3ea67dfd324dbdbb64c61facf623036b1_prof);

        
        $__internal_528d2a37dfe919bd7f89d91ab96aa409378f7631acb9901b63f65f9b54c665af->leave($__internal_528d2a37dfe919bd7f89d91ab96aa409378f7631acb9901b63f65f9b54c665af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
