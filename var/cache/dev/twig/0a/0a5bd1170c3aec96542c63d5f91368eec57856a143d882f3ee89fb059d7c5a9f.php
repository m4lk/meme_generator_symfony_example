<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f95a9f330ef5182b0a66658e722793b12ef11f302da3f9db9a41632889ebc0f5 extends Twig_Template
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
        $__internal_540bdc09648a2885ad700ed96216b3bee0d3217fcbc5dc47e7983750971b5799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540bdc09648a2885ad700ed96216b3bee0d3217fcbc5dc47e7983750971b5799->enter($__internal_540bdc09648a2885ad700ed96216b3bee0d3217fcbc5dc47e7983750971b5799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_b8ac351dd0fca3aa3ccb53a729b140e3f8b7fa2465706b9e545d120cc8c501f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ac351dd0fca3aa3ccb53a729b140e3f8b7fa2465706b9e545d120cc8c501f3->enter($__internal_b8ac351dd0fca3aa3ccb53a729b140e3f8b7fa2465706b9e545d120cc8c501f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_540bdc09648a2885ad700ed96216b3bee0d3217fcbc5dc47e7983750971b5799->leave($__internal_540bdc09648a2885ad700ed96216b3bee0d3217fcbc5dc47e7983750971b5799_prof);

        
        $__internal_b8ac351dd0fca3aa3ccb53a729b140e3f8b7fa2465706b9e545d120cc8c501f3->leave($__internal_b8ac351dd0fca3aa3ccb53a729b140e3f8b7fa2465706b9e545d120cc8c501f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
