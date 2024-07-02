<?php


check_extensions();
function check_extensions()
{

	$required_extensions = [

		'gd',
		//'mysqli',
		//'pdo_mysql',
		//'pdo_sqlite',
		//'curl',
		//'fileinfo',
		//'intl',
		//'exif',
		'mbstring',
	];

	$not_loaded = [];

	foreach ($required_extensions as $ext) {
		
		if(!extension_loaded($ext))
		{
			$not_loaded[] = $ext;
		}
	}

	if(!empty($not_loaded))
	{
		show("Please load the following extensions in your php.ini file: <br>".implode("<br>", $not_loaded));
		die;
	}
}
function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

function esc($string)
{
    return htmlspecialchars($string);
}

function redirect($path)
{
    header("Location: " . ROOT."/" .$path);
    die;
}


