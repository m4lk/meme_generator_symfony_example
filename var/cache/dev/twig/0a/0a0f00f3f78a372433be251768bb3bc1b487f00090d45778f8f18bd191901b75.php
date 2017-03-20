<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_512f99256020b6656a72e72c5253089fc4748aa73537987c09bfe6f57af47e4e extends Twig_Template
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
        $__internal_50753a65e30a0aac5c8c29aa6ce7f61a0c65ae2eb516a8b580708950a0f31513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50753a65e30a0aac5c8c29aa6ce7f61a0c65ae2eb516a8b580708950a0f31513->enter($__internal_50753a65e30a0aac5c8c29aa6ce7f61a0c65ae2eb516a8b580708950a0f31513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9a619bcb79df43b929c0268b6b476e1cfa96fb4b9e7ac147d521bbc519273d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a619bcb79df43b929c0268b6b476e1cfa96fb4b9e7ac147d521bbc519273d8f->enter($__internal_9a619bcb79df43b929c0268b6b476e1cfa96fb4b9e7ac147d521bbc519273d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_50753a65e30a0aac5c8c29aa6ce7f61a0c65ae2eb516a8b580708950a0f31513->leave($__internal_50753a65e30a0aac5c8c29aa6ce7f61a0c65ae2eb516a8b580708950a0f31513_prof);

        
        $__internal_9a619bcb79df43b929c0268b6b476e1cfa96fb4b9e7ac147d521bbc519273d8f->leave($__internal_9a619bcb79df43b929c0268b6b476e1cfa96fb4b9e7ac147d521bbc519273d8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
