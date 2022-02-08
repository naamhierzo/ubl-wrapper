<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\EstimatedConsumedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\NoteType;

/**
 * Class OnAccountPaymentType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getEstimatedConsumedQuantity()
 * @method self setEstimatedConsumedQuantity($value)
 * @method mixed getNote()
 * @method self addNote($value)
 * @method self setNote($value)
 * @method mixed getPaymentTerms()
 * @method self addPaymentTerms($value)
 * @method self setPaymentTerms($value)
 */
class OnAccountPaymentType extends AggregateComponent
{
    protected $casts = [
        "cbc:EstimatedConsumedQuantity" => EstimatedConsumedQuantityType::class,
        "cbc:Note" => NoteType::class . "[]",
        "cac:PaymentTerms" => PaymentTermsType::class . "[]",
    ];

    protected $minOccurs = [
        "cbc:EstimatedConsumedQuantity" => 1,
        "cac:PaymentTerms" => 1,
    ];
}