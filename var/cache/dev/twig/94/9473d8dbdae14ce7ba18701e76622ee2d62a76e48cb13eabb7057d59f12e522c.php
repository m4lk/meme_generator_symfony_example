<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_092923036d7eef34efad96b411abd088db4bcfa10b4631c81c08fca2b88d724d extends Twig_Template
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
        $__internal_7ae8c8179f82b5c50bc73ea936eab2308b6c4b1b89075f43e90a08c978c15611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae8c8179f82b5c50bc73ea936eab2308b6c4b1b89075f43e90a08c978c15611->enter($__internal_7ae8c8179f82b5c50bc73ea936eab2308b6c4b1b89075f43e90a08c978c15611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e77f4403c17774e821a42e18f6782475a6ea2b4bf674e461c2beec2534ea6bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77f4403c17774e821a42e18f6782475a6ea2b4bf674e461c2beec2534ea6bda->enter($__internal_e77f4403c17774e821a42e18f6782475a6ea2b4bf674e461c2beec2534ea6bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7ae8c8179f82b5c50bc73ea936eab2308b6c4b1b89075f43e90a08c978c15611->leave($__internal_7ae8c8179f82b5c50bc73ea936eab2308b6c4b1b89075f43e90a08c978c15611_prof);

        
        $__internal_e77f4403c17774e821a42e18f6782475a6ea2b4bf674e461c2beec2534ea6bda->leave($__internal_e77f4403c17774e821a42e18f6782475a6ea2b4bf674e461c2beec2534ea6bda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
