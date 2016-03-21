<?php

namespace Tests\Unit\PHPExif\Exception;

use PHPExif\Exception\UnknownAdapterTypeException;
use Tests\Unit\PHPExif\Exception\BaseExceptionTest;

/**
 * @coversDefaultClass \PHPExif\Exception\UnknownAdapterTypeException
 * @covers ::<!public>
 */
class UnknownAdapterTypeExceptionTest extends BaseExceptionTest
{
    /**
     * @group exception
     * @covers ::forType
     */
    public function testForTypeReturnsInstance()
    {
        $this->assertNamedConstructorReturnsInstance(
            UnknownAdapterTypeException::class,
            'forType',
            array('foo')
        );
    }

    /**
     * @group exception
     * @covers ::noInterface
     */
    public function testnoInterfaceReturnsInstance()
    {
        $this->assertNamedConstructorReturnsInstance(
            UnknownAdapterTypeException::class,
            'noInterface',
            array('foo', 'bar',)
        );
    }
}
