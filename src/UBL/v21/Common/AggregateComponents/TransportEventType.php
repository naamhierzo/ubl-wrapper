<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\CompletionIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IdentificationIDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OccurrenceDateType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\OccurrenceTimeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TransportEventTypeCodeType;

/**
 * Class TransportEventType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getIdentificationID()
 * @method self setIdentificationID($value)
 * @method mixed getOccurrenceDate()
 * @method self setOccurrenceDate($value)
 * @method mixed getOccurrenceTime()
 * @method self setOccurrenceTime($value)
 * @method mixed getTransportEventTypeCode()
 * @method self setTransportEventTypeCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getCompletionIndicator()
 * @method self setCompletionIndicator($value)
 * @method mixed getReportedShipment()
 * @method self setReportedShipment($value)
 * @method mixed getCurrentStatus()
 * @method self addCurrentStatus($value)
 * @method self setCurrentStatus($value)
 * @method mixed getContact()
 * @method self addContact($value)
 * @method self setContact($value)
 * @method mixed getLocation()
 * @method self setLocation($value)
 * @method mixed getSignature()
 * @method self setSignature($value)
 * @method mixed getPeriod()
 * @method self addPeriod($value)
 * @method self setPeriod($value)
 */
class TransportEventType extends AggregateComponent
{
    protected $casts = [
        "cbc:IdentificationID" => IdentificationIDType::class,
        "cbc:OccurrenceDate" => OccurrenceDateType::class,
        "cbc:OccurrenceTime" => OccurrenceTimeType::class,
        "cbc:TransportEventTypeCode" => TransportEventTypeCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:CompletionIndicator" => CompletionIndicatorType::class,
        "cac:ReportedShipment" => ShipmentType::class,
        "cac:CurrentStatus" => StatusType::class . "[]",
        "cac:Contact" => ContactType::class . "[]",
        "cac:Location" => LocationType::class,
        "cac:Signature" => SignatureType::class,
        "cac:Period" => PeriodType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}