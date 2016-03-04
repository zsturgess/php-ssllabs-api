<?php

namespace BjoernrDe\SSLLabsApi\Tests\Model;

use BjoernrDe\SSLLabsApi\Model\Simulation;

/**
 * SimDetailsTest
 */
class SimDetailsTest extends BaseModelTestCase {
    private $simulations = [
        '{"client":{"id":56,"name":"Android","version":"2.3.7",
            "isReference":false},"errorCode":0,"attempts":1,"protocolId":
          769,"suiteId":51}','{"client":{"id":58,"name":"Android","version":
            "4.0.4","isReference":false},"errorCode":0,"attempts":1,
          "protocolId":769,"suiteId":49171}','{"client":{"id":59,"name":
            "Android","version":"4.1.1","isReference":false},"errorCode":0,
          "attempts":1,"protocolId":769,"suiteId":49171}','{"client":{"id":
            60,"name":"Android","version":"4.2.2","isReference":false},
          "errorCode":0,"attempts":1,"protocolId":769,"suiteId":49171}','{
          "client":{"id":61,"name":"Android","version":"4.3","isReference":
            false},"errorCode":0,"attempts":1,"protocolId":769,"suiteId":
          49171}','{"client":{"id":62,"name":"Android","version":"4.4.2",
            "isReference":false},"errorCode":0,"attempts":1,"protocolId":
          771,"suiteId":49199}','{"client":{"id":88,"name":"Android","version":
            "5.0.0","isReference":false},"errorCode":0,"attempts":1,
          "protocolId":771,"suiteId":49199}','{"client":{"id":94,"name":
            "Baidu","version":"Jan 2015","isReference":false},"errorCode":
          0,"attempts":1,"protocolId":769,"suiteId":49171}','{"client":{"id":
            91,"name":"BingPreview","version":"Jan 2015","isReference":
            false},"errorCode":0,"attempts":1,"protocolId":771,"suiteId":
          49199}','{"client":{"id":117,"name":"Chrome","platform":"OS X",
            "version":"47","isReference":true},"errorCode":0,"attempts":1,
          "protocolId":771,"suiteId":49199}','{"client":{"id":84,"name":
            "Firefox","platform":"Win 7","version":"31.3.0 ESR",
            "isReference":false},"errorCode":0,"attempts":1,"protocolId":
          771,"suiteId":49199}','{"client":{"id":118,"name":"Firefox",
            "platform":"OS X","version":"42","isReference":true},"errorCode":
          0,"attempts":1,"protocolId":771,"suiteId":49199}','{"client":{"id":
            97,"name":"Googlebot","version":"Feb 2015","isReference":false},
          "errorCode":0,"attempts":1,"protocolId":771,"suiteId":49199}','{
          "client":{"id":100,"name":"IE","platform":"XP","version":"6",
            "isReference":false},"errorCode":1,"attempts":1}','{"client":{"id":
            19,"name":"IE","platform":"Vista","version":"7","isReference":
            false},"errorCode":0,"attempts":1,"protocolId":769,"suiteId":
          49171}','{"client":{"id":101,"name":"IE","platform":"XP","version":
            "8","isReference":false},"errorCode":0,"attempts":1,"protocolId":
          769,"suiteId":10}','{"client":{"id":113,"name":"IE","platform":
            "Win 7","version":"8-10","isReference":true},"errorCode":0,
          "attempts":1,"protocolId":769,"suiteId":49171}','{"client":{"id":
            102,"name":"IE","platform":"Win 7","version":"11","isReference":
            true},"errorCode":0,"attempts":1,"protocolId":771,"suiteId":
          158}','{"client":{"id":104,"name":"IE","platform":"Win 8.1",
            "version":"11","isReference":true},"errorCode":0,"attempts":1,
          "protocolId":771,"suiteId":158}','{"client":{"id":64,"name":"IE",
            "platform":"Win Phone 8.0","version":"10","isReference":false},
          "errorCode":0,"attempts":1,"protocolId":769,"suiteId":49171}','{
          "client":{"id":65,"name":"IE","platform":"Win Phone 8.1","version":
            "11","isReference":true},"errorCode":0,"attempts":1,"protocolId":
          771,"suiteId":49191}','{"client":{"id":106,"name":"IE","platform":
            "Win Phone 8.1 Update","version":"11","isReference":true},
          "errorCode":0,"attempts":1,"protocolId":771,"suiteId":158}','{
          "client":{"id":107,"name":"IE","platform":"Win 10","version":
            "11","isReference":true},"errorCode":0,"attempts":1,"protocolId":
          771,"suiteId":49199}','{"client":{"id":119,"name":"Edge","platform":
            "Win 10","version":"13","isReference":true},"errorCode":0,
          "attempts":1,"protocolId":771,"suiteId":49199}','{"client":{"id":
            120,"name":"Edge","platform":"Win Phone 10","version":"13",
            "isReference":true},"errorCode":0,"attempts":1,"protocolId":
          771,"suiteId":49199}','{"client":{"id":25,"name":"Java","version":
            "6u45","isReference":false},"errorCode":1,"attempts":1}','{
          "client":{"id":26,"name":"Java","version":"7u25","isReference":
            false},"errorCode":0,"attempts":1,"protocolId":769,"suiteId":
          49171}','{"client":{"id":86,"name":"Java","version":"8u31",
            "isReference":false},"errorCode":0,"attempts":1,"protocolId":
          771,"suiteId":49199}','{"client":{"id":27,"name":"OpenSSL","version":
            "0.9.8y","isReference":false},"errorCode":0,"attempts":1,
          "protocolId":769,"suiteId":51}','{"client":{"id":99,"name":
            "OpenSSL","version":"1.0.1l","isReference":true},"errorCode":0,
          "attempts":1,"protocolId":771,"suiteId":49199}','{"client":{"id":
            98,"name":"OpenSSL","version":"1.0.2","isReference":true},
          "errorCode":0,"attempts":1,"protocolId":771,"suiteId":49199}','{
          "client":{"id":32,"name":"Safari","platform":"OS X 10.6.8",
            "version":"5.1.9","isReference":false},"errorCode":0,"attempts":
          1,"protocolId":769,"suiteId":49171}','{"client":{"id":33,"name":
            "Safari","platform":"iOS 6.0.1","version":"6","isReference":
            true},"errorCode":0,"attempts":1,"protocolId":771,"suiteId":
          49191}','{"client":{"id":34,"name":"Safari","platform":
            "OS X 10.8.4","version":"6.0.4","isReference":true},"errorCode":
          0,"attempts":1,"protocolId":769,"suiteId":49171}','{"client":{"id":
            63,"name":"Safari","platform":"iOS 7.1","version":"7",
            "isReference":true},"errorCode":0,"attempts":1,"protocolId":
          771,"suiteId":49191}','{"client":{"id":35,"name":"Safari","platform":
            "OS X 10.9","version":"7","isReference":true},"errorCode":0,
          "attempts":1,"protocolId":771,"suiteId":49191}','{"client":{"id":
            85,"name":"Safari","platform":"iOS 8.4","version":"8",
            "isReference":true},"errorCode":0,"attempts":1,"protocolId":
          771,"suiteId":49191}','{"client":{"id":87,"name":"Safari","platform":
            "OS X 10.10","version":"8","isReference":true},"errorCode":0,
          "attempts":1,"protocolId":771,"suiteId":49191}','{"client":{"id":
            114,"name":"Safari","platform":"iOS 9","version":"9",
            "isReference":true},"errorCode":0,"attempts":1,"protocolId":
          771,"suiteId":49199}','{"client":{"id":111,"name":"Safari",
            "platform":"OS X 10.11","version":"9","isReference":true},
          "errorCode":0,"attempts":1,"protocolId":771,"suiteId":49199}','{
          "client":{"id":112,"name":"Apple ATS","platform":"iOS 9","version":
            "9","isReference":true},"errorCode":1,"attempts":1}','{"client":{
            "id":92,"name":"Yahoo Slurp","version":"Jan 2015","isReference":
            false},"errorCode":0,"attempts":1,"protocolId":771,"suiteId":
          49199}','{"client":{"id":93,"name":"YandexBot","version":
            "Jan 2015","isReference":false},"errorCode":0,"attempts":1,
          "protocolId":771,"suiteId":49199}'
    ];
    
    public function getClassUnderTest() {
        return 'SimDetails';
    }
    
    public function getInputDataSet() {
        return [
            'results' => json_decode('[' . implode(',', $this->simulations) . ']')
        ];
    }
    
    public function mapPropertiesToGetters() {
        return [];
    }
    
    public function mapPropertiesToExpectedValues() {
        $expectedResults = [];
        
        foreach ($this->simulations as $simulation) {
            $expectedResults[] = new Simulation($simulation);
        }
        
        return [
            'results' => $expectedResults
        ];
    }
}
