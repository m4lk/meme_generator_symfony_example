<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_ee33d11415e603a2992349b0757045fe89e052696fe6c5bb9122c216d6cb7883 extends Twig_Template
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
        $__internal_785b30c99712302b99d585e7f18a70d4426abcc1001ba3dbf11b1474e7506927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785b30c99712302b99d585e7f18a70d4426abcc1001ba3dbf11b1474e7506927->enter($__internal_785b30c99712302b99d585e7f18a70d4426abcc1001ba3dbf11b1474e7506927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_46e970b4dfea5d5bcb2de26f935218f5b5ed7cbf6b0d839205452635570f8941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e970b4dfea5d5bcb2de26f935218f5b5ed7cbf6b0d839205452635570f8941->enter($__internal_46e970b4dfea5d5bcb2de26f935218f5b5ed7cbf6b0d839205452635570f8941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_785b30c99712302b99d585e7f18a70d4426abcc1001ba3dbf11b1474e7506927->leave($__internal_785b30c99712302b99d585e7f18a70d4426abcc1001ba3dbf11b1474e7506927_prof);

        
        $__internal_46e970b4dfea5d5bcb2de26f935218f5b5ed7cbf6b0d839205452635570f8941->leave($__internal_46e970b4dfea5d5bcb2de26f935218f5b5ed7cbf6b0d839205452635570f8941_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
