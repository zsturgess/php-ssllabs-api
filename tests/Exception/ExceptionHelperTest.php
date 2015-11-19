<?php

namespace BjoernrDe\SSLLabsApi\Tests\Exception;

use BjoernrDe\SSLLabsApi\ApiClient;
use BjoernrDe\SSLLabsApi\Exception\ExceptionHelper;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * ExceptionHelperTest
 */
class ExceptionHelperTest extends \PHPUnit_Framework_TestCase {
    public function test400ResponseInvalidField() {
        $converted = ExceptionHelper::transformGuzzleException(
            $this->createGuzzleException(400, [
                'errors' => [
                    [
                        'field' => 'grass',
                        'message' => 'The grass is greener on the other side.'
                    ]
                ]
            ])
        );
        
        $this->assertInstanceOf('InvalidArgumentException', $converted);
        $this->assertEquals('Invalid value for API parameter "grass". Qualys said: "The grass is greener on the other side."', $converted->getMessage());
    }
    
    public function test400ResponseInvalidRequest() {
        $converted = ExceptionHelper::transformGuzzleException(
            $this->createGuzzleException(400, [
                'errors' => [
                    [
                        'message' => 'Please do not do that.'
                    ]
                ]
            ])
        );
        
        $this->assertInstanceOf('InvalidArgumentException', $converted);
        $this->assertEquals('Invalid API call attempted. Qualys said: "Please do not do that."', $converted->getMessage());
    }
    
    public function test429ResponseTooFast() {
        $converted = ExceptionHelper::transformGuzzleException(
            $this->createGuzzleException(429, [
                'errors' => [
                    [
                        'message' => 'Too many new assessments too fast. Please slow down.'
                    ]
                ]
            ])
        );
        
        $this->assertInstanceOf('BjoernrDe\\SSLLabsApi\\Exception\\AssessmentCooldownExceededException', $converted);
    }
    
    public function test429ResponseTooMany() {
        $converted = ExceptionHelper::transformGuzzleException(
            $this->createGuzzleException(429, [
                'errors' => [
                    [
                        'message' => 'Too many active assessments. Please slow down.'
                    ]
                ]
            ])
        );
        
        $this->assertInstanceOf('BjoernrDe\\SSLLabsApi\\Exception\\TooManyAssessmentsException', $converted);
    }
    
    public function test503Response() {
        $converted = ExceptionHelper::transformGuzzleException(
            $this->createGuzzleException(503, [])
        );
        
        $this->assertInstanceOf('BjoernrDe\\SSLLabsApi\\Exception\\QualysUnavailableException', $converted);
        $this->assertContains('scheduled maintenance', $converted->getMessage());
    }
    
    public function test529Response() {
        $converted = ExceptionHelper::transformGuzzleException(
            $this->createGuzzleException(529, [])
        );
        
        $this->assertInstanceOf('BjoernrDe\\SSLLabsApi\\Exception\\QualysUnavailableException', $converted);
        $this->assertContains('being overloaded', $converted->getMessage());
    }
    
    public function test500Response() {
        $e = $this->createGuzzleException(500, []);
        
        $this->assertEquals($e, ExceptionHelper::transformGuzzleException($e));
    }
    
    private function createGuzzleException($code, $body) {
        $exceptionClass = 'GuzzleHttp\\Exception\\';
        
        if ($code > 399 && $code < 500) {
            $exceptionClass .= 'ClientException';
        } else if ($code > 499 && $code < 600) {
            $exceptionClass .= 'ServerException';
        }
        
        return $exceptionClass::create(
            new Request(
                'GET',
                ApiClient::DEFAULT_BASE_URL . 'analyse?host=www.example.com&fromCache=on'
            ),
            new Response(
                $code,
                [
                    "X-Max-Assessments" => 0,
                    "X-Current-Assessments" => 0
                ],
                json_encode($body)
            )
        );
    }
}
