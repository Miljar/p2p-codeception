<?php

namespace Tests\Unit\PHPExif\Exception;

use PHPExif\Exception\NoExifDataException;
use Tests\Unit\PHPExif\Exception\BaseExceptionTest;

/**
 * @coversDefaultClass \PHPExif\Exception\NoExifDataException
 * @covers ::<!public>
 */
class NoExifDataExceptionTest extends BaseExceptionTest
{
    /**
     * @group exception
     * @covers ::fromFile
     */
    public function testFromFileReturnsInstance()
    {
        $this->assertNamedConstructorReturnsInstance(
            NoExifDataException::class,
            'fromFile',
            array('foo')
        );
    }
}
