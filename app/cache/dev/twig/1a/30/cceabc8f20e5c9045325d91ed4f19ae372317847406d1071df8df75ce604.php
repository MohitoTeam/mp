<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig */
class __TwigTemplate_1a30cceabc8f20e5c9045325d91ed4f19ae372317847406d1071df8df75ce604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT"), "method"))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 19
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 21
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  399 => 158,  396 => 157,  394 => 156,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  342 => 133,  335 => 129,  329 => 126,  325 => 125,  321 => 124,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  267 => 98,  260 => 94,  249 => 89,  245 => 88,  239 => 86,  237 => 85,  234 => 84,  232 => 83,  218 => 77,  202 => 73,  191 => 69,  188 => 68,  185 => 65,  170 => 61,  167 => 60,  155 => 55,  148 => 53,  127 => 32,  90 => 34,  84 => 33,  77 => 27,  34 => 16,  100 => 27,  81 => 25,  58 => 23,  20 => 11,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 111,  285 => 89,  283 => 106,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 75,  177 => 63,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 101,  269 => 94,  254 => 91,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 76,  217 => 75,  208 => 74,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 35,  119 => 28,  102 => 39,  71 => 17,  67 => 27,  63 => 24,  59 => 23,  28 => 14,  201 => 92,  196 => 71,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 50,  138 => 36,  136 => 48,  121 => 46,  117 => 41,  105 => 27,  91 => 27,  62 => 24,  49 => 20,  38 => 17,  94 => 28,  89 => 20,  85 => 30,  75 => 28,  68 => 14,  56 => 9,  87 => 25,  31 => 15,  25 => 12,  21 => 11,  24 => 12,  26 => 14,  93 => 29,  88 => 6,  78 => 29,  46 => 9,  44 => 19,  27 => 13,  19 => 11,  79 => 18,  72 => 25,  69 => 24,  47 => 19,  40 => 18,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 25,  55 => 22,  52 => 17,  50 => 8,  43 => 18,  41 => 18,  35 => 5,  32 => 16,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 70,  189 => 71,  187 => 84,  182 => 64,  176 => 64,  173 => 62,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 46,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 40,  103 => 28,  99 => 26,  95 => 37,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 21,  48 => 11,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 5,  30 => 1,);
    }
}
