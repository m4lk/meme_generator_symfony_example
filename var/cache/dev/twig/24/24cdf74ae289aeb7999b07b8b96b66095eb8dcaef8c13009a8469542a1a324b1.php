<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4a63ab1b976b3f039e1099b23d0a32cd6339cedcd3ed5d9c28a6bfc8c517f3f9 extends Twig_Template
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
        $__internal_5a021090ea980b9297cabc1d14e31a1992f179cb614e7571049812b4119b67da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a021090ea980b9297cabc1d14e31a1992f179cb614e7571049812b4119b67da->enter($__internal_5a021090ea980b9297cabc1d14e31a1992f179cb614e7571049812b4119b67da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4928519b5a95fc6fd8e9eca5b56afa5db525b239bbd6d71b7844456bd29a1cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4928519b5a95fc6fd8e9eca5b56afa5db525b239bbd6d71b7844456bd29a1cec->enter($__internal_4928519b5a95fc6fd8e9eca5b56afa5db525b239bbd6d71b7844456bd29a1cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5a021090ea980b9297cabc1d14e31a1992f179cb614e7571049812b4119b67da->leave($__internal_5a021090ea980b9297cabc1d14e31a1992f179cb614e7571049812b4119b67da_prof);

        
        $__internal_4928519b5a95fc6fd8e9eca5b56afa5db525b239bbd6d71b7844456bd29a1cec->leave($__internal_4928519b5a95fc6fd8e9eca5b56afa5db525b239bbd6d71b7844456bd29a1cec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
