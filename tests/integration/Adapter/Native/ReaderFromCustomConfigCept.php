<?php

use PHPExif\Adapter\Native\Mapper;
use PHPExif\Adapter\Native\Mapper\ExifMapper;
use PHPExif\Adapter\Native\Mapper\Exif\ApertureFieldMapper;
use PHPExif\Adapter\Native\Mapper\IptcMapper;
use PHPExif\Adapter\Native\Reader;
use PHPExif\Adapter\Native\ReaderConfig;
use PHPExif\Data\MetadataInterface;

$I = new IntegrationTester($scenario);
$I->wantTo('Create a new Native Reader instance from a custom Config');

$config = new ReaderConfig(
    false,
    'EXIF,COMMENT'
);

$exifMapper = new ExifMapper;
$exifMapper->registerFieldMapper(new ApertureFieldMapper);

$mapper = new Mapper();
$mapper->registerFieldMapper($exifMapper);
$mapper->registerFieldMapper(new IptcMapper);

$reader = new Reader(
    $config,
    $mapper
);

$data = $reader->getMetadataFromFile(
    'https://raw.githubusercontent.com/Miljar/php-exif/master/tests/files/morning_glory_pool_500.jpg'
);
$this->assertTrue(
    $data instanceof MetadataInterface
);

$this->assertEquals(
    'f/8.0',
    $data->getExif()->getAperture()->__toString()
);
