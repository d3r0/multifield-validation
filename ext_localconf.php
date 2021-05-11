<?php
defined('TYPO3_MODE') || die();

(static function() {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\In2code\Powermail\Domain\Repository\FormRepository::class] = [
        'className' => \BoyensOnline\MultifieldValidation\Domain\Repository\FormRepository::class
    ];
})();
