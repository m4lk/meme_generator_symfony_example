<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_cd6a93ee56dbb9a27e4f5dfe045108e27ccdefd901336ffdf003c010f26fc170 extends Twig_Template
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
        $__internal_0f25b2709be44d74410cda8c73b5b084cbc940f65a3bcc0de754a39d8bfe335d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f25b2709be44d74410cda8c73b5b084cbc940f65a3bcc0de754a39d8bfe335d->enter($__internal_0f25b2709be44d74410cda8c73b5b084cbc940f65a3bcc0de754a39d8bfe335d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_a742d767c9e5194a1faaec88d90e41e16d3ebf30fd2c6590a07e5d848a99c31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a742d767c9e5194a1faaec88d90e41e16d3ebf30fd2c6590a07e5d848a99c31d->enter($__internal_a742d767c9e5194a1faaec88d90e41e16d3ebf30fd2c6590a07e5d848a99c31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0f25b2709be44d74410cda8c73b5b084cbc940f65a3bcc0de754a39d8bfe335d->leave($__internal_0f25b2709be44d74410cda8c73b5b084cbc940f65a3bcc0de754a39d8bfe335d_prof);

        
        $__internal_a742d767c9e5194a1faaec88d90e41e16d3ebf30fd2c6590a07e5d848a99c31d->leave($__internal_a742d767c9e5194a1faaec88d90e41e16d3ebf30fd2c6590a07e5d848a99c31d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/rodrigo/projects/meme_generator/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
