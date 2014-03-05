<?php
HTML::macro('full_title', function($title) {
    $base_title = "Laravel4 Tutorial Sample App";
    if (empty($title)) {
        return $base_title;
    }

    return "$base_title | $title";
});

Blade::extend(function ($view, $compiler) {
    $pattern = $compiler->createMatcher('fetch');

    return preg_replace($pattern, '$__env->yieldContent$2', $view);
});
