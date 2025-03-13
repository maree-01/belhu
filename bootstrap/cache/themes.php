<?php

/*
|--------------------------------------------------------------------------
| Cache Themes
|--------------------------------------------------------------------------
|
| igaster/laravel-theme reads themes settings from json files inside
| each theme's folder. We will cache them in a single php file to
| avoid searching the filesystem for each Request. You can use
| 'theme:refresh-cache' to rebuild cache, or set config/themes.php
| 'cache' setting to false to disable completely
|
*/

return array (
  0 => 
  array (
    'name' => 'bolt',
    'asset-path' => 'themes/bolt',
    'extends' => 'default',
    'dashboard' => 
    array (
      'sidebarEnabledPages' => 
      array (
        0 => 'dashboard.user.index',
        1 => 'dashboard.user.openai.list',
        2 => 'dashboard.user.openai.documents.all',
        3 => 'dashboard.user.openai.documents.single',
      ),
      'googleFonts' => 
      array (
        'Onest' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
        ),
      ),
    ),
    'views-path' => 'bolt',
  ),
  1 => 
  array (
    'name' => 'classic',
    'asset-path' => 'themes/classic',
    'extends' => 'default',
    'wideLayoutPaddingX' => 'px-4 lg:px-10',
    'defaultVariations' => 
    array (
      'card' => 
      array (
        'variant' => 'outline-shadow',
        'size' => 'md',
        'roundness' => 'none',
      ),
      'table' => 
      array (
        'variant' => 'outline-shadow',
        'size' => 'md',
        'roundness' => 'none',
      ),
    ),
    'dashboard' => 
    array (
      'googleFonts' => 
      array (
        'Poppins' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
          3 => '700',
        ),
      ),
    ),
    'views-path' => 'classic',
  ),
  2 => 
  array (
    'name' => 'creative',
    'asset-path' => 'themes/creative',
    'extends' => 'default',
    'dashboard' => 
    array (
      'googleFonts' => 
      array (
        'Inter' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
        ),
        'Golos+Text' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
          3 => '700',
        ),
      ),
    ),
    'landingPage' => 
    array (
      'googleFonts' => 
      array (
        'Inter' => 
        array (
          0 => '400',
          1 => '600',
          2 => '700',
          3 => '900',
        ),
        'Golos+Text' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
          3 => '700',
        ),
      ),
    ),
    'views-path' => 'creative',
  ),
  3 => 
  array (
    'name' => 'dark',
    'asset-path' => 'themes/dark',
    'extends' => 'default',
    'landingPage' => 
    array (
      'googleFonts' => 
      array (
        'Golos+Text' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
          3 => '700',
        ),
      ),
    ),
    'views-path' => 'dark',
  ),
  4 => 
  array (
    'name' => 'default',
    'asset-path' => 'themes/default',
    'extends' => '',
    'wideLayoutPaddingX' => '',
    'defaultVariations' => 
    array (
      'button' => 
      array (
        'variant' => 'primary',
        'hoverVariant' => 'none',
        'size' => 'md',
      ),
      'card' => 
      array (
        'variant' => 'outline',
        'size' => 'md',
        'roundness' => 'default',
      ),
      'table' => 
      array (
        'variant' => 'outline',
      ),
    ),
    'dashboard' => 
    array (
      'supportedColorSchemes' => 'all',
      'sidebarEnabledPages' => 
      array (
      ),
      'googleFonts' => 
      array (
        'Inter' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
        ),
        'Golos+Text' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
          3 => '700',
        ),
      ),
    ),
    'landingPage' => 
    array (
      'googleFonts' => 
      array (
        'Golos+Text' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
          3 => '700',
        ),
        'Onest' => 
        array (
          0 => '400',
          1 => '500',
          2 => '700',
        ),
      ),
    ),
    'views-path' => 'default',
  ),
  5 => 
  array (
    'name' => 'magic-works',
    'asset-path' => 'themes/magic-works',
    'extends' => 'default',
    'wideLayoutPaddingX' => 'px-4 lg:px-10',
    'landingPage' => 
    array (
      'googleFonts' => 
      array (
        'Bricolage+Grotesque' => 
        array (
          0 => '500',
          1 => '700',
          2 => '800',
        ),
        'Golos+Text' => 
        array (
          0 => '400',
          1 => '500',
        ),
      ),
    ),
    'dashboard' => 
    array (
      'googleFonts' => 
      array (
        'Inter' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
        ),
        'Onest' => 
        array (
          0 => '700',
        ),
      ),
    ),
    'defaultVariations' => 
    array (
      'card' => 
      array (
        'variant' => 'shadow',
      ),
      'table' => 
      array (
        'variant' => 'shadow',
      ),
    ),
    'views-path' => 'magic-works',
  ),
  6 => 
  array (
    'name' => 'modern',
    'asset-path' => 'themes/modern',
    'extends' => 'default',
    'landingPage' => 
    array (
      'googleFonts' => 
      array (
      ),
    ),
    'views-path' => 'modern',
  ),
  7 => 
  array (
    'name' => 'myai-tools',
    'asset-path' => 'themes/myai-tools',
    'extends' => 'default',
    'landingPage' => 
    array (
      'googleFonts' => 
      array (
        'Sora' => 
        array (
          0 => '400',
          1 => '600',
          2 => '700',
        ),
        'Golos+Text' => 
        array (
          0 => '400',
        ),
      ),
    ),
    'dashboard' => 
    array (
      'supportedColorSchemes' => 'dark',
      'googleFonts' => 
      array (
        'Onest' => 
        array (
          0 => '400',
          1 => '500',
          2 => '700',
        ),
      ),
      'defaultVariations' => 
      array (
        'card' => 
        array (
          'variant' => 'solid',
        ),
        'table' => 
        array (
          'variant' => 'solid',
        ),
      ),
    ),
    'views-path' => 'myai-tools',
  ),
  8 => 
  array (
    'name' => 'neura',
    'asset-path' => 'themes/neura',
    'extends' => 'default',
    'wideLayoutPaddingX' => 'px-4 lg:px-10',
    'dashboard' => 
    array (
      'googleFonts' => 
      array (
        'Inter' => 
        array (
          0 => '400',
          1 => '500',
          2 => '600',
        ),
        'Poppins' => 
        array (
          0 => '600',
        ),
        'Lato' => 
        array (
          0 => '400',
          1 => '500',
        ),
      ),
    ),
    'views-path' => 'neura',
  ),
  9 => 
  array (
    'name' => 'sleek',
    'asset-path' => 'themes/sleek',
    'extends' => 'default',
    'wideLayoutPaddingX' => 'px-4 lg:px-10',
    'defaultVariations' => 
    array (
      'card' => 
      array (
        'variant' => 'shadow',
        'roundness' => '4xl',
      ),
      'table' => 
      array (
        'variant' => 'shadow',
      ),
    ),
    'views-path' => 'sleek',
  ),
  10 => 
  array (
    'name' => 'spawnd',
    'asset-path' => 'themes/spawnd',
    'extends' => 'default',
    'wideLayoutPaddingX' => 'px-4 lg:px-10',
    'defaultVariations' => 
    array (
      'card' => 
      array (
        'variant' => 'outline',
        'size' => 'md',
      ),
      'table' => 
      array (
        'variant' => 'outline',
      ),
    ),
    'views-path' => 'spawnd',
  ),
);