<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a072bd729e99f6d7b8b0d1208a117409dc7022c33d26bd75e684a6118a2c424b extends Twig_Template
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
        $__internal_b006844e5799574050abcb8f27547b2b6cf53b238aaca62ddad11b296ffee34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b006844e5799574050abcb8f27547b2b6cf53b238aaca62ddad11b296ffee34a->enter($__internal_b006844e5799574050abcb8f27547b2b6cf53b238aaca62ddad11b296ffee34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_404e6df16b2a673f77f19a57c1c75f9e993bd43bad7970711886a47d0931d1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404e6df16b2a673f77f19a57c1c75f9e993bd43bad7970711886a47d0931d1b2->enter($__internal_404e6df16b2a673f77f19a57c1c75f9e993bd43bad7970711886a47d0931d1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b006844e5799574050abcb8f27547b2b6cf53b238aaca62ddad11b296ffee34a->leave($__internal_b006844e5799574050abcb8f27547b2b6cf53b238aaca62ddad11b296ffee34a_prof);

        
        $__internal_404e6df16b2a673f77f19a57c1c75f9e993bd43bad7970711886a47d0931d1b2->leave($__internal_404e6df16b2a673f77f19a57c1c75f9e993bd43bad7970711886a47d0931d1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
