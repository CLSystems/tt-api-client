<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\ReportCampaign;

class ReportCampaignMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return ReportCampaign
     * @throws \Exception
     */
    public function hydrate($value)
    {
        $reportCampaign = new ReportCampaign();
        $reportCampaign->setCampaign((new CampaignMapper())->hydrate($value->campaign));
        $reportCampaign->setReportData((new ReportDataMapper())->hydrate($value->reportData));

        return $reportCampaign;
    }
}
