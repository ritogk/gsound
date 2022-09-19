<?php
/**
 * QuestionnaireStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  App\OpenAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAPI Tutorial
 *
 * OpenAPI Tutorial by halhorn
 *
 * The version of the OpenAPI document: 0.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace App\OpenAPI\Model;
use \App\OpenAPI\ObjectSerializer;

/**
 * QuestionnaireStatus Class Doc Comment
 *
 * @category Class
 * @description アンケートの状態 ANSWERED: 回答済 UNANSWERED: 未回答
 * @package  App\OpenAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QuestionnaireStatus
{
    /**
     * Possible values of this enum
     */
    public const ANSWERED = 1;

    public const UNANSWERED = 2;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ANSWERED,
            self::UNANSWERED
        ];
    }
}


