<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a732411ce40823187880ac561e4698801f05641905434b4f050b7b5fdd667781 extends Twig_Template
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
        $__internal_eca600cf3b49949f678bbeb950b8441ae8fff0c87594aeb822ae08045a62e9a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca600cf3b49949f678bbeb950b8441ae8fff0c87594aeb822ae08045a62e9a4->enter($__internal_eca600cf3b49949f678bbeb950b8441ae8fff0c87594aeb822ae08045a62e9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0838a180cb1bbee2da804895d784fe75a9e5d934c2a3ff525ff0439709abb844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0838a180cb1bbee2da804895d784fe75a9e5d934c2a3ff525ff0439709abb844->enter($__internal_0838a180cb1bbee2da804895d784fe75a9e5d934c2a3ff525ff0439709abb844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_eca600cf3b49949f678bbeb950b8441ae8fff0c87594aeb822ae08045a62e9a4->leave($__internal_eca600cf3b49949f678bbeb950b8441ae8fff0c87594aeb822ae08045a62e9a4_prof);

        
        $__internal_0838a180cb1bbee2da804895d784fe75a9e5d934c2a3ff525ff0439709abb844->leave($__internal_0838a180cb1bbee2da804895d784fe75a9e5d934c2a3ff525ff0439709abb844_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
