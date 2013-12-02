<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_968c614b207f8479a2e521f66c40249a260ea7bc98ee4efb00d6b36a064b9743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<th>";
        // line 12
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>
";
    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label"), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain")), "method"), "html", null, true);
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  399 => 158,  396 => 157,  394 => 156,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  342 => 133,  335 => 129,  329 => 126,  325 => 125,  321 => 124,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  267 => 98,  260 => 94,  249 => 89,  245 => 88,  239 => 86,  237 => 85,  234 => 84,  232 => 83,  218 => 77,  202 => 73,  191 => 69,  188 => 68,  185 => 65,  170 => 61,  167 => 60,  155 => 55,  148 => 53,  127 => 45,  90 => 34,  84 => 33,  77 => 27,  34 => 12,  100 => 27,  81 => 24,  58 => 18,  20 => 11,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 111,  285 => 89,  283 => 106,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 75,  177 => 63,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 101,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 76,  217 => 75,  208 => 74,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 39,  71 => 17,  67 => 27,  63 => 15,  59 => 23,  28 => 13,  201 => 92,  196 => 71,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 50,  138 => 54,  136 => 48,  121 => 46,  117 => 41,  105 => 40,  91 => 27,  62 => 24,  49 => 20,  38 => 17,  94 => 28,  89 => 20,  85 => 30,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  31 => 15,  25 => 12,  21 => 11,  24 => 12,  26 => 13,  93 => 29,  88 => 6,  78 => 30,  46 => 9,  44 => 12,  27 => 13,  19 => 11,  79 => 18,  72 => 20,  69 => 25,  47 => 19,  40 => 13,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 22,  52 => 21,  50 => 8,  43 => 18,  41 => 7,  35 => 5,  32 => 12,  29 => 8,  209 => 82,  203 => 78,  199 => 67,  193 => 70,  189 => 71,  187 => 84,  182 => 64,  176 => 64,  173 => 62,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 46,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 40,  103 => 28,  99 => 38,  95 => 37,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 29,  64 => 26,  60 => 25,  57 => 11,  54 => 16,  51 => 11,  48 => 11,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 5,  30 => 1,);
    }
}
