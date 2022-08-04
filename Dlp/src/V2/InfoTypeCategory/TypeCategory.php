<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\InfoTypeCategory;

use UnexpectedValueException;

/**
 * Enum of the current types in the category.
 * We might add more types in the future.
 *
 * Protobuf type <code>google.privacy.dlp.v2.InfoTypeCategory.TypeCategory</code>
 */
class TypeCategory
{
    /**
     * Unused type
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Personally identifiable information, for example, a
     * name or phone number
     *
     * Generated from protobuf enum <code>PII = 1;</code>
     */
    const PII = 1;
    /**
     * Personally identifiable information that is especially sensitive, for
     * example, a passport number.
     *
     * Generated from protobuf enum <code>SPII = 2;</code>
     */
    const SPII = 2;
    /**
     * Attributes that can partially identify someone, especially in
     * combination with other attributes, like age, height, and gender.
     *
     * Generated from protobuf enum <code>DEMOGRAPHIC = 3;</code>
     */
    const DEMOGRAPHIC = 3;
    /**
     * Confidential or secret information, for example, a password.
     *
     * Generated from protobuf enum <code>CREDENTIAL = 4;</code>
     */
    const CREDENTIAL = 4;
    /**
     * An identification document issued by a government.
     *
     * Generated from protobuf enum <code>GOVERNMENT_ID = 5;</code>
     */
    const GOVERNMENT_ID = 5;
    /**
     * A document, for example, a resume or source code.
     *
     * Generated from protobuf enum <code>DOCUMENT = 6;</code>
     */
    const DOCUMENT = 6;
    /**
     * Information that is not sensitive on its own, but provides details about
     * the circumstances surrounding an entity or an event.
     *
     * Generated from protobuf enum <code>CONTEXTUAL_INFORMATION = 7;</code>
     */
    const CONTEXTUAL_INFORMATION = 7;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::PII => 'PII',
        self::SPII => 'SPII',
        self::DEMOGRAPHIC => 'DEMOGRAPHIC',
        self::CREDENTIAL => 'CREDENTIAL',
        self::GOVERNMENT_ID => 'GOVERNMENT_ID',
        self::DOCUMENT => 'DOCUMENT',
        self::CONTEXTUAL_INFORMATION => 'CONTEXTUAL_INFORMATION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TypeCategory::class, \Google\Cloud\Dlp\V2\InfoTypeCategory_TypeCategory::class);
