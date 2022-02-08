<?php

namespace Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents;

use Uctoplus\UblWrapper\UBL\Schema\AggregateComponent;
use Uctoplus\UblWrapper\UBL\v21\Common\BasicComponents\DescriptionType;

/**
 * Class AppealTermsType
 *
 * @copyright uctoplus.sk, s.r.o.
 * @package Uctoplus\UblWrapper\UBL\v21\Common\AggregateComponents
 *
 * @method mixed getDescription()
 * @method self addDescription($value)
 * @method self setDescription($value)
 * @method mixed getPresentationPeriod()
 * @method self setPresentationPeriod($value)
 * @method mixed getAppealInformationParty()
 * @method self setAppealInformationParty($value)
 * @method mixed getAppealReceiverParty()
 * @method self setAppealReceiverParty($value)
 * @method mixed getMediationParty()
 * @method self setMediationParty($value)
 */
class AppealTermsType extends AggregateComponent
{
    protected $casts = [
        "cbc:Description" => DescriptionType::class . "[]",
        "cac:PresentationPeriod" => PeriodType::class,
        "cac:AppealInformationParty" => PartyType::class,
        "cac:AppealReceiverParty" => PartyType::class,
        "cac:MediationParty" => PartyType::class,
    ];

    protected $minOccurs = [
    ];
}