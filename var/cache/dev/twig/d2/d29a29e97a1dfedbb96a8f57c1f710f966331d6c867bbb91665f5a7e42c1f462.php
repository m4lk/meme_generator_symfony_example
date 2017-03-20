<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7bb567da3e648f12276439bec199f516d0edb05dc6f0cb1731fdc69d37043af3 extends Twig_Template
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
        $__internal_4e9447a34e51a37be25ab30809667f5239e0418e27f4c3da6d0f32fb21fa743c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9447a34e51a37be25ab30809667f5239e0418e27f4c3da6d0f32fb21fa743c->enter($__internal_4e9447a34e51a37be25ab30809667f5239e0418e27f4c3da6d0f32fb21fa743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7cabc735b2357873c3d2655861fbf735e8b3ffba363e876f6cd4d0c4ba5d3568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cabc735b2357873c3d2655861fbf735e8b3ffba363e876f6cd4d0c4ba5d3568->enter($__internal_7cabc735b2357873c3d2655861fbf735e8b3ffba363e876f6cd4d0c4ba5d3568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4e9447a34e51a37be25ab30809667f5239e0418e27f4c3da6d0f32fb21fa743c->leave($__internal_4e9447a34e51a37be25ab30809667f5239e0418e27f4c3da6d0f32fb21fa743c_prof);

        
        $__internal_7cabc735b2357873c3d2655861fbf735e8b3ffba363e876f6cd4d0c4ba5d3568->leave($__internal_7cabc735b2357873c3d2655861fbf735e8b3ffba363e876f6cd4d0c4ba5d3568_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
