<?php

$query = new SolrQuery();

$query->setStats(0);

$query->addStatsField('hello')->addStatsField('june')->removeStatsField('hello');

$query->addStatsFacet('world')->addStatsFacet('pear')->removeStatsFacet('world');

echo $query;
echo "\n";
