<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ca668157ecbbb85c2293a68abaa13eeb1e50652dff7fa932213a61bfcffb8eef extends Twig_Template
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
        $__internal_3f97aaaf5051333e516217433964259924aa48f820d754daed1cd5db6285d1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f97aaaf5051333e516217433964259924aa48f820d754daed1cd5db6285d1d6->enter($__internal_3f97aaaf5051333e516217433964259924aa48f820d754daed1cd5db6285d1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_88159b2c79459563cb19cc0b87b02b0461cf06e3eaeddd0b5305df8adc010f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88159b2c79459563cb19cc0b87b02b0461cf06e3eaeddd0b5305df8adc010f60->enter($__internal_88159b2c79459563cb19cc0b87b02b0461cf06e3eaeddd0b5305df8adc010f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3f97aaaf5051333e516217433964259924aa48f820d754daed1cd5db6285d1d6->leave($__internal_3f97aaaf5051333e516217433964259924aa48f820d754daed1cd5db6285d1d6_prof);

        
        $__internal_88159b2c79459563cb19cc0b87b02b0461cf06e3eaeddd0b5305df8adc010f60->leave($__internal_88159b2c79459563cb19cc0b87b02b0461cf06e3eaeddd0b5305df8adc010f60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
