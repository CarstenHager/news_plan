<?php
defined('TYPO3_MODE') or die();

$fields = array(

		'eventhall' => [
			'exclude' => 1,
			'label' => 'Veranstaltungssaal',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => [
					['Wittenstein-Saal', 'Wittenstein-Saal'],
					['Konzertsaal', 'Konzertsaal'],
					['Foyer', 'Foyer'],
					['Terrasse', 'Terrasse'],
				],
				'size' => 1,
				'maxitems' => 1
			]
		],
		'eventprice' => [
			'exclude' => 1,
			'label' => 'Veranstaltungspreis',
			'config' => [
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			],
		],
        'priceinfo' => [
            'exclude' => 1,
            'label' => 'Preisinformationen',
            'config' => [
                'type' => 'text',
                'cols' => 30,
                'rows' => 5,
                'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ]
        ],

);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'eventhall');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'eventprice');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'priceinfo');

