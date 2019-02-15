<?php
/**
 * Created by PhpStorm.
 * User: dmg
 * Date: 2/13/19
 * Time: 5:28 PM
 */

namespace Dmgctrlr\LaraOsrm;


class MatchServiceRequest extends BaseServiceRequest
{
    /**
     * Specifies the name of the service passed in the URL
     * @var string
     */
    public $service = 'match';

    /**
     * These are the default OSRM parameters for the match service
     * @var array
     */
    public $options = [
        'steps'       => 'false',
        'geometries'  => 'polyline', // polyline, polyline6 or geojson
        'annotations' => 'false',
        'overview'    => 'simplified', // simplified, full or false
//        'timestamps'  => 'false',
//        'radiuses'    => 'false',
    ];

}