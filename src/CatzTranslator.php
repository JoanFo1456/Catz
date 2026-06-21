<?php

namespace JoanFo\Catz;

class CatzTranslator
{
    private static array $rules = [
        '/ing\b/i' => 'n',
        '/\byour\b/i' => 'ur',
        '/\byou\b/i' => 'u',
        '/\bthe\b/i' => 'da',
        '/\bthis\b/i' => 'dis',
        '/\bthat\b/i' => 'dat',
        '/\bare\b/i' => 'r',
        '/\bhave\b/i' => 'haz',
        '/\bhas\b/i' => 'haz',
        '/\bis\b/i' => 'iz',
        '/\bmy\b/i' => 'mah',
        '/\bto\b/i' => 'to',
        '/\bcan\b/i' => 'can',
        '/\bwith\b/i' => 'wif',
        '/\bfor\b/i' => 'fur',
        '/\bof\b/i' => 'ov',
        '/\bfrom\b/i' => 'frum',
        '/\bthem\b/i' => 'dem',
        '/\bthose\b/i' => 'doze',
        '/\bthese\b/i' => 'deez',
        '/\bwhat\b/i' => 'wut',
        '/\bwhen\b/i' => 'wen',
        '/\bwhere\b/i' => 'wher',
        '/\bwhy\b/i' => 'y',
        '/\byes\b/i' => 'yez',
        '/\bno\b/i' => 'nope',
        '/\bok\b/i' => 'k',
        '/\bokay\b/i' => 'k',
        '/\bplease\b/i' => 'pleaz',
        '/\bthanks?\b/i' => 'thx',
        '/\bsorry\b/i' => 'sry',
        '/tion\b/i' => 'shun',
        '/sion\b/i' => 'shun',
        '/ough\b/i' => 'uff',
        '/ough/i' => 'o',
        '/ies$/i' => 'iez',
        '/ss$/i' => 'ss',
        '/([^s])s$/i' => '$1z',
    ];

    public static function catify(string $text): string
    {
        foreach (self::$rules as $pattern => $replacement) {
            $text = preg_replace($pattern, $replacement, $text);
        }

        $text = preg_replace('/\s+/', ' ', $text);

        return trim($text);
    }

    public static function catifyArray(array $translations): array
    {
        $result = [];

        foreach ($translations as $key => $value) {
            if (is_array($value)) {
                $result[$key] = self::catifyArray($value);
            } elseif (is_string($value)) {
                $result[$key] = self::catify($value);
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
