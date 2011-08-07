<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
namespace Egulias\EguliasProvincesBundle\Tests\Entity;

use
    Symfony\Bundle\FrameworkBundle\Test\WebTestCase,
    Egulias\EguliasProvincesBundle\Entity\SpainRegion,
    Egulias\EguliasProvincesBundle\Entity\SpainProvince

;

class SpanishProvinceTest extends WebTestCase
{

    /**
     * Test for region id of a province
     */
    public function testGetRegionId()
    {
        $prov = new SpainProvince();
        $prov->setId(1);

        //Testing province id 1 (Álava) to be in region id 17 (Pais Vasco)
        $this->assertEquals(17, $prov->getRegionId());
    }

    public function testGetProvinceName()
    {
        $prov = new SpainProvince();
        $prov->setId(1);

        //Testing that province with id 1 is Álava
        $this->assertEquals('Álava', $prov->getName());
    }

}