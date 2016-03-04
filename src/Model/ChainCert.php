<?php

namespace BjoernrDe\SSLLabsApi\Model;

class ChainCert extends ApiObject
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
    
    public function __construct($data) {
        if (is_object($data)) {
            $this->populateObjectByApiResponse($data);
        } else {
            $this->populateObjectByApiResponse(json_decode($data));
        }
    }
    
    public function getSubject() {
        return $this->subject;
    }

    public function getLabel() {
        return $this->label;
    }

    public function getNotBefore() {
        return $this->notBefore;
    }

    public function getNotAfter() {
        return $this->notAfter;
    }

    public function getIssuerSubject() {
        return $this->issuerSubject;
    }

    public function getIssuerLabel() {
        return $this->issuerLabel;
    }

    public function getSigAlg() {
        return $this->sigAlg;
    }

    public function getIssues() {
        return $this->issues;
    }

    public function getKeyAlg() {
        return $this->keyAlg;
    }

    public function getKeySize() {
        return $this->keySize;
    }

    public function getKeyStrength() {
        return $this->keyStrength;
    }

    public function getRevocationStatus() {
        return $this->revocationStatus;
    }

    public function getCrlRevocationStatus() {
        return $this->crlRevocationStatus;
    }

    public function getRaw() {
        return $this->raw;
    }

    protected function setSubject($subject) {
        $this->subject = $subject;
    }

    protected function setLabel($label) {
        $this->label = $label;
    }

    protected function setNotBefore($notBefore) {
        $this->notBefore = new \DateTime($notBefore);
    }

    protected function setNotAfter($notAfter) {
        $this->notAfter = new \DateTime($notAfter);
    }

    protected function setIssuerSubject($issuerSubject) {
        $this->issuerSubject = $issuerSubject;
    }

    protected function setIssuerLabel($issuerLabel) {
        $this->issuerLabel = $issuerLabel;
    }

    protected function setSigAlg($sigAlg) {
        $this->sigAlg = $sigAlg;
    }

    protected function setIssues($issues) {
        $this->issues = $issues;
    }

    protected function setKeyAlg($keyAlg) {
        $this->keyAlg = $keyAlg;
    }

    protected function setKeySize($keySize) {
        $this->keySize = $keySize;
    }

    protected function setKeyStrength($keyStrength) {
        $this->keyStrength = $keyStrength;
    }

    protected function setRevocationStatus($revocationStatus) {
        $this->revocationStatus = $revocationStatus;
    }

    protected function setCrlRevocationStatus($crlRevocationStatus) {
        $this->crlRevocationStatus = $crlRevocationStatus;
    }

    protected function setRaw($raw) {
        $this->raw = $raw;
    }
}
