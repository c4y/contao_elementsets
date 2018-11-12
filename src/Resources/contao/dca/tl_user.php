<?php
// Extend the default palettes
Contao\CoreBundle\DataContainer\PaletteManipulator::create()
    ->addLegend('elementsets_legend', 'amg_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)
    ->addField(array('elementsets_s', 'elementsets_p'), 'elementsets_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('extend', 'tl_user')
    ->applyToPalette('custom', 'tl_user')
;

// Add fields to tl_user_group
$GLOBALS['TL_DCA']['tl_user']['fields']['elementsets_s'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['elementsets_s'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'foreignKey'              => 'tl_elementsets.title',
	'eval'                    => array('multiple'=>true),
	'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_user']['fields']['elementsets_p'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_user']['elementsets_p'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'options'                 => array('create', 'delete'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('multiple'=>true),
	'sql'                     => "blob NULL"
);