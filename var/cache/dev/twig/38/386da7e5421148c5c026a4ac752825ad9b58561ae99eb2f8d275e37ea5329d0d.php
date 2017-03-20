<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_29aac3e864f9f61ec0aefda04f4bf17c1011babedd1a3a7576730e93fa45cc96 extends Twig_Template
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
        $__internal_1f5206b7f1631c455c8fb6f659a98568d9e6384197195c45e86e4e5d667c1237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5206b7f1631c455c8fb6f659a98568d9e6384197195c45e86e4e5d667c1237->enter($__internal_1f5206b7f1631c455c8fb6f659a98568d9e6384197195c45e86e4e5d667c1237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4005b380a8140e83f09e32ebb21b4eaa2b7c46e078ba642fa55a74feff19ba33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4005b380a8140e83f09e32ebb21b4eaa2b7c46e078ba642fa55a74feff19ba33->enter($__internal_4005b380a8140e83f09e32ebb21b4eaa2b7c46e078ba642fa55a74feff19ba33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1f5206b7f1631c455c8fb6f659a98568d9e6384197195c45e86e4e5d667c1237->leave($__internal_1f5206b7f1631c455c8fb6f659a98568d9e6384197195c45e86e4e5d667c1237_prof);

        
        $__internal_4005b380a8140e83f09e32ebb21b4eaa2b7c46e078ba642fa55a74feff19ba33->leave($__internal_4005b380a8140e83f09e32ebb21b4eaa2b7c46e078ba642fa55a74feff19ba33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
