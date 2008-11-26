<?php
if (!defined ('TYPO3_MODE')) {
 	die ('Access denied.');
}

t3lib_extMgm::addService($_EXTKEY,  'auth' /* sv type */,  'tx_useriprange_sv1' /* sv key */,
		array(

			'title' => 'IP-Range Authentication',
			'description' => 'Authenticates against IP lists',

			'subtype' => 'authUserBE',

			'available' => TRUE,
			'priority' => 50,
			'quality' => 50,

			'os' => '',
			'exec' => '',

			'classFile' => t3lib_extMgm::extPath($_EXTKEY).'sv1/class.tx_useriprange_sv1.php',
			'className' => 'tx_useriprange_sv1',
		)
	);
?>