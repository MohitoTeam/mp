<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig */
class __TwigTemplate_a164da736efd9f9f4f746d07ef37478b48084102a8264ad3c794f1675ca886bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "EDIT", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
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
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 122,  316 => 121,  299 => 112,  293 => 109,  288 => 107,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  265 => 99,  256 => 96,  253 => 95,  250 => 93,  228 => 83,  222 => 81,  215 => 78,  210 => 75,  197 => 70,  174 => 64,  153 => 56,  113 => 41,  76 => 57,  181 => 79,  175 => 76,  161 => 70,  137 => 58,  110 => 40,  194 => 87,  186 => 82,  165 => 59,  160 => 58,  150 => 55,  134 => 58,  129 => 56,  65 => 29,  124 => 31,  399 => 158,  396 => 157,  394 => 156,  383 => 150,  377 => 147,  371 => 144,  366 => 142,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  342 => 133,  335 => 129,  329 => 126,  325 => 125,  321 => 123,  308 => 118,  289 => 109,  276 => 102,  270 => 100,  267 => 98,  260 => 98,  249 => 89,  245 => 88,  239 => 86,  237 => 86,  234 => 84,  232 => 84,  218 => 77,  202 => 73,  191 => 69,  188 => 68,  185 => 68,  170 => 73,  167 => 60,  155 => 55,  148 => 63,  127 => 55,  90 => 34,  84 => 38,  77 => 27,  34 => 26,  100 => 36,  81 => 25,  58 => 23,  20 => 11,  23 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 152,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 117,  305 => 115,  298 => 91,  294 => 111,  285 => 89,  283 => 106,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 75,  177 => 63,  169 => 73,  140 => 55,  132 => 57,  128 => 49,  107 => 36,  61 => 25,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 76,  217 => 79,  208 => 74,  204 => 73,  179 => 66,  159 => 69,  143 => 56,  135 => 35,  119 => 43,  102 => 37,  71 => 17,  67 => 28,  63 => 50,  59 => 49,  28 => 14,  201 => 72,  196 => 71,  183 => 82,  171 => 63,  166 => 71,  163 => 62,  158 => 67,  156 => 57,  151 => 63,  142 => 60,  138 => 50,  136 => 48,  121 => 52,  117 => 50,  105 => 46,  91 => 27,  62 => 28,  49 => 21,  38 => 17,  94 => 28,  89 => 35,  85 => 34,  75 => 28,  68 => 30,  56 => 24,  87 => 25,  31 => 15,  25 => 12,  21 => 12,  24 => 13,  26 => 14,  93 => 68,  88 => 6,  78 => 32,  46 => 35,  44 => 19,  27 => 13,  19 => 11,  79 => 18,  72 => 56,  69 => 24,  47 => 21,  40 => 18,  37 => 17,  22 => 12,  246 => 90,  157 => 56,  145 => 52,  139 => 59,  131 => 48,  123 => 53,  120 => 40,  115 => 49,  111 => 37,  108 => 39,  101 => 73,  98 => 43,  96 => 31,  83 => 25,  74 => 33,  66 => 25,  55 => 22,  52 => 21,  50 => 22,  43 => 19,  41 => 18,  35 => 17,  32 => 16,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 70,  189 => 71,  187 => 84,  182 => 79,  176 => 65,  173 => 62,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 51,  147 => 58,  144 => 61,  141 => 48,  133 => 55,  130 => 56,  125 => 45,  122 => 44,  116 => 41,  112 => 48,  109 => 34,  106 => 40,  103 => 45,  99 => 26,  95 => 42,  92 => 21,  86 => 64,  82 => 33,  80 => 19,  73 => 29,  64 => 23,  60 => 22,  57 => 22,  54 => 18,  51 => 21,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 17,  33 => 5,  30 => 14,);
    }
}
