<?php

declare(strict_types=1);

/*
 * Generated from public-schema.json by OpenAPI Generator 7.14.0
 * with the custom templates in agentcat-server sdk-generator/templates/php.
 * Do not edit by hand.
 */

namespace AgentCat\Api\Model;

/**
 * EventAcceptedResponse
 */
final readonly class EventAcceptedResponse implements \JsonSerializable
{
    public function __construct(
        /**
         * status
         */
        public string|null $status = null,
    ) {
    }

    /**
     * The JSON body. Free-form objects and maps encode as `{}` when empty.
     * Date-time values are UTC with milliseconds, like JavaScript toISOString().
     *
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        $body = [];
        if ($this->status !== null) {
            $body['status'] = $this->status;
        }

        return $body;
    }
}
