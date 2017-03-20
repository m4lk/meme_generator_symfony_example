<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_35885276d5eb8475aa58384167b70a3f6e088b4795a2c9b923bbb8c969d016cc extends Twig_Template
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
        $__internal_d34f686f71d732a166caa5005fdfcb93dfd5c257b9b562797ca9a4623b0512f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34f686f71d732a166caa5005fdfcb93dfd5c257b9b562797ca9a4623b0512f2->enter($__internal_d34f686f71d732a166caa5005fdfcb93dfd5c257b9b562797ca9a4623b0512f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_66271dc696814bd6efafad69f16b3f61185a43b115ec4c64f0e67e3b0a787d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66271dc696814bd6efafad69f16b3f61185a43b115ec4c64f0e67e3b0a787d3c->enter($__internal_66271dc696814bd6efafad69f16b3f61185a43b115ec4c64f0e67e3b0a787d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_d34f686f71d732a166caa5005fdfcb93dfd5c257b9b562797ca9a4623b0512f2->leave($__internal_d34f686f71d732a166caa5005fdfcb93dfd5c257b9b562797ca9a4623b0512f2_prof);

        
        $__internal_66271dc696814bd6efafad69f16b3f61185a43b115ec4c64f0e67e3b0a787d3c->leave($__internal_66271dc696814bd6efafad69f16b3f61185a43b115ec4c64f0e67e3b0a787d3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
