<?php

/* Security/login.html.php */
class __TwigTemplate_56bdfd1ee0417da0ab374f36a02a2e3eaab2e6c16810b65d6b1efb9de00b5843 extends Twig_Template
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
        $__internal_63ec5521d300b9058c09fe096a988febcc6d408ef606ea292455d0da3742719c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ec5521d300b9058c09fe096a988febcc6d408ef606ea292455d0da3742719c->enter($__internal_63ec5521d300b9058c09fe096a988febcc6d408ef606ea292455d0da3742719c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/login.html.php"));

        $__internal_0f552f1dadd6e251aa475778784de94f077f7c37c1e55377825d1221f6f25327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f552f1dadd6e251aa475778784de94f077f7c37c1e55377825d1221f6f25327->enter($__internal_0f552f1dadd6e251aa475778784de94f077f7c37c1e55377825d1221f6f25327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/login.html.php"));

        // line 1
        echo "<!-- src/AppBundle/Resources/views/Security/login.html.php -->
<?php if (\$error): ?>
    <div><?php echo \$error->getMessage() ?></div>
<?php endif ?>

<form action=\"<?php echo \$view['router']->path('login'); ?>\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"<?php echo \$last_username ?>\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <!--
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    -->
    <input type=\"hidden\" name=\"_target_path\" value=\"<?php echo \$view['router']->path('register') ?>\" />

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"<?php echo \$view['form']->csrfToken('authenticate') ?>\"
    >

    <button type=\"submit\">login</button>
</form>";
        
        $__internal_63ec5521d300b9058c09fe096a988febcc6d408ef606ea292455d0da3742719c->leave($__internal_63ec5521d300b9058c09fe096a988febcc6d408ef606ea292455d0da3742719c_prof);

        
        $__internal_0f552f1dadd6e251aa475778784de94f077f7c37c1e55377825d1221f6f25327->leave($__internal_0f552f1dadd6e251aa475778784de94f077f7c37c1e55377825d1221f6f25327_prof);

    }

    public function getTemplateName()
    {
        return "Security/login.html.php";
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
        return new Twig_Source("<!-- src/AppBundle/Resources/views/Security/login.html.php -->
<?php if (\$error): ?>
    <div><?php echo \$error->getMessage() ?></div>
<?php endif ?>

<form action=\"<?php echo \$view['router']->path('login'); ?>\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"<?php echo \$last_username ?>\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    <!--
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    -->
    <input type=\"hidden\" name=\"_target_path\" value=\"<?php echo \$view['router']->path('register') ?>\" />

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"<?php echo \$view['form']->csrfToken('authenticate') ?>\"
    >

    <button type=\"submit\">login</button>
</form>", "Security/login.html.php", "C:\\xampp\\htdocs\\poscad\\app\\Resources\\views\\Security\\login.html.php");
    }
}
