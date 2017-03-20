<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_56543343d49c60726b2ac60f6448c00f12b8a0d1f13532c0ee26a8cb2c8989d9 extends Twig_Template
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
        $__internal_869324918a73ed74a183cbf8fd0bdbfce72ead278e3b1a439781b204322fb97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869324918a73ed74a183cbf8fd0bdbfce72ead278e3b1a439781b204322fb97f->enter($__internal_869324918a73ed74a183cbf8fd0bdbfce72ead278e3b1a439781b204322fb97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_31c7168ad398ceb645bde2646b79187e3da8190a3ba0022202f63ebf4ae3138c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c7168ad398ceb645bde2646b79187e3da8190a3ba0022202f63ebf4ae3138c->enter($__internal_31c7168ad398ceb645bde2646b79187e3da8190a3ba0022202f63ebf4ae3138c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_869324918a73ed74a183cbf8fd0bdbfce72ead278e3b1a439781b204322fb97f->leave($__internal_869324918a73ed74a183cbf8fd0bdbfce72ead278e3b1a439781b204322fb97f_prof);

        
        $__internal_31c7168ad398ceb645bde2646b79187e3da8190a3ba0022202f63ebf4ae3138c->leave($__internal_31c7168ad398ceb645bde2646b79187e3da8190a3ba0022202f63ebf4ae3138c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
