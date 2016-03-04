<?php

namespace BjoernrDe\SSLLabsApi\Tests\Model;

use BjoernrDe\SSLLabsApi\Model\ChainCert;

/**
 * ChainTest
 */
class ChainTest extends BaseModelTestCase {
    private $chainCerts = [
        '{"subject":
          "CN\u003d*.partnermarketing.com,OU\u003dCOMODO SSL Wildcard,OU\u003dIssued through Twogether Creative Ltd E-PKI Manager,OU\u003dDomain Control Validated",
          "label":"*.partnermarketing.com","notBefore":1376265600000,
          "notAfter":1473897599000,"issuerSubject":
          "CN\u003dCOMODO SSL CA,O\u003dCOMODO CA Limited,L\u003dSalford,ST\u003dGreater Manchester,C\u003dGB",
          "issuerLabel":"COMODO SSL CA","sigAlg":"SHA1withRSA","issues":8,
          "keyAlg":"RSA","keySize":2048,"keyStrength":2048,
          "revocationStatus":2,"crlRevocationStatus":2,
          "ocspRevocationStatus":2,"sha1Hash":
          "6083252afd89386ddd039ec1c2e987b2d3c9adb4","pinSha256":
          "689WVM8HkgJvOOwtbRvptmLRipdaE2zORNu0wRA+eZM\u003d","raw":
          "-----BEGIN CERTIFICATE-----\nMIIFTTCCBDWgAwIBAgIQX97h+knRLzseDNWZP6mZazANBgkqhkiG9w0BAQUFADBwMQswCQYDVQQG\r\nEwJHQjEbMBkGA1UECBMSR3JlYXRlciBNYW5jaGVzdGVyMRAwDgYDVQQHEwdTYWxmb3JkMRowGAYD\r\nVQQKExFDT01PRE8gQ0EgTGltaXRlZDEWMBQGA1UEAxMNQ09NT0RPIFNTTCBDQTAeFw0xMzA4MTIw\r\nMDAwMDBaFw0xNjA5MTQyMzU5NTlaMIGgMSEwHwYDVQQLExhEb21haW4gQ29udHJvbCBWYWxpZGF0\r\nZWQxPDA6BgNVBAsTM0lzc3VlZCB0aHJvdWdoIFR3b2dldGhlciBDcmVhdGl2ZSBMdGQgRS1QS0kg\r\nTWFuYWdlcjEcMBoGA1UECxMTQ09NT0RPIFNTTCBXaWxkY2FyZDEfMB0GA1UEAxQWKi5wYXJ0bmVy\r\nbWFya2V0aW5nLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMs+iikpxI52huHB\r\nb4/lwbjERUsElV8k1bjL+L9GqGsz/Pc3IShRgaCsD4kA5WQA5Aqk8/8xAuLmpxHrokKmS6r6Ir0a\r\nVXG/FflMXcR2bhmwukXpHG9ZaVLfhKX10gafj+qoqsHRpD0Lhx5owMY/9115AMjJ45RgqaHhAzhV\r\nTdj2pV+mLaWnapWjE3n76+cvGj2LoZEO9EGR8AFWyQnd2pZPsEUJIlLDhuttgEHsH0zF81oCj+A+\r\nmvbSpICbC7MUFTwOQm93N0k4Sb7zoucUe6HMeb+a+54B5OCBPpRDKqRq6aKADVLCpDQn4X/u5WJE\r\nAiAWzC0b0NtcXFnsYwKUvQMCAwEAAaOCAbAwggGsMB8GA1UdIwQYMBaAFBtrvR+KSRiUVDdVtCAX\r\n7Te5dxh9MB0GA1UdDgQWBBSQUGnZx+5IsML07Pri1/HH4q1uPDAOBgNVHQ8BAf8EBAMCBaAwDAYD\r\nVR0TAQH/BAIwADAdBgNVHSUEFjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwTwYDVR0gBEgwRjA6Bgsr\r\nBgEEAbIxAQICBzArMCkGCCsGAQUFBwIBFh1odHRwczovL3NlY3VyZS5jb21vZG8uY29tL0NQUzAI\r\nBgZngQwBAgEwOAYDVR0fBDEwLzAtoCugKYYnaHR0cDovL2NybC5jb21vZG9jYS5jb20vQ09NT0RP\r\nU1NMQ0EuY3JsMGkGCCsGAQUFBwEBBF0wWzAzBggrBgEFBQcwAoYnaHR0cDovL2NydC5jb21vZG9j\r\nYS5jb20vQ09NT0RPU1NMQ0EuY3J0MCQGCCsGAQUFBzABhhhodHRwOi8vb2NzcC5jb21vZG9jYS5j\r\nb20wNwYDVR0RBDAwLoIWKi5wYXJ0bmVybWFya2V0aW5nLmNvbYIUcGFydG5lcm1hcmtldGluZy5j\r\nb20wDQYJKoZIhvcNAQEFBQADggEBABKwn3JuQxEqlSiHRwB8c6jREHgq9z1WSNg4wWNx28p718wI\r\nIeuTxftbiIFTuVW8o4vkyoiVfhf3/01s6j1NMZ8FAfmWl5c488WjqHvQnAHMjId7eFQYeZYDmXtW\r\nNa+w2e+GRc3FRxpRRJj0220F5FRqZT7B3qpZrsGBHI6Rro17fJK8r10dWep60Fy4eWB6u5+WfoLg\r\niejho+5Ji7Gtptn4gPauQdcOpH97pENrp0TDlnpMV8eggOnzxv95pXHXVS6jSKoYQKSlYlOho5Ce\r\nqSK6S7F+ne/ms0bzNhxnpOBH/NITZqUb8g9MWldovzAGD2tJJrMdPj6+K4DRrnRzInU\u003d\r\n-----END CERTIFICATE-----\n"}',
        ' {"subject":
          "CN\u003dCOMODO SSL CA,O\u003dCOMODO CA Limited,L\u003dSalford,ST\u003dGreater Manchester,C\u003dGB",
          "label":"COMODO SSL CA","notBefore":1314057600000,"notAfter":
          1590835718000,"issuerSubject":
          "CN\u003dAddTrust External CA Root,OU\u003dAddTrust External TTP Network,O\u003dAddTrust AB,C\u003dSE",
          "issuerLabel":"AddTrust External CA Root","sigAlg":"SHA1withRSA",
          "issues":8,"keyAlg":"RSA","keySize":2048,"keyStrength":2048,
          "revocationStatus":2,"crlRevocationStatus":2,
          "ocspRevocationStatus":2,"sha1Hash":
          "b4c66180c520bad688470ef80bb22beba8391c22","pinSha256":
          "4z3Oleuv5p+QwS6JdPyMCfqH0z9melRZSqSsXQs7S9Q\u003d","raw":
          "-----BEGIN CERTIFICATE-----\nMIIE4jCCA8qgAwIBAgIQbrrwj3mD+p3hsm+W/G6YvzANBgkqhkiG9w0BAQUFADBvMQswCQYDVQQG\r\nEwJTRTEUMBIGA1UEChMLQWRkVHJ1c3QgQUIxJjAkBgNVBAsTHUFkZFRydXN0IEV4dGVybmFsIFRU\r\nUCBOZXR3b3JrMSIwIAYDVQQDExlBZGRUcnVzdCBFeHRlcm5hbCBDQSBSb290MB4XDTExMDgyMzAw\r\nMDAwMFoXDTIwMDUzMDEwNDgzOFowcDELMAkGA1UEBhMCR0IxGzAZBgNVBAgTEkdyZWF0ZXIgTWFu\r\nY2hlc3RlcjEQMA4GA1UEBxMHU2FsZm9yZDEaMBgGA1UEChMRQ09NT0RPIENBIExpbWl0ZWQxFjAU\r\nBgNVBAMTDUNPTU9ETyBTU0wgQ0EwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDUKy4c\r\n0qP4f1UUQN73RN2EVfeFe1VmaaflWetlg/TzdrFmw09OmJMJt0Cz0RegEgmogOEpY5cCjDGdCgLg\r\nWVu77TC1735drwhOjYvCOVYWmHOUeArJpk8ot6g0N9slIbE8mfbgEj5z6mQyn0IGPBnYCgR6TFdJ\r\nK9J3etAAvF76ju7MwuQTbiVf3DykiKPcSce8xw/dGcCxcu147ziDCkUXG8l9ne3fqywso3WuW4Id\r\niIONzghlDGYmVwWhDN/mB4QLhKPIq9WVR7/c3P4d/AKTRAHK5rW3axYwAV3piQmVnvheKVzdx1WM\r\n8o4gTkB65PVFA7SYK8SAflOHb8LSV7DpAgMBAAGjggF3MIIBczAfBgNVHSMEGDAWgBStvZh6NLQm\r\n9/rEJlTvA73gJMtUGjAdBgNVHQ4EFgQUG2u9H4pJGJRUN1W0IBftN7l3GH0wDgYDVR0PAQH/BAQD\r\nAgEGMBIGA1UdEwEB/wQIMAYBAf8CAQAwEQYDVR0gBAowCDAGBgRVHSAAMEQGA1UdHwQ9MDswOaA3\r\noDWGM2h0dHA6Ly9jcmwudXNlcnRydXN0LmNvbS9BZGRUcnVzdEV4dGVybmFsQ0FSb290LmNybDCB\r\nswYIKwYBBQUHAQEEgaYwgaMwPwYIKwYBBQUHMAKGM2h0dHA6Ly9jcnQudXNlcnRydXN0LmNvbS9B\r\nZGRUcnVzdEV4dGVybmFsQ0FSb290LnA3YzA5BggrBgEFBQcwAoYtaHR0cDovL2NydC51c2VydHJ1\r\nc3QuY29tL0FkZFRydXN0VVROU0dDQ0EuY3J0MCUGCCsGAQUFBzABhhlodHRwOi8vb2NzcC51c2Vy\r\ndHJ1c3QuY29tMA0GCSqGSIb3DQEBBQUAA4IBAQBDJTkjBwSsmV1ZZz3mL2F9WlZ7/AaNs0ud+tUF\r\nTA1mtb08x6Iqa7XP5rqDPmCQNgzVwu2KldmSQiMcA3Y+wkjxdXKds4zPs1g0VkkdoS4rPbLoWhBG\r\n3mS1Ta5LbvwBtyEQ1ZW36yy+FAbMQS7kbOJGkP/GKH5z/uUXuoLDEAWBZsKLKDigRD7p5M4zsHz4\r\n4VOduLTL2sku2ZNwjnwL43M+mZmP6+ERRDXYYIFiRdTeRVuQLkkbG9ukD4BiIXNp8ePebdhIfFYS\r\nJiIRRwHGXhnCtJWX7mEAVfEEOPyE5ni0DUO+QzPdaNMiWwD7FILoS2J5MM/TlZ+zuYQB1N3PIxL4\r\n-----END CERTIFICATE-----\n"}'
    ];
    
    public function getClassUnderTest() {
        return 'Chain';
    }
    
    public function getInputDataSet() {
        return [
            'chain' => json_decode('[' . $this->chainCerts[0] . ',' . $this->chainCerts[1] . ']'),
            'issues' => 0
        ];
    }
    
    public function mapPropertiesToGetters() {
        return [];
    }
    
    public function mapPropertiesToExpectedValues() {
        return [
            'chain' => [
                new ChainCert($this->chainCerts[0]),
                new ChainCert($this->chainCerts[1])
            ]
        ];
    }
}
