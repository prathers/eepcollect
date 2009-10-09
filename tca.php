<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA["tx_eepcollect_sessions"] = array (
	"ctrl" => $TCA["tx_eepcollect_sessions"]["ctrl"],
	"interface" => array (
		"showRecordFieldList" => "ses_id,ses_tstamp,ses_data"
	),
	"feInterface" => $TCA["tx_eepcollect_sessions"]["feInterface"],
	"columns" => array (
		"ses_id" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:eepcollect/locallang_db.xml:tx_eepcollect_sessions.ses_id",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
		"ses_tstamp" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:eepcollect/locallang_db.xml:tx_eepcollect_sessions.ses_tstamp",		
			"config" => Array (
				"type" => "none",
				"size" => "12",
				"max" => "20",
				"eval" => "datetime",
				"default" => time(),
			)
		),
		"ses_data" => Array (		
			"exclude" => 1,		
			"label" => "LLL:EXT:eepcollect/locallang_db.xml:tx_eepcollect_sessions.ses_data",		
			"config" => Array (
				"type" => "input",	
				"size" => "30",
			)
		),
	),
	"types" => array (
		"0" => array("showitem" => "ses_id;;;;1-1-1, ses_tstamp, ses_data")
	),
	"palettes" => array (
		"1" => array("showitem" => "")
	)
);

?>