<?php
namespace BjoernrDe\SSLLabsApi\Calls;

use BjoernrDe\SSLLabsApi\Exceptions\ApiErrorException;

class GenericCall 
{
	CONST API_URL = "https://api.ssllabs.com/api/v2";
	CONST DEV_API_URL = "https://api.dev.ssllabs.com/api/v2/";
	
	/**
	 * Api call
	 * @var string
	 */
	private $apiCall;
	
	/**
	 * Additional parameters for Api call
	 * i.e. hostname in analyze api call
	 * 
	 * @var array
	 */
	private $parameters;
	
	/**
	 * DEV-Mode on|off
	 * If true ssllabs dev api is used for api calls
	 * 
	 * @var boolean
	 */
	private $devMode = false;
	
	/**
	 * Class constructor
	 * 
	 * @param string $apiCall
	 * @param array $parameters
	 */
	public function __construct($apiCall, $parameters = array())
	{
		$this->apiCall = $apiCall;
		$this->parameters = $parameters;
	}
	
	/**
	 * Get DEV mode
	 *
	 * @return boolean
	 */
	public function getDevMode()
	{
		return ($this->devMode);
	}
	
	/**
	 * Set DEV mode on or off
	 * 
	 * @param boolean $devMode
	 */
	public function setDevMode($devMode)
	{
		$this->devMode = (boolean) $devMode;
	}
	
	/**
	 * Send request
	 * 
	 * @throws ApiErrorException
	 * @return string|boolean JSON Api reponse or false
	 */
	public function send()
	{
		if (!empty($this->apiCall))
		{
			//we also want content from failed api responses
			$context = stream_context_create
			(
				array
				(
					'http' => array
					(
						'ignore_errors' => true,
						'timeout' => 5
					)
				)
			);
			
			$apiUrl = $this->getDevMode() ? self::DEV_API_URL : self::API_URL;
			$apiResponse = @file_get_contents($apiUrl . '/' . $this->apiCall . $this->buildGetParameterString($this->parameters), false, $context);
		
			if ($apiResponse === false)
			{
				throw new ApiErrorException('No response from API');
			}
			
			return ($apiResponse);
		}
		
		return (false);
	}
	
	/**
	 * Build GET parameter string for API
	 * + performs boolean to string (true = 'on' ; false = 'off') operation
	 *  
	 * @param array $parameters
	 */
	private function buildGetParameterString($parameters)
	{
		$string = '';
			
		$counter = 0;
		foreach ($parameters as $name => $value)
		{
			if (!is_string($name) || (!is_string($value) && !is_bool($value) && !is_int($value)))
			{
				continue;
			}
				
			if (is_bool($value))
			{
				$value = ($value) ? 'on' : 'off';
			}
				
			$string .= ($counter == 0) ? '?' : '&';
			$string .= urlencode($name) . '=' . urlencode($value);
				
			$counter++;
		}
	
		return ($string);
	}
}