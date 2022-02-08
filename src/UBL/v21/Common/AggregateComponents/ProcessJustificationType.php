<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PreviousCancellationReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcessReasonCodeType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ProcessReasonType;

/**
 * Class ProcessJustificationType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getPreviousCancellationReasonCode()
 * @method self setPreviousCancellationReasonCode($value)
 * @method mixed getProcessReasonCode()
 * @method self setProcessReasonCode($value)
 * @method mixed getProcessReason()
 * @method self addProcessReason($value)
 * @method self setProcessReason($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 */
class ProcessJustificationType extends AggregateComponent
{
    protected $casts = [
        "cbc:PreviousCancellationReasonCode" => PreviousCancellationReasonCodeType::class,
        "cbc:ProcessReasonCode" => ProcessReasonCodeType::class,
        "cbc:ProcessReason" => ProcessReasonType::class . "[]",
        "cbc:Description" => DescriptionType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}