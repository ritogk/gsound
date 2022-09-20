<?php
/**
 * QuestionnaireType
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
 * QuestionnaireType Class Doc Comment
 *
 * @category Class
 * @description ■アンケートの種類   FIRST_TEST: 初回テスト
 * @package  App\OpenAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class QuestionnaireType
{
    /**
     * Possible values of this enum
     */
    public const FIRST_TEST = 1;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIRST_TEST
        ];
    }
}


