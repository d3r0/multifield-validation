<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'multifield_validation',
        'Configuration/TypoScript',
        'Powermail Multi-Field Validation (after Powermail Template)'
    );
    
    $tempColums = array(
        'multi_groupname' => array(
            'exclude' => 1,
            'label' => 'Multi-Field Validation Gruppenname',
            'config' => [
                'type' => 'text',
                'cols' => 20,
                'rows' => 1
            ]
        )
    );
    
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tx_powermail_domain_model_field',
        $tempColums
    );
    
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tx_powermail_domain_model_field',
        '--div--;Multi-Field Validation, multi_groupname',
        '',
        'after:own_marker_select'
    );
});

