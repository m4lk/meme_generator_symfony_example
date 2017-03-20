<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9f3b25ac94ddc11cbe0155cfcf05be10d7a7ef16ed5e5b67e529beff36d21f50 extends Twig_Template
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
        $__internal_4867d06d15f0992082d4ebf65b29d609e64963bac615424c09221d988298384a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4867d06d15f0992082d4ebf65b29d609e64963bac615424c09221d988298384a->enter($__internal_4867d06d15f0992082d4ebf65b29d609e64963bac615424c09221d988298384a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e502edcd2c65636d498000e4d36c273ee7caf5a13deecd91198bdd620ae2b0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e502edcd2c65636d498000e4d36c273ee7caf5a13deecd91198bdd620ae2b0f0->enter($__internal_e502edcd2c65636d498000e4d36c273ee7caf5a13deecd91198bdd620ae2b0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4867d06d15f0992082d4ebf65b29d609e64963bac615424c09221d988298384a->leave($__internal_4867d06d15f0992082d4ebf65b29d609e64963bac615424c09221d988298384a_prof);

        
        $__internal_e502edcd2c65636d498000e4d36c273ee7caf5a13deecd91198bdd620ae2b0f0->leave($__internal_e502edcd2c65636d498000e4d36c273ee7caf5a13deecd91198bdd620ae2b0f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
