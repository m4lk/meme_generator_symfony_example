<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_a17ae1fabfd7785c5a1f9f4d0062aef97e889365740f511db2e59ec1311ee2ad extends Twig_Template
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
        $__internal_e726bec98424b0fcd64f1da63ce83a7d93bae889ec81f529b8e36e021b8fb437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e726bec98424b0fcd64f1da63ce83a7d93bae889ec81f529b8e36e021b8fb437->enter($__internal_e726bec98424b0fcd64f1da63ce83a7d93bae889ec81f529b8e36e021b8fb437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_829809b880eb89b9411a79f2b601ba53032c5e6ca47ec03c4463f51740763013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829809b880eb89b9411a79f2b601ba53032c5e6ca47ec03c4463f51740763013->enter($__internal_829809b880eb89b9411a79f2b601ba53032c5e6ca47ec03c4463f51740763013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e726bec98424b0fcd64f1da63ce83a7d93bae889ec81f529b8e36e021b8fb437->leave($__internal_e726bec98424b0fcd64f1da63ce83a7d93bae889ec81f529b8e36e021b8fb437_prof);

        
        $__internal_829809b880eb89b9411a79f2b601ba53032c5e6ca47ec03c4463f51740763013->leave($__internal_829809b880eb89b9411a79f2b601ba53032c5e6ca47ec03c4463f51740763013_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
