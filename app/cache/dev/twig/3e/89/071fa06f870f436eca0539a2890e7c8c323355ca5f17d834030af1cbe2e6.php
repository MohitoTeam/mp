<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_3e89071fa06f870f436eca0539a2890e7c8c323355ca5f17d834030af1cbe2e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 97,  340 => 95,  338 => 94,  315 => 90,  295 => 88,  259 => 70,  190 => 50,  53 => 23,  713 => 214,  707 => 211,  704 => 210,  702 => 209,  696 => 206,  686 => 205,  669 => 201,  666 => 200,  663 => 199,  655 => 194,  652 => 193,  635 => 191,  618 => 190,  608 => 187,  602 => 185,  596 => 181,  592 => 179,  590 => 178,  585 => 177,  568 => 175,  551 => 174,  547 => 173,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  528 => 167,  525 => 166,  516 => 161,  512 => 159,  510 => 158,  507 => 157,  505 => 156,  502 => 155,  498 => 134,  483 => 129,  473 => 150,  467 => 148,  465 => 147,  462 => 146,  451 => 141,  446 => 139,  428 => 136,  425 => 135,  414 => 127,  403 => 121,  400 => 120,  388 => 117,  358 => 106,  349 => 103,  347 => 102,  339 => 100,  336 => 99,  332 => 97,  324 => 92,  319 => 90,  311 => 89,  307 => 87,  297 => 84,  282 => 83,  277 => 81,  233 => 62,  223 => 58,  200 => 55,  184 => 48,  178 => 46,  146 => 34,  118 => 21,  306 => 140,  303 => 139,  300 => 138,  292 => 87,  286 => 80,  280 => 82,  274 => 77,  263 => 71,  248 => 115,  236 => 63,  216 => 99,  192 => 87,  70 => 33,  690 => 410,  681 => 203,  676 => 401,  674 => 397,  664 => 394,  659 => 392,  654 => 390,  650 => 388,  643 => 381,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 188,  605 => 186,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 330,  550 => 326,  542 => 172,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 132,  486 => 130,  481 => 290,  466 => 280,  456 => 143,  452 => 272,  445 => 267,  443 => 261,  439 => 260,  429 => 255,  424 => 254,  422 => 250,  420 => 249,  415 => 247,  361 => 107,  346 => 196,  331 => 187,  326 => 93,  304 => 174,  291 => 82,  272 => 76,  257 => 149,  242 => 112,  213 => 126,  152 => 38,  114 => 71,  104 => 23,  97 => 63,  318 => 144,  316 => 121,  299 => 112,  293 => 109,  288 => 85,  284 => 106,  281 => 105,  279 => 104,  275 => 103,  265 => 125,  256 => 120,  253 => 148,  250 => 67,  228 => 59,  222 => 81,  215 => 54,  210 => 75,  197 => 54,  174 => 64,  153 => 35,  113 => 41,  76 => 13,  181 => 47,  175 => 43,  161 => 38,  137 => 27,  110 => 18,  194 => 87,  186 => 111,  165 => 76,  160 => 75,  150 => 55,  134 => 58,  129 => 24,  65 => 5,  124 => 23,  399 => 158,  396 => 234,  394 => 118,  383 => 224,  377 => 115,  371 => 113,  366 => 210,  359 => 140,  357 => 139,  352 => 138,  348 => 136,  345 => 135,  342 => 101,  335 => 93,  329 => 95,  325 => 125,  321 => 92,  308 => 118,  289 => 81,  276 => 102,  270 => 100,  267 => 156,  260 => 123,  249 => 67,  245 => 88,  239 => 86,  237 => 86,  234 => 84,  232 => 136,  218 => 77,  202 => 73,  191 => 50,  188 => 68,  185 => 85,  170 => 78,  167 => 60,  155 => 55,  148 => 63,  127 => 32,  90 => 18,  84 => 16,  77 => 8,  34 => 41,  100 => 36,  81 => 15,  58 => 23,  20 => 11,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 147,  435 => 258,  430 => 137,  427 => 143,  423 => 128,  413 => 134,  409 => 124,  407 => 242,  402 => 130,  398 => 119,  393 => 126,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 84,  283 => 166,  278 => 86,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 77,  229 => 73,  220 => 56,  214 => 98,  177 => 63,  169 => 73,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 25,  273 => 101,  269 => 75,  254 => 69,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 102,  221 => 78,  219 => 100,  217 => 79,  208 => 57,  204 => 73,  179 => 107,  159 => 69,  143 => 29,  135 => 35,  119 => 28,  102 => 17,  71 => 17,  67 => 25,  63 => 4,  59 => 165,  28 => 14,  201 => 72,  196 => 52,  183 => 82,  171 => 102,  166 => 100,  163 => 62,  158 => 37,  156 => 36,  151 => 63,  142 => 60,  138 => 61,  136 => 60,  121 => 22,  117 => 50,  105 => 27,  91 => 27,  62 => 166,  49 => 112,  38 => 17,  94 => 28,  89 => 35,  85 => 34,  75 => 39,  68 => 6,  56 => 81,  87 => 17,  31 => 15,  25 => 12,  21 => 12,  24 => 2,  26 => 14,  93 => 68,  88 => 12,  78 => 40,  46 => 21,  44 => 19,  27 => 3,  19 => 11,  79 => 14,  72 => 199,  69 => 198,  47 => 75,  40 => 19,  37 => 18,  22 => 12,  246 => 90,  157 => 41,  145 => 52,  139 => 31,  131 => 25,  123 => 30,  120 => 56,  115 => 27,  111 => 37,  108 => 39,  101 => 22,  98 => 15,  96 => 31,  83 => 25,  74 => 52,  66 => 25,  55 => 22,  52 => 20,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 95,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 84,  176 => 45,  173 => 44,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 36,  147 => 68,  144 => 33,  141 => 66,  133 => 55,  130 => 56,  125 => 45,  122 => 44,  116 => 41,  112 => 19,  109 => 69,  106 => 40,  103 => 45,  99 => 26,  95 => 20,  92 => 19,  86 => 43,  82 => 10,  80 => 9,  73 => 7,  64 => 184,  60 => 23,  57 => 155,  54 => 154,  51 => 24,  48 => 67,  45 => 20,  42 => 64,  39 => 61,  36 => 17,  33 => 5,  30 => 14,);
    }
}
