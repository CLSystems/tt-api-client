<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\Feed;
use CLSystems\TradeTracker\Normalizer\IntervalNormalizer;

class FeedMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return Feed
     * @throws \Exception
     */
    public function hydrate($value)
    {
        $intervalNormalizer = new IntervalNormalizer();

        $feed = new Feed();
        $feed->setId($value->ID);
        $feed->setCampaign((new CampaignMapper())->hydrate($value->campaign));
        $feed->setName($value->name);
        $feed->setUrl($value->URL);
        $feed->setUpdateDate(new \DateTime($value->updateDate));
        $feed->setUpdateInterval($intervalNormalizer->normalize($value->updateInterval));
        $feed->setProductCount($value->productCount);
        $feed->setAssignmentStatus((new CampaignAssignmentStatusMapper())->hydrate($value->assignmentStatus));

        return $feed;
    }
}
