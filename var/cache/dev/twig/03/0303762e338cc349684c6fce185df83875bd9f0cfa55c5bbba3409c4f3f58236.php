<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_60ca613ac432267412d45e28319f5a0f77829cc0c43c6e13f00a29df23229e85 extends Twig_Template
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
        $__internal_75cc6bf7f3f068231a09ff267654e362c8546d40ca49b009489979a49e2683d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75cc6bf7f3f068231a09ff267654e362c8546d40ca49b009489979a49e2683d5->enter($__internal_75cc6bf7f3f068231a09ff267654e362c8546d40ca49b009489979a49e2683d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a74d1385c081fe7ad012532e76a548cb3e985771759fb537659ffe6a1b10f0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74d1385c081fe7ad012532e76a548cb3e985771759fb537659ffe6a1b10f0ed->enter($__internal_a74d1385c081fe7ad012532e76a548cb3e985771759fb537659ffe6a1b10f0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_75cc6bf7f3f068231a09ff267654e362c8546d40ca49b009489979a49e2683d5->leave($__internal_75cc6bf7f3f068231a09ff267654e362c8546d40ca49b009489979a49e2683d5_prof);

        
        $__internal_a74d1385c081fe7ad012532e76a548cb3e985771759fb537659ffe6a1b10f0ed->leave($__internal_a74d1385c081fe7ad012532e76a548cb3e985771759fb537659ffe6a1b10f0ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
