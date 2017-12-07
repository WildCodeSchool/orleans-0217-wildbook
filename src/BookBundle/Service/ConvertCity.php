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
    public function convertGps($address)
    {

        $url_gmap = 'http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&sensor=false';
        $json = json_decode(file_get_contents($url_gmap), true);
        $lat = $json['results']['0']['geometry']['location']['lat'] ?? '';
        $lng = $json['results']['0']['geometry']['location']['lng'] ?? '';

        return $lat . ', ' . $lng;

    }

}