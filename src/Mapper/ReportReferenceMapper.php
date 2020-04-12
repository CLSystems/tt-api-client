<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\ReportReference;

class ReportReferenceMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return ReportReference
     * @throws \Exception
     */
    public function hydrate($value)
    {
        $reportReference = new ReportReference();
        $reportReference->setReference($value->reference);
        $reportReference->setCampaign((new CampaignMapper())->hydrate($value->campaign));
        $reportReference->setReportData((new ReportDataMapper())->hydrate($value->reportData));

        return $reportReference;
    }
}
