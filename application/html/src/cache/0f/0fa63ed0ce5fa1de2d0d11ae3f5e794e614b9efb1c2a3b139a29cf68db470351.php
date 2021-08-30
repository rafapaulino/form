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

/* tailwind/input-text.html */
class __TwigTemplate_acd10b9ab326cb53238327b6de4b5de29a9fa65409c0b13cab4bae2ade5b1754 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div>
    <label for=\"email\" class=\"block text-sm font-medium text-gray-700\">Email</label>
    <div class=\"mt-1\">
        <input type=\"text\" name=\"email\" id=\"email\" class=\"shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md\" placeholder=\"you@example.com\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tailwind/input-text.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tailwind/input-text.html", "/var/www/src/templates/tailwind/input-text.html");
    }
}
