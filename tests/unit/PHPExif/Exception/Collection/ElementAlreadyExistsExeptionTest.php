<?php

namespace Tests\Unit\PHPExif\Exception\Collection;

use PHPExif\Exception\Collection\ElementAlreadyExistsException;
use Tests\Unit\PHPExif\Exception\BaseExceptionTest;

/**
 * @coversDefaultClass \PHPExif\Exception\Collection\ElementAlreadyExistsException
 * @covers ::<!public>
 */
class ElementAlreadyExistsExceptionTest extends BaseExceptionTest
{
    /**
     * @group exception
     * @covers ::withKey
     */
    public function testWithKeyReturnsInstance()
    {
        $this->assertNamedConstructorReturnsInstance(
            ElementAlreadyExistsException::class,
            'withKey',
            array('foo')
        );
    }
}
