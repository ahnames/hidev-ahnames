<?php

$header = <<<EOF
AHnames vendor configuration for HiDev

@link      https://github.com/ahnames/hidev-ahnames
@package   hidev-ahnames
@license   proprietary
@copyright Copyright (c) 2016, AHnames (https://ahnames.com/)
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'header_comment'                             =>  [
            'header'        => $header,
            'separate'      => 'bottom',
            'location'      => 'after_declare_strict',
            'commentType'   => 'PHPDoc',
        ],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
        )
;
