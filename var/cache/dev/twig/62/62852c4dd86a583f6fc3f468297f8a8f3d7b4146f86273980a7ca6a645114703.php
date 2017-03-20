<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f91e3b4ea67c6720c844cf7e7f75fa77fb44176a5a0f6cc059fe4897b499f77f extends Twig_Template
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
        $__internal_37f4f2513936576f911f95549dc0b91d5e080db15e67690f81aabeee00037d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f4f2513936576f911f95549dc0b91d5e080db15e67690f81aabeee00037d61->enter($__internal_37f4f2513936576f911f95549dc0b91d5e080db15e67690f81aabeee00037d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_aadd44740e399cd652ff4340287b4c38dd9c86e085919f04e7ba0e806f0c5d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aadd44740e399cd652ff4340287b4c38dd9c86e085919f04e7ba0e806f0c5d32->enter($__internal_aadd44740e399cd652ff4340287b4c38dd9c86e085919f04e7ba0e806f0c5d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_37f4f2513936576f911f95549dc0b91d5e080db15e67690f81aabeee00037d61->leave($__internal_37f4f2513936576f911f95549dc0b91d5e080db15e67690f81aabeee00037d61_prof);

        
        $__internal_aadd44740e399cd652ff4340287b4c38dd9c86e085919f04e7ba0e806f0c5d32->leave($__internal_aadd44740e399cd652ff4340287b4c38dd9c86e085919f04e7ba0e806f0c5d32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
