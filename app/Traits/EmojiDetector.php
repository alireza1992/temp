<?php

namespace App\Traits;

trait EmojiDetector
{
    /**
     * @param $request
     * @return mixed|void
     */
    public static function isEmoji($request)
    {
        foreach ($request as $field){
            $regexEmoticons = '/[\x{1F600}-\x{1F64F}]/u';
            $clean_text = preg_match($regexEmoticons, $field);
            if ($clean_text){
                return $field;
            }
        }

    }

}
