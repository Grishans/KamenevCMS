<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\Kamenev_at_cms/plugins/kamenev/feedback/components/feedbackform/default.htm */
class __TwigTemplate_a16cf3b4d8b47a3a6b17bd82f149af1569e3d09cbf06852adbc0af0fb2c1cd9f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form data-request=\"onSend\">
    <input type=\"text\" placeholder=\"Имя\" name=\"name\" required>
    <input type=\"email\" placeholder=\"Ваша электронная почта\" name=\"email\" required>
    <input type=\"text\" placeholder=\"Тип мероприятия\" name=\"type_event\" required>
    <textarea class=\"feedback__message\" placeholder=\"Сообщение\" name=\"content\"></textarea>
    <button class=\"feedback__send\">Отправить</button>
</form>";
    }

    public function getTemplateName()
    {
        return "D:\\Kamenev_at_cms/plugins/kamenev/feedback/components/feedbackform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onSend\">
    <input type=\"text\" placeholder=\"Имя\" name=\"name\" required>
    <input type=\"email\" placeholder=\"Ваша электронная почта\" name=\"email\" required>
    <input type=\"text\" placeholder=\"Тип мероприятия\" name=\"type_event\" required>
    <textarea class=\"feedback__message\" placeholder=\"Сообщение\" name=\"content\"></textarea>
    <button class=\"feedback__send\">Отправить</button>
</form>", "D:\\Kamenev_at_cms/plugins/kamenev/feedback/components/feedbackform/default.htm", "");
    }
}