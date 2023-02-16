<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphDate;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DatePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new datePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DatePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DatePostRequestBody {
        return new DatePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the day property value. The day property
     * @return Json|null
    */
    public function getDay(): ?Json {
        return $this->getBackingStore()->get('day');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'day' => fn(ParseNode $n) => $o->setDay($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'month' => fn(ParseNode $n) => $o->setMonth($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'year' => fn(ParseNode $n) => $o->setYear($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the month property value. The month property
     * @return Json|null
    */
    public function getMonth(): ?Json {
        return $this->getBackingStore()->get('month');
    }

    /**
     * Gets the year property value. The year property
     * @return Json|null
    */
    public function getYear(): ?Json {
        return $this->getBackingStore()->get('year');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('day', $this->getDay());
        $writer->writeObjectValue('month', $this->getMonth());
        $writer->writeObjectValue('year', $this->getYear());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the day property value. The day property
     * @param Json|null $value Value to set for the day property.
    */
    public function setDay(?Json $value): void {
        $this->getBackingStore()->set('day', $value);
    }

    /**
     * Sets the month property value. The month property
     * @param Json|null $value Value to set for the month property.
    */
    public function setMonth(?Json $value): void {
        $this->getBackingStore()->set('month', $value);
    }

    /**
     * Sets the year property value. The year property
     * @param Json|null $value Value to set for the year property.
    */
    public function setYear(?Json $value): void {
        $this->getBackingStore()->set('year', $value);
    }

}
