<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_31b3dfc4172b3518fd114d0dedd9b4215203c463bdb57980170dc8daeb625247 extends Twig_Template
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
        $__internal_b4a62b1dd6d6b729004071747e034623ca78690347b7208ed255ccbc55137b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a62b1dd6d6b729004071747e034623ca78690347b7208ed255ccbc55137b34->enter($__internal_b4a62b1dd6d6b729004071747e034623ca78690347b7208ed255ccbc55137b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f488473876ba055d2ab73a6e1808af3a17854449721d33e5186e3137398da06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f488473876ba055d2ab73a6e1808af3a17854449721d33e5186e3137398da06c->enter($__internal_f488473876ba055d2ab73a6e1808af3a17854449721d33e5186e3137398da06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b4a62b1dd6d6b729004071747e034623ca78690347b7208ed255ccbc55137b34->leave($__internal_b4a62b1dd6d6b729004071747e034623ca78690347b7208ed255ccbc55137b34_prof);

        
        $__internal_f488473876ba055d2ab73a6e1808af3a17854449721d33e5186e3137398da06c->leave($__internal_f488473876ba055d2ab73a6e1808af3a17854449721d33e5186e3137398da06c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
