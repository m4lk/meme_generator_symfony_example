<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_457fc857c26dbfa0cd52e5c276f0a0450a69da180f4dc041a2703bab1f7ebd10 extends Twig_Template
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
        $__internal_2ffc1c89030ea971178947ed2da9feb481bb109cc6dbc7c494ad99eb481587db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffc1c89030ea971178947ed2da9feb481bb109cc6dbc7c494ad99eb481587db->enter($__internal_2ffc1c89030ea971178947ed2da9feb481bb109cc6dbc7c494ad99eb481587db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ed39a216d83bdd7efaadec0b9266c2b6382cae8f6aaefe74111879dfa58d48b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed39a216d83bdd7efaadec0b9266c2b6382cae8f6aaefe74111879dfa58d48b2->enter($__internal_ed39a216d83bdd7efaadec0b9266c2b6382cae8f6aaefe74111879dfa58d48b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2ffc1c89030ea971178947ed2da9feb481bb109cc6dbc7c494ad99eb481587db->leave($__internal_2ffc1c89030ea971178947ed2da9feb481bb109cc6dbc7c494ad99eb481587db_prof);

        
        $__internal_ed39a216d83bdd7efaadec0b9266c2b6382cae8f6aaefe74111879dfa58d48b2->leave($__internal_ed39a216d83bdd7efaadec0b9266c2b6382cae8f6aaefe74111879dfa58d48b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
