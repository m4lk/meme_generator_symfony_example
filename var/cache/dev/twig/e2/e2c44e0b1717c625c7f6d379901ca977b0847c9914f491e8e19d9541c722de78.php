<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3a2b8ade8aedafe4dd4b9d3e4a38841485a4dd964fa9a26b3e7bcfb0c570bdd1 extends Twig_Template
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
        $__internal_bfd025d88d5311c6b5bd8d9c0326956e9755e6bac9e4c7c238fe74bf02814b82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd025d88d5311c6b5bd8d9c0326956e9755e6bac9e4c7c238fe74bf02814b82->enter($__internal_bfd025d88d5311c6b5bd8d9c0326956e9755e6bac9e4c7c238fe74bf02814b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9d6b50d2cc6490cb1d9cad978f6d95247a9d684077174c24b43f18c581563377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6b50d2cc6490cb1d9cad978f6d95247a9d684077174c24b43f18c581563377->enter($__internal_9d6b50d2cc6490cb1d9cad978f6d95247a9d684077174c24b43f18c581563377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bfd025d88d5311c6b5bd8d9c0326956e9755e6bac9e4c7c238fe74bf02814b82->leave($__internal_bfd025d88d5311c6b5bd8d9c0326956e9755e6bac9e4c7c238fe74bf02814b82_prof);

        
        $__internal_9d6b50d2cc6490cb1d9cad978f6d95247a9d684077174c24b43f18c581563377->leave($__internal_9d6b50d2cc6490cb1d9cad978f6d95247a9d684077174c24b43f18c581563377_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
