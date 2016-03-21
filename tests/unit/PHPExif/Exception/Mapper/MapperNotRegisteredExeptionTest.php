<?php

namespace Tests\Unit\PHPExif\Exception\Collection;

use PHPExif\Exception\Mapper\MapperNotRegisteredException;
use Tests\Unit\PHPExif\Exception\BaseExceptionTest;

/**
 * @coversDefaultClass \PHPExif\Exception\Mapper\MapperNotRegisteredException
 * @covers ::<!public>
 */
class MapperNotRegisteredExceptionTest extends BaseExceptionTest
{
    /**
     * @group exception
     * @covers ::forField
     */
    public function testForFieldReturnsInstance()
    {
        $this->assertNamedConstructorReturnsInstance(
            MapperNotRegisteredException::class,
            'forField',
            array('foo')
        );
    }
}
