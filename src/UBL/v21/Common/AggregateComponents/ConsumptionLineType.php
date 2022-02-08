<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\IDType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\InvoicedQuantityType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LineExtensionAmountType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\ParentDocumentLineReferenceIDType;

/**
 * Class ConsumptionLineType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getID()
 * @method self setID($value)
 * @method mixed getParentDocumentLineReferenceID()
 * @method self setParentDocumentLineReferenceID($value)
 * @method mixed getInvoicedQuantity()
 * @method self setInvoicedQuantity($value)
 * @method mixed getLineExtensionAmount()
 * @method self setLineExtensionAmount($value)
 * @method mixed getPeriod()
 * @method self setPeriod($value)
 * @method mixed getDelivery()
 * @method self addDelivery($value)
 * @method self setDelivery($value)
 * @method mixed getAllowanceCharge()
 * @method self addAllowanceCharge($value)
 * @method self setAllowanceCharge($value)
 * @method mixed getTaxTotal()
 * @method self addTaxTotal($value)
 * @method self setTaxTotal($value)
 * @method mixed getUtilityItem()
 * @method self setUtilityItem($value)
 * @method mixed getPrice()
 * @method self setPrice($value)
 * @method mixed getUnstructuredPrice()
 * @method self setUnstructuredPrice($value)
 */
class ConsumptionLineType extends AggregateComponent
{
    protected $casts = [
        "cbc:ID" => IDType::class,
        "cbc:ParentDocumentLineReferenceID" => ParentDocumentLineReferenceIDType::class,
        "cbc:InvoicedQuantity" => InvoicedQuantityType::class,
        "cbc:LineExtensionAmount" => LineExtensionAmountType::class,
        "cac:Period" => PeriodType::class,
        "cac:Delivery" => DeliveryType::class . "[]",
        "cac:AllowanceCharge" => AllowanceChargeType::class . "[]",
        "cac:TaxTotal" => TaxTotalType::class . "[]",
        "cac:UtilityItem" => UtilityItemType::class,
        "cac:Price" => PriceType::class,
        "cac:UnstructuredPrice" => UnstructuredPriceType::class,
    ];

    protected $minOccurs = [
        "cbc:ID" => 1,
        "cbc:InvoicedQuantity" => 1,
        "cbc:LineExtensionAmount" => 1,
        "cac:UtilityItem" => 1,
    ];
}