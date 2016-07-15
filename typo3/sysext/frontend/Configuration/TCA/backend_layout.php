<?php
return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden'
        ),
        'typeicon_classes' => array(
            'default' => 'mimetypes-x-backend_layout'
        ),
        'selicon_field' => 'icon',
        'selicon_field_path' => 'uploads/media',
        'thumbnail' => 'resources'
    ),
    'interface' => array(
        'showRecordFieldList' => 'title,config,description,hidden,icon'
    ),
    'columns' => array(
        'title' => array(
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
            'config' => array(
                'type' => 'input',
                'size' => '25',
                'max' => '255',
                'eval' => 'required'
            )
        ),
        'description' => array(
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.description',
            'config' => array(
                'type' => 'text',
                'rows' => '5',
                'cols' => '25'
            )
        ),
        'config' => array(
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
            'config' => array(
                'type' => 'text',
                'rows' => '5',
                'cols' => '25',
                'wizards' => array(
                    0 => array(
                        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.wizard',
                        'type' => 'popup',
                        'icon' => 'EXT:frontend/Resources/Public/Images/wizard_backend_layout.png',
                        'module' => array(
                            'name' => 'wizard_backend_layout'
                        ),
                        'JSopenParams' => 'height=800,width=800,status=0,menubar=0,scrollbars=0'
                    )
                )
            )
        ),
        'hidden' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.disable',
            'exclude' => 1,
            'config' => array(
                'type' => 'check',
                'default' => '0'
            )
        ),
        'icon' => array(
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
            'exclude' => 1,
            'config' => array(
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => 'jpg,gif,png',
                'uploadfolder' => 'uploads/media',
                'show_thumbs' => 1,
                'size' => 1,
                'maxitems' => 1
            )
        )
    ),
    'types' => array(
        '1' => array(
            'showitem' => 'hidden, title, icon, description, config',
        ),
    )
);
