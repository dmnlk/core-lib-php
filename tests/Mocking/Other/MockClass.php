<?php

namespace CoreLib\Tests\Mocking\Other;

class MockClass
{
    /**
     * @var array
     */
    public $body;

    public $additionalProperties = [];

    /**
     * @param mixed ...$body
     */
    public function __construct(...$body)
    {
        $this->body = $body;
    }

    /**
     * Add a property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }
}
