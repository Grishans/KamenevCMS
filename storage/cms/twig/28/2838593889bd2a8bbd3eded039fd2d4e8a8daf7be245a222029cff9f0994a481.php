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

/* D:\Kamenev_at_cms/themes/kamenev/partials/biography.htm */
class __TwigTemplate_461daf3006e06e8c4a89a0494b768db86b057a548d9ed53b50f11f6e2e7d6dd6 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 17);
        $filters = array("escape" => 15, "raw" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'raw'],
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
        $context["biography"] = twig_get_attribute($this->env, $this->source, ($context["biographyList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "<section class=\"biography section\">
    <div class=\"container-gutter\">
        <div class=\"biography__block\">
            <div class=\"biography__item\">
                <div class=\"biography__img\">
                    <div class=\"biography__info\">
                        <h2>Цитата - классная</h2>
                        <p>Ivan Kamenev</p>
                    </div>
                </div>
            </div>
            <div class=\"biography__item biography__item-bio\">
                <div class=\"biography__bio\">
                    <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["biography"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</h2>
                    <div class=\"biography__slider slide-arrows\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biography"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                            ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "desc", [], "any", false, false, true, 18), 18, $this->source);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\Kamenev_at_cms/themes/kamenev/partials/biography.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 20,  88 => 18,  84 => 17,  79 => 15,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set biography = biographyList.records %}
<section class=\"biography section\">
    <div class=\"container-gutter\">
        <div class=\"biography__block\">
            <div class=\"biography__item\">
                <div class=\"biography__img\">
                    <div class=\"biography__info\">
                        <h2>Цитата - классная</h2>
                        <p>Ivan Kamenev</p>
                    </div>
                </div>
            </div>
            <div class=\"biography__item biography__item-bio\">
                <div class=\"biography__bio\">
                    <h2>{{ biography[0].title }}</h2>
                    <div class=\"biography__slider slide-arrows\">
                        {% for item in biography %}
                            {{ item.desc|raw }}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "D:\\Kamenev_at_cms/themes/kamenev/partials/biography.htm", "");
    }
}
