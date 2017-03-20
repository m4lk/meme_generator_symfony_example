<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a29a1df1e30417c8d218f8e257d68af02c1fac00ba42525066f39dd88c646350 extends Twig_Template
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
        $__internal_af65eb848a8d0fe678dcec30fcb64605e08e8844c0f39fc8a2e88a2c65ca6c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af65eb848a8d0fe678dcec30fcb64605e08e8844c0f39fc8a2e88a2c65ca6c22->enter($__internal_af65eb848a8d0fe678dcec30fcb64605e08e8844c0f39fc8a2e88a2c65ca6c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9b4d6cb83425d0f4df289f7e3672cd2fdaf41fbc005ce7df63253940d3de69fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4d6cb83425d0f4df289f7e3672cd2fdaf41fbc005ce7df63253940d3de69fb->enter($__internal_9b4d6cb83425d0f4df289f7e3672cd2fdaf41fbc005ce7df63253940d3de69fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_af65eb848a8d0fe678dcec30fcb64605e08e8844c0f39fc8a2e88a2c65ca6c22->leave($__internal_af65eb848a8d0fe678dcec30fcb64605e08e8844c0f39fc8a2e88a2c65ca6c22_prof);

        
        $__internal_9b4d6cb83425d0f4df289f7e3672cd2fdaf41fbc005ce7df63253940d3de69fb->leave($__internal_9b4d6cb83425d0f4df289f7e3672cd2fdaf41fbc005ce7df63253940d3de69fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
