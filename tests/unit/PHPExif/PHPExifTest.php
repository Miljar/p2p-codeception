<?php

namespace Tests\PHPExif;

use PHPExif\Adapter\AdapterCollection;
use PHPExif\PHPExif;

/**
 * Class: PHPExifTest
 *
 * @see \PHPUnit_Framework_TestCase
 * @abstract
 * @coversDefaultClass \PHPExif\PHPExif
 * @covers ::<!public>
 */
class PHPExifTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @group phpexif
     *
     * @return void
     */
    public function testNewInstanceHasNativeAdapter()
    {
        $phpexif = new PHPExif;

        $reflProp = new \ReflectionProperty(
            PHPExif::class,
            'adapters'
        );
        $reflProp->setAccessible(true);

        $adapters = $reflProp->getValue($phpexif);

        $this->assertInstanceOf(
            AdapterCollection::class,
            $adapters
        );
    }
}
