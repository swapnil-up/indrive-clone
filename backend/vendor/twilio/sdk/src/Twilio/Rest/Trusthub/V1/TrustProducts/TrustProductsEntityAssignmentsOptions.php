<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trusthub
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Trusthub\V1\TrustProducts;

use Twilio\Options;
use Twilio\Values;

abstract class TrustProductsEntityAssignmentsOptions
{



    /**
     * @param string $objectType A string to filter the results by (EndUserType or SupportingDocumentType) machine-name. This is useful when you want to retrieve the entity-assignment of a specific end-user or supporting document.
     * @return ReadTrustProductsEntityAssignmentsOptions Options builder
     */
    public static function read(
        
        string $objectType = Values::NONE

    ): ReadTrustProductsEntityAssignmentsOptions
    {
        return new ReadTrustProductsEntityAssignmentsOptions(
            $objectType
        );
    }

}




class ReadTrustProductsEntityAssignmentsOptions extends Options
    {
    /**
     * @param string $objectType A string to filter the results by (EndUserType or SupportingDocumentType) machine-name. This is useful when you want to retrieve the entity-assignment of a specific end-user or supporting document.
     */
    public function __construct(
        
        string $objectType = Values::NONE

    ) {
        $this->options['objectType'] = $objectType;
    }

    /**
     * A string to filter the results by (EndUserType or SupportingDocumentType) machine-name. This is useful when you want to retrieve the entity-assignment of a specific end-user or supporting document.
     *
     * @param string $objectType A string to filter the results by (EndUserType or SupportingDocumentType) machine-name. This is useful when you want to retrieve the entity-assignment of a specific end-user or supporting document.
     * @return $this Fluent Builder
     */
    public function setObjectType(string $objectType): self
    {
        $this->options['objectType'] = $objectType;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Trusthub.V1.ReadTrustProductsEntityAssignmentsOptions ' . $options . ']';
    }
}

