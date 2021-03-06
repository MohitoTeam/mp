<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_0708f0bfbee16d69b31c31740848cdc32f7c4c3fd3c5ad2ec4e5aa3c11c18cf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  830 => 198,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  801 => 185,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  712 => 150,  710 => 149,  697 => 141,  695 => 139,  689 => 137,  680 => 134,  662 => 125,  649 => 122,  640 => 119,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  564 => 99,  555 => 95,  529 => 92,  524 => 90,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  464 => 71,  442 => 62,  433 => 60,  405 => 49,  385 => 41,  350 => 26,  266 => 366,  389 => 160,  378 => 157,  334 => 141,  290 => 5,  431 => 189,  401 => 172,  373 => 156,  323 => 128,  803 => 487,  792 => 485,  788 => 484,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  698 => 469,  694 => 138,  682 => 465,  678 => 133,  675 => 132,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  616 => 450,  565 => 414,  527 => 91,  520 => 406,  515 => 85,  244 => 136,  353 => 149,  351 => 141,  255 => 353,  212 => 279,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  513 => 160,  500 => 157,  488 => 153,  477 => 150,  470 => 73,  463 => 133,  460 => 132,  449 => 198,  441 => 196,  426 => 58,  419 => 98,  410 => 96,  395 => 84,  392 => 83,  386 => 159,  382 => 93,  380 => 158,  333 => 117,  226 => 84,  205 => 59,  172 => 57,  370 => 100,  367 => 155,  343 => 146,  330 => 87,  327 => 114,  320 => 127,  313 => 15,  310 => 81,  302 => 125,  296 => 121,  287 => 72,  262 => 98,  12 => 34,  836 => 271,  833 => 199,  828 => 197,  821 => 261,  815 => 258,  811 => 256,  809 => 189,  806 => 488,  800 => 252,  798 => 184,  795 => 250,  789 => 248,  787 => 247,  784 => 482,  778 => 244,  776 => 243,  773 => 242,  767 => 170,  765 => 239,  762 => 238,  759 => 237,  755 => 192,  749 => 162,  740 => 188,  735 => 187,  730 => 186,  727 => 185,  722 => 184,  719 => 183,  715 => 151,  708 => 267,  706 => 472,  699 => 142,  693 => 232,  688 => 230,  683 => 135,  677 => 224,  672 => 222,  658 => 124,  638 => 118,  632 => 211,  627 => 208,  621 => 452,  611 => 203,  587 => 200,  584 => 199,  582 => 198,  578 => 196,  576 => 101,  572 => 193,  569 => 183,  566 => 182,  561 => 174,  548 => 165,  523 => 156,  517 => 161,  506 => 151,  495 => 155,  491 => 147,  478 => 74,  475 => 141,  468 => 140,  459 => 69,  450 => 64,  447 => 134,  434 => 130,  417 => 126,  408 => 50,  390 => 43,  376 => 119,  369 => 136,  363 => 32,  328 => 139,  317 => 70,  271 => 374,  261 => 50,  231 => 83,  180 => 104,  225 => 298,  207 => 269,  126 => 147,  344 => 24,  340 => 145,  338 => 135,  315 => 131,  295 => 88,  259 => 103,  190 => 76,  53 => 11,  713 => 270,  707 => 148,  704 => 210,  702 => 470,  696 => 140,  686 => 466,  669 => 221,  666 => 126,  663 => 199,  655 => 215,  652 => 214,  635 => 117,  618 => 451,  608 => 202,  602 => 449,  596 => 106,  592 => 179,  590 => 178,  585 => 177,  568 => 179,  551 => 174,  547 => 93,  539 => 162,  536 => 161,  533 => 169,  530 => 410,  528 => 167,  525 => 408,  516 => 161,  512 => 84,  510 => 158,  507 => 159,  505 => 156,  502 => 155,  498 => 149,  483 => 144,  473 => 150,  467 => 72,  465 => 139,  462 => 202,  451 => 141,  446 => 197,  428 => 59,  425 => 128,  414 => 52,  403 => 48,  400 => 47,  388 => 42,  358 => 151,  349 => 323,  347 => 322,  339 => 100,  336 => 99,  332 => 20,  324 => 113,  319 => 71,  311 => 14,  307 => 128,  297 => 104,  282 => 80,  277 => 68,  233 => 304,  223 => 66,  200 => 72,  184 => 233,  178 => 59,  146 => 181,  118 => 49,  306 => 107,  303 => 122,  300 => 121,  292 => 87,  286 => 112,  280 => 79,  274 => 110,  263 => 365,  248 => 336,  236 => 35,  216 => 79,  192 => 55,  70 => 15,  690 => 467,  681 => 203,  676 => 401,  674 => 223,  664 => 218,  659 => 392,  654 => 123,  650 => 388,  643 => 120,  639 => 380,  633 => 377,  629 => 376,  623 => 373,  613 => 204,  605 => 201,  595 => 354,  588 => 350,  581 => 346,  577 => 344,  575 => 341,  573 => 340,  567 => 337,  557 => 96,  550 => 94,  542 => 163,  538 => 319,  531 => 312,  526 => 164,  518 => 307,  514 => 306,  509 => 83,  504 => 158,  492 => 132,  486 => 145,  481 => 143,  466 => 280,  456 => 68,  452 => 272,  445 => 267,  443 => 261,  439 => 195,  429 => 188,  424 => 254,  422 => 184,  420 => 127,  415 => 180,  361 => 152,  346 => 92,  331 => 140,  326 => 138,  304 => 79,  291 => 102,  272 => 76,  257 => 61,  242 => 112,  213 => 78,  152 => 46,  114 => 111,  104 => 90,  97 => 41,  318 => 111,  316 => 16,  299 => 8,  293 => 6,  288 => 4,  284 => 106,  281 => 388,  279 => 104,  275 => 105,  265 => 105,  256 => 96,  253 => 342,  250 => 341,  228 => 59,  222 => 297,  215 => 280,  210 => 270,  197 => 249,  174 => 217,  153 => 56,  113 => 38,  76 => 31,  181 => 232,  175 => 58,  161 => 202,  137 => 47,  110 => 22,  194 => 248,  186 => 239,  165 => 60,  160 => 48,  150 => 55,  134 => 161,  129 => 148,  65 => 22,  124 => 132,  399 => 158,  396 => 159,  394 => 168,  383 => 224,  377 => 37,  371 => 35,  366 => 33,  359 => 140,  357 => 123,  352 => 121,  348 => 140,  345 => 147,  342 => 23,  335 => 21,  329 => 131,  325 => 129,  321 => 135,  308 => 13,  289 => 113,  276 => 381,  270 => 102,  267 => 101,  260 => 363,  249 => 70,  245 => 335,  239 => 94,  237 => 86,  234 => 84,  232 => 88,  218 => 77,  202 => 266,  191 => 246,  188 => 90,  185 => 66,  170 => 56,  167 => 60,  155 => 47,  148 => 44,  127 => 35,  90 => 27,  84 => 41,  77 => 25,  34 => 4,  100 => 39,  81 => 30,  58 => 13,  20 => 1,  23 => 13,  480 => 75,  474 => 149,  469 => 158,  461 => 70,  457 => 131,  453 => 199,  444 => 132,  440 => 148,  437 => 61,  435 => 258,  430 => 103,  427 => 143,  423 => 57,  413 => 134,  409 => 124,  407 => 95,  402 => 170,  398 => 119,  393 => 158,  387 => 164,  384 => 122,  381 => 121,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 141,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 115,  298 => 120,  294 => 111,  285 => 3,  283 => 115,  278 => 387,  268 => 373,  264 => 72,  258 => 354,  252 => 68,  247 => 66,  241 => 93,  229 => 87,  220 => 290,  214 => 61,  177 => 63,  169 => 210,  140 => 58,  132 => 57,  128 => 44,  107 => 48,  61 => 2,  273 => 380,  269 => 107,  254 => 60,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 88,  219 => 29,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 62,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 18,  59 => 17,  28 => 3,  201 => 57,  196 => 92,  183 => 121,  171 => 216,  166 => 209,  163 => 53,  158 => 62,  156 => 195,  151 => 188,  142 => 42,  138 => 93,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 14,  38 => 6,  94 => 57,  89 => 35,  85 => 24,  75 => 19,  68 => 20,  56 => 12,  87 => 26,  31 => 3,  25 => 35,  21 => 2,  24 => 3,  26 => 6,  93 => 28,  88 => 28,  78 => 24,  46 => 13,  44 => 20,  27 => 3,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 6,  22 => 2,  246 => 96,  157 => 47,  145 => 74,  139 => 169,  131 => 160,  123 => 42,  120 => 31,  115 => 47,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 33,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 5,  29 => 3,  209 => 24,  203 => 73,  199 => 265,  193 => 51,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 43,  144 => 176,  141 => 175,  133 => 51,  130 => 46,  125 => 51,  122 => 41,  116 => 116,  112 => 36,  109 => 105,  106 => 104,  103 => 38,  99 => 68,  95 => 39,  92 => 43,  86 => 46,  82 => 25,  80 => 27,  73 => 24,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 13,  48 => 16,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
