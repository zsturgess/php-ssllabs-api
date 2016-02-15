<?php

namespace BjoernrDe\SSLLabsApi\Model;

class ChainCert
{
    private $subject;
    private $label;
    private $notBefore;
    private $notAfter;
    private $issuerSubject;
    private $issuerLabel;
    private $sigAlg;
    private $issues;
    private $keyAlg;
    private $keySize;
    private $keyStrength;
    private $revocationStatus;
    private $crlRevocationStatus;
    private $raw;
}
