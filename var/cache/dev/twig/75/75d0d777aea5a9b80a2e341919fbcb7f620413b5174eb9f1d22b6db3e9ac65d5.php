<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d0ea433c954008cc98fc4961ee87e62ea394532fe1ad525075d74e0fd9dc626d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f516cde2f347400bdd4c121828e80c296fb5609ffd4fa201d681e6533183ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f516cde2f347400bdd4c121828e80c296fb5609ffd4fa201d681e6533183ffb->enter($__internal_8f516cde2f347400bdd4c121828e80c296fb5609ffd4fa201d681e6533183ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e5c7b5e8b8912ce45be0baa6f691d1b1ad4decd1c1dd50f7eba9dbfee8c8ed3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c7b5e8b8912ce45be0baa6f691d1b1ad4decd1c1dd50f7eba9dbfee8c8ed3d->enter($__internal_e5c7b5e8b8912ce45be0baa6f691d1b1ad4decd1c1dd50f7eba9dbfee8c8ed3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f516cde2f347400bdd4c121828e80c296fb5609ffd4fa201d681e6533183ffb->leave($__internal_8f516cde2f347400bdd4c121828e80c296fb5609ffd4fa201d681e6533183ffb_prof);

        
        $__internal_e5c7b5e8b8912ce45be0baa6f691d1b1ad4decd1c1dd50f7eba9dbfee8c8ed3d->leave($__internal_e5c7b5e8b8912ce45be0baa6f691d1b1ad4decd1c1dd50f7eba9dbfee8c8ed3d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5abaced53b2cbf385000bf9a59cbe55f2c4403bb62e25a8ac192044dd8d41f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5abaced53b2cbf385000bf9a59cbe55f2c4403bb62e25a8ac192044dd8d41f5->enter($__internal_d5abaced53b2cbf385000bf9a59cbe55f2c4403bb62e25a8ac192044dd8d41f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dadc8af4b663d427ec1254875a781e14f779c96e0b553d188b9d9a85e54b9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dadc8af4b663d427ec1254875a781e14f779c96e0b553d188b9d9a85e54b9a6->enter($__internal_2dadc8af4b663d427ec1254875a781e14f779c96e0b553d188b9d9a85e54b9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2dadc8af4b663d427ec1254875a781e14f779c96e0b553d188b9d9a85e54b9a6->leave($__internal_2dadc8af4b663d427ec1254875a781e14f779c96e0b553d188b9d9a85e54b9a6_prof);

        
        $__internal_d5abaced53b2cbf385000bf9a59cbe55f2c4403bb62e25a8ac192044dd8d41f5->leave($__internal_d5abaced53b2cbf385000bf9a59cbe55f2c4403bb62e25a8ac192044dd8d41f5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_578c8be278ed5662ced92a86721b2acbd36d955b7f6a044346fb73643fdb6332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578c8be278ed5662ced92a86721b2acbd36d955b7f6a044346fb73643fdb6332->enter($__internal_578c8be278ed5662ced92a86721b2acbd36d955b7f6a044346fb73643fdb6332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_77807e962d5c91af307ffd3b4a37d626ce144f7965adcb2056759e147bcf92d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77807e962d5c91af307ffd3b4a37d626ce144f7965adcb2056759e147bcf92d4->enter($__internal_77807e962d5c91af307ffd3b4a37d626ce144f7965adcb2056759e147bcf92d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_77807e962d5c91af307ffd3b4a37d626ce144f7965adcb2056759e147bcf92d4->leave($__internal_77807e962d5c91af307ffd3b4a37d626ce144f7965adcb2056759e147bcf92d4_prof);

        
        $__internal_578c8be278ed5662ced92a86721b2acbd36d955b7f6a044346fb73643fdb6332->leave($__internal_578c8be278ed5662ced92a86721b2acbd36d955b7f6a044346fb73643fdb6332_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4008605463db0fda227f558897864908fa96cc72d2477425a25c567580083af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4008605463db0fda227f558897864908fa96cc72d2477425a25c567580083af->enter($__internal_f4008605463db0fda227f558897864908fa96cc72d2477425a25c567580083af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ff288358e848d30bd3d34b4415d3fbf6c3b6d3a9686bdf3874cfe78cefc28b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff288358e848d30bd3d34b4415d3fbf6c3b6d3a9686bdf3874cfe78cefc28b5->enter($__internal_8ff288358e848d30bd3d34b4415d3fbf6c3b6d3a9686bdf3874cfe78cefc28b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8ff288358e848d30bd3d34b4415d3fbf6c3b6d3a9686bdf3874cfe78cefc28b5->leave($__internal_8ff288358e848d30bd3d34b4415d3fbf6c3b6d3a9686bdf3874cfe78cefc28b5_prof);

        
        $__internal_f4008605463db0fda227f558897864908fa96cc72d2477425a25c567580083af->leave($__internal_f4008605463db0fda227f558897864908fa96cc72d2477425a25c567580083af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\poscad\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
