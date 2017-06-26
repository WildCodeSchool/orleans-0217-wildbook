<?php
/**
 * Created by PhpStorm.
 * User: biovor
 * Date: 26/06/17
 * Time: 13:45
 */

namespace BookBundle\Service;


class ConvertCity
{
    public function convertGps($addresse)
    {

        $url_gmap = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($addresse) . '&sensor=false';
        $json = json_decode(file_get_contents($url_gmap), true);
       return $coord = $json['results']['0']['geometry']['location']['lat'].', '.$json['results']['0']['geometry']['location']['lng'];

    }

}