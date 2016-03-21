<?php

namespace Tests\Unit\PHPExif\Exception\Collection;

use PHPExif\Exception\Collection\ElementNotExistsException;
use Tests\Unit\PHPExif\Exception\BaseExceptionTest;

/**
 * @coversDefaultClass \PHPExif\Exception\Collection\ElementNotExistsException
 * @covers ::<!public>
 */
class ElementNotExistsExceptionTest extends BaseExceptionTest
{
    /**
     * @group exception
     * @covers ::withKey
     */
    public function testWithKeyReturnsInstance()
    {
        $this->assertNamedConstructorReturnsInstance(
            ElementNotExistsException::class,
            'withKey',
            array('foo')
        );
    }
}
