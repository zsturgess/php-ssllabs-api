<?php

namespace BjoernrDe\SslLabs\Tests\Model;

/**
 * BaseModelTestCase
 */
abstract class BaseModelTestCase extends \PHPUnit_Framework_TestCase {
    abstract public function getClassUnderTest();
    abstract public function getInputDataSet();
    abstract public function mapPropertiesToGetters(); //Those that fit the format "getProperty" may be omitted
    abstract public function mapPropertiesToExpectedValues(); //Those that are expected to mirror input may be omitted
    
    public function dataProvider() {
        return [
            [json_encode($this->getInputDataSet())],
            [json_decode(json_encode($this->getInputDataSet()))]
        ];
    }
    
    /**
     * @dataProvider dataProvider
     */
    public function testModel($dataSet) {
        $modelClass = 'BjoernrDe\\SslLabs\\Model\\' . $this->getClassUnderTest();
        $model = new $modelClass($dataSet);
        
        $this->assertInstanceOf($modelClass, $model);
        
        foreach (array_keys($this->getInputDataSet()) as $property) {
            if (array_key_exists($property, $this->mapPropertiesToExpectedValues())) {
                $expectedValue = $this->mapPropertiesToExpectedValues()[$property];
            } else {
                $expectedValue = $this->getInputDataSet()[$property];
            }
            
            $getter = 'get' . ucfirst($property);
            if (!method_exists($model, $getter)) {
                $getter = $this->mapPropertiesToGetters()[$property];
            }
            
            $this->assertEquals($expectedValue, $model->{$getter}());
        }
    }
}
