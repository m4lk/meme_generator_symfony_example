<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0aec0b89d34e97939177ec7b730d1012f2267dd374faca27bc297d692eb99a71 extends Twig_Template
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
        $__internal_a552914f422184b8211e58ac884860575dcc78550abf3b99227e4a881218d1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a552914f422184b8211e58ac884860575dcc78550abf3b99227e4a881218d1f6->enter($__internal_a552914f422184b8211e58ac884860575dcc78550abf3b99227e4a881218d1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_1ae8549916eba81ac6000e59f9e59d2a09c25b25009a7332951a049e513c81c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae8549916eba81ac6000e59f9e59d2a09c25b25009a7332951a049e513c81c0->enter($__internal_1ae8549916eba81ac6000e59f9e59d2a09c25b25009a7332951a049e513c81c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a552914f422184b8211e58ac884860575dcc78550abf3b99227e4a881218d1f6->leave($__internal_a552914f422184b8211e58ac884860575dcc78550abf3b99227e4a881218d1f6_prof);

        
        $__internal_1ae8549916eba81ac6000e59f9e59d2a09c25b25009a7332951a049e513c81c0->leave($__internal_1ae8549916eba81ac6000e59f9e59d2a09c25b25009a7332951a049e513c81c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
