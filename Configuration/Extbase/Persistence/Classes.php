<?php
declare(strict_types=1);

return [
    \In2code\Powermail\Domain\Model\Form::class => [
        'subclasses' => [
            0 => \BoyensOnline\MultifieldValidation\Domain\Model\Form::class,
        ],
    ],
    \In2code\Powermail\Domain\Model\Page::class => [
        'subclasses' => [
            0 => \BoyensOnline\MultifieldValidation\Domain\Model\Page::class,
        ],
    ],
    \In2code\Powermail\Domain\Model\Field::class => [
        'subclasses' => [
            0 => \BoyensOnline\MultifieldValidation\Domain\Model\Field::class,
        ],
    ],
    \BoyensOnline\MultifieldValidation\Domain\Model\Field::class => [
        'tableName' => 'tx_powermail_domain_model_field',
    ],
    \BoyensOnline\MultifieldValidation\Domain\Model\Page::class => [
        'tableName' => 'tx_powermail_domain_model_page',
    ],
    \BoyensOnline\MultifieldValidation\Domain\Model\Form::class => [
        'tableName' => 'tx_powermail_domain_model_form',
    ],
];
