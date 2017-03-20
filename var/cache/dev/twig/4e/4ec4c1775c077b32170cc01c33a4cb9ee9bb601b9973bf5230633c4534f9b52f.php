<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_456461251a495eb5dbc4c939205c4d9e6a0bb141a0ec82fa2cbd5d2d2160210c extends Twig_Template
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
        $__internal_dbc2cbae007723104fbf083059f23cb744544096a8b8b4274c4e9a89b143930d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc2cbae007723104fbf083059f23cb744544096a8b8b4274c4e9a89b143930d->enter($__internal_dbc2cbae007723104fbf083059f23cb744544096a8b8b4274c4e9a89b143930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_7f7d8485c341cb1bbe86176e66a23add8ad33fb3bf3ee838e4f329104cbd7e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f7d8485c341cb1bbe86176e66a23add8ad33fb3bf3ee838e4f329104cbd7e6c->enter($__internal_7f7d8485c341cb1bbe86176e66a23add8ad33fb3bf3ee838e4f329104cbd7e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_dbc2cbae007723104fbf083059f23cb744544096a8b8b4274c4e9a89b143930d->leave($__internal_dbc2cbae007723104fbf083059f23cb744544096a8b8b4274c4e9a89b143930d_prof);

        
        $__internal_7f7d8485c341cb1bbe86176e66a23add8ad33fb3bf3ee838e4f329104cbd7e6c->leave($__internal_7f7d8485c341cb1bbe86176e66a23add8ad33fb3bf3ee838e4f329104cbd7e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
