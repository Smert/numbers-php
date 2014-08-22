<?php

class TranslateNumber {
	protected static $leng = [
		'-' => 'minus ',
		'unique' => [
			'11' => 'eleven ',
			'12' => 'twelve ',
			'13' => 'thirteen ',
			'14' => 'fourteen ',
			'15' => 'fifteen ',
			'16' => 'sixteen ',
			'17' => 'seventeen ',
			'18' => 'eighteen ',
			'19' => 'nineteen '
		],
		'0' => 'zero',
		'1' => ['one ','two ','three ','four ','five ','six ','seven ','eight ','nine '],
		'2' => ['ten ','twenty ','thirty ','forty ','fifty ','sixty ','seventy ','eighty ','ninety '],
		'3' => 1,
		'ends' => [
			'3' => 'hundred '
		],
		'parts' => [
			'1' => [
				'//' => 'thousand '
			],
			'2' => [
				'//' => 'million '
			],
			'3' => [
				'//' => 'billion '
			]
		]
	];
	
	public static function translate($num) {
		$ret = ''; $minus = '';
		if ($num == 0) {
			return static::$leng[0];
		}
		if ($num < 0) {
			$minus = static::$leng['-'];
			$num *= -1;
		}
		$parts = str_split(strrev($num), 3);
		foreach($parts as $part=>$n) {
			$n = strrev($n);
			$buff = '';
			$p = '';
			if (isset(static::$leng['parts'][$part])) {
				foreach (static::$leng['parts'][$part] as $reg => $p) {
					if (preg_match($reg, (int)$n)) {
						break;
					}
				}
			}
			while ($len = strlen($n)) {
				if (isset(static::$leng['unique'][$n])) {
					$buff .= static::$leng['unique'][$n];
					break;
				} else {
					$pos = isset(static::$leng[($part * 3) + $len]) ? ($part * 3) + $len : $len;
					if (isset(static::$leng[$pos])) {
						if (is_array(static::$leng[$pos])) {
							if (isset(static::$leng[$pos][$n[0] - 1])) {
								$buff .= static::$leng[$pos][$n[0] - 1];
							}
						} else if (is_numeric(static::$leng[$pos])) {
							if (isset(static::$leng[static::$leng[$pos]][$n[0] - 1])) {
								$buff .= static::$leng[static::$leng[$pos]][$n[0] - 1];
							}
						}
					}
					if (strlen($buff) && isset(static::$leng['ends'][$len])) {
						$buff .= static::$leng['ends'][$len];
					}
				}
				$n = substr($n, 1);
			}
			$ret = $buff . (strlen($buff) ? $p : '') . $ret;
		}
		return $minus . trim($ret);
	}
}