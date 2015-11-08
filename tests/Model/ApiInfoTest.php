<?php

namespace BjoernrDe\SslLabs\Tests\Model;

/**
 * ApiInfoTest
 */
class ApiInfoTest extends BaseModelTestCase {
    public function getClassUnderTest() {
        return 'ApiInfo';
    }
    
    public function getInputDataSet() {
        return [
            "version" => "0.0.1",
            "criteriaVersion" => "2015z",
            "maxAssessments" => 12,
            "currentAssessments" => 4,
            "newAssessmentCoolOff" => 1000,
            "messages" => []
        ];
    }
    
    public function mapPropertiesToGetters() {
        return [];
    }
    
    public function mapPropertiesToExpectedValues() {
        return [
            "newAssessmentCoolOff" => 1,
            "messages" => new \Doctrine\Common\Collections\ArrayCollection()
        ];
    }
    
    public function messagesProvider() {
        $input = $this->getInputDataSet();
        $input['messages'] = [
            "Public message",
            "[Private] Private message"
        ];
        
        return [
            [json_encode($input)],
            [json_decode(json_encode($input))]
        ];
    }
    
    /**
     * @dataProvider messagesProvider
     */
    public function testAddMessages($dataSet) {
        $model = new \BjoernrDe\SslLabs\Model\ApiInfo($dataSet);
        
        $this->assertCount(2, $model->getMessages());
        $this->assertInstanceOf('BjoernrDe\\SslLabs\\Model\\Message', $model->getMessages()[0]);
        $this->assertEquals("Public message", (string) $model->getMessages()[0]);
        $this->assertInstanceOf('BjoernrDe\\SslLabs\\Model\\Message', $model->getMessages()[1]);
        $this->assertEquals("[Private] Private message", (string) $model->getMessages()[1]);
    }
}
