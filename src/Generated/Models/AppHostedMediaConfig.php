<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppHostedMediaConfig extends MediaConfig implements Parsable 
{
    /**
     * Instantiates a new appHostedMediaConfig and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appHostedMediaConfig');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppHostedMediaConfig
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppHostedMediaConfig {
        return new AppHostedMediaConfig();
    }

    /**
     * Gets the blob property value. The media configuration blob generated by smart media agent.
     * @return string|null
    */
    public function getBlob(): ?string {
        $val = $this->getBackingStore()->get('blob');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blob'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'blob' => fn(ParseNode $n) => $o->setBlob($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('blob', $this->getBlob());
    }

    /**
     * Sets the blob property value. The media configuration blob generated by smart media agent.
     * @param string|null $value Value to set for the blob property.
    */
    public function setBlob(?string $value): void {
        $this->getBackingStore()->set('blob', $value);
    }

}
