<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 27/06/17
 * Time: 16:32
 */

namespace BookBundle\Service;


class CodeWarsApi
{
    public function codeWarsScore($pseudo)
    {
        if ($pseudo === null){
            return $score = null;
        }else{

            $url = 'https://www.codewars.com/api/v1/users/{pseudo}';

            $url = str_replace('{pseudo}',$pseudo,$url);

            $result = file_get_contents($url);

            $json = json_decode($result, true);

            return $score = $json['ranks']['overall']['score'];
        }
    }

}