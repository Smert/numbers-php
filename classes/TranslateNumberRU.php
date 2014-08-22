<?php

class TranslateNumberRU extends TranslateNumber {
	protected static $leng = [
		'-' => 'минус ',
		'unique' => [
			'11' => 'одиннадцать ',
			'12' => 'двенадцать ',
			'13' => 'тринадцать ',
			'14' => 'четырнадцать ',
			'15' => 'пятнадцать ',
			'16' => 'шестнадцать ',
			'17' => 'семнадцать ',
			'18' => 'восемнадцать ',
			'19' => 'девятнадцать '
		],
		'0' => 'ноль',
		'1' => ['один ','два ','три ','четыре ','пять ','шесть ','семь ','восемь ','девять '],
		'2' => ['десять ','двадцать ','тридцать ','сорок ','пятьдесят ','шестьдесят ','семьдесят ','восемьдесят ','девяносто '],
		'3' => ['сто ','двести ','триста ','четыреста ','пятьсот ','шестьсот ','семьсот ','восемьсот ','девятьсот '],
		'4' => ['одна ', 'две ', 'три ', 'четыре ', 'пять ', 'шесть ', 'семь ', 'восемь ', 'девять '],
		'ends' => [],
		'parts' => [
			'1' => [
				'/^([^1]|\d[^1])?1$/' => 'тысяча ',
				'/^([^1]|\d[^1])?(2|3|4)$/' => 'тысячи ',
				'//' => 'тысяч '
			],
			'2' => [
				'/^([^1]|\d[^1])?1$/' => 'миллион ',
				'/^([^1]|\d[^1])?(2|3|4)$/' => 'миллиона ',
				'//' => 'миллионов '
			],
			'3' => [
				'/^([^1]|\d[^1])?1$/' => 'миллиард ',
				'/^([^1]|\d[^1])?(2|3|4)$/' => 'миллиарда ',
				'//' => 'миллиардов '
			]
		]
	];
}