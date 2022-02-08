<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\BindingOnBuyerIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\FollowupContractIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\LowTendersDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PaymentDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrizeDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\PrizeIndicatorType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\TechnicalCommitteeDescriptionType;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\WeightingAlgorithmCodeType;

/**
 * Class AwardingTermsType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getWeightingAlgorithmCode()
 * @method self setWeightingAlgorithmCode($value)
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getTechnicalCommitteeDescription()
 * @method self addTechnicalCommitteeDescription($value)
 * @method self setTechnicalCommitteeDescription($value)
 * @method mixed getLowTendersDescription()
 * @method self addLowTendersDescription($value)
 * @method self setLowTendersDescription($value)
 * @method mixed getPrizeIndicator()
 * @method self setPrizeIndicator($value)
 * @method mixed getPrizeDescription()
 * @method self addPrizeDescription($value)
 * @method self setPrizeDescription($value)
 * @method mixed getPaymentDescription()
 * @method self addPaymentDescription($value)
 * @method self setPaymentDescription($value)
 * @method mixed getFollowupContractIndicator()
 * @method self setFollowupContractIndicator($value)
 * @method mixed getBindingOnBuyerIndicator()
 * @method self setBindingOnBuyerIndicator($value)
 * @method mixed getAwardingCriterion()
 * @method self addAwardingCriterion($value)
 * @method self setAwardingCriterion($value)
 * @method mixed getTechnicalCommitteePerson()
 * @method self addTechnicalCommitteePerson($value)
 * @method self setTechnicalCommitteePerson($value)
 */
class AwardingTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:WeightingAlgorithmCode" => WeightingAlgorithmCodeType::class,
        "cbc:Description" => DescriptionType::class . "[]",
        "cbc:TechnicalCommitteeDescription" => TechnicalCommitteeDescriptionType::class . "[]",
        "cbc:LowTendersDescription" => LowTendersDescriptionType::class . "[]",
        "cbc:PrizeIndicator" => PrizeIndicatorType::class,
        "cbc:PrizeDescription" => PrizeDescriptionType::class . "[]",
        "cbc:PaymentDescription" => PaymentDescriptionType::class . "[]",
        "cbc:FollowupContractIndicator" => FollowupContractIndicatorType::class,
        "cbc:BindingOnBuyerIndicator" => BindingOnBuyerIndicatorType::class,
        "cac:AwardingCriterion" => AwardingCriterionType::class . "[]",
        "cac:TechnicalCommitteePerson" => PersonType::class . "[]",
    ];

    protected $minOccurs = [
    ];
}