<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bce76e6d162c2e6ec6331029fa8bcc1c4f8288e31864442e38eef96fa54f2c50 extends Twig_Template
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
        $__internal_c660412b83dbd7a17be023a7df19936065b933da70ebf7d8328754d9af210e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c660412b83dbd7a17be023a7df19936065b933da70ebf7d8328754d9af210e80->enter($__internal_c660412b83dbd7a17be023a7df19936065b933da70ebf7d8328754d9af210e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_72f39bafcef2cbf54dc9356bb87f2a9326f31304f94a87e0352839814e21d9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f39bafcef2cbf54dc9356bb87f2a9326f31304f94a87e0352839814e21d9c8->enter($__internal_72f39bafcef2cbf54dc9356bb87f2a9326f31304f94a87e0352839814e21d9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c660412b83dbd7a17be023a7df19936065b933da70ebf7d8328754d9af210e80->leave($__internal_c660412b83dbd7a17be023a7df19936065b933da70ebf7d8328754d9af210e80_prof);

        
        $__internal_72f39bafcef2cbf54dc9356bb87f2a9326f31304f94a87e0352839814e21d9c8->leave($__internal_72f39bafcef2cbf54dc9356bb87f2a9326f31304f94a87e0352839814e21d9c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
