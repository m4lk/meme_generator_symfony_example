<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_1df0b795e694b7e0ee2d4b60b96843db5fd21aa248100490fbd97dc5a1ac7849 extends Twig_Template
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
        $__internal_46c04e99fc56f4aebe304dec7b480c088d5712025ba5361a975d669e42d40042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c04e99fc56f4aebe304dec7b480c088d5712025ba5361a975d669e42d40042->enter($__internal_46c04e99fc56f4aebe304dec7b480c088d5712025ba5361a975d669e42d40042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e10ec1c6d05f9660b1ffb9a9cbd996a30f1784f753dc19f5edf4e886591d4ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10ec1c6d05f9660b1ffb9a9cbd996a30f1784f753dc19f5edf4e886591d4ae1->enter($__internal_e10ec1c6d05f9660b1ffb9a9cbd996a30f1784f753dc19f5edf4e886591d4ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_46c04e99fc56f4aebe304dec7b480c088d5712025ba5361a975d669e42d40042->leave($__internal_46c04e99fc56f4aebe304dec7b480c088d5712025ba5361a975d669e42d40042_prof);

        
        $__internal_e10ec1c6d05f9660b1ffb9a9cbd996a30f1784f753dc19f5edf4e886591d4ae1->leave($__internal_e10ec1c6d05f9660b1ffb9a9cbd996a30f1784f753dc19f5edf4e886591d4ae1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
