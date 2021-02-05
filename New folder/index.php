<?php

function GetDay($dayName)
{
	$d_date = new DateTime(); 
	$m_date = new DateTime(); 

	$monthName = [
		'01' => 'января',
		'02' => 'февраля',
		'03' => 'марта',
		'04' => 'апреля',
		'05' => 'мая',
		'06' => 'июня',
		'07' => 'июля',
		'08' => 'августа',
		'09' => 'сентября',
		'10' => 'октября',
		'11' => 'ноября',
		'12' => 'декабря'
	];

	$d_date->modify('next ' . $dayName);
	$d_date = $d_date->format('d m');
	$m_date = $m_date->format('m');

	foreach ($monthName as $monthNumber => $monthNameRu)
	{
		if ($monthNumber == (string)$m_date)
		{
			$dm_date = str_replace((string)$m_date, $monthNameRu, (string)$d_date);
		}
	}
	if ($dm_date[0] == 0)
	{
		$dm_date[0] = ' ';
	}
	return $dm_date;
}

echo GetDay("sunday");
