<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_528cc05383a5cd320f84a9c1182309572e6bc3ad84151b3e2ca7b4c5b4ea998d extends Twig_Template
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
        $__internal_57177493059b6b71fa966a3d0f85443d28cad921caaa2e3adcca62e3ab15114f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57177493059b6b71fa966a3d0f85443d28cad921caaa2e3adcca62e3ab15114f->enter($__internal_57177493059b6b71fa966a3d0f85443d28cad921caaa2e3adcca62e3ab15114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_cfdddecb91e52de74fd158fc0ac52524372bcba23398f0aefc5a3690ccaa5499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdddecb91e52de74fd158fc0ac52524372bcba23398f0aefc5a3690ccaa5499->enter($__internal_cfdddecb91e52de74fd158fc0ac52524372bcba23398f0aefc5a3690ccaa5499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_57177493059b6b71fa966a3d0f85443d28cad921caaa2e3adcca62e3ab15114f->leave($__internal_57177493059b6b71fa966a3d0f85443d28cad921caaa2e3adcca62e3ab15114f_prof);

        
        $__internal_cfdddecb91e52de74fd158fc0ac52524372bcba23398f0aefc5a3690ccaa5499->leave($__internal_cfdddecb91e52de74fd158fc0ac52524372bcba23398f0aefc5a3690ccaa5499_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
