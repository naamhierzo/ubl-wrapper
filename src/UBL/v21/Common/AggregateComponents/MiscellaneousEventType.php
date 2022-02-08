<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\MiscellaneousEventTypeCodeType;

/**
 * Class MiscellaneousEventType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getMiscellaneousEventTypeCode()
 * @method self setMiscellaneousEventTypeCode($value)
 * @method mixed getEventLineItem()
 * @method self addEventLineItem($value)
 * @method self setEventLineItem($value)
 */
class MiscellaneousEventType extends AggregateComponent
{
    protected $casts = [
        "cbc:MiscellaneousEventTypeCode" => MiscellaneousEventTypeCodeType::class,
        "cac:EventLineItem" => EventLineItemType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:MiscellaneousEventTypeCode" => 1,
        "cac:EventLineItem" => 1,
    ];
}