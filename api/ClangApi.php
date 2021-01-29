<?php


namespace ClangApi;


use Closure;
use DOMDocument;
use SoapFault;

/**
 * ClangApi inception...
 *
 * Class ClangApi
 * @package ClangApi
 */
class ClangApi extends \ClangSdk\ClangAPI
{
    private $debug = false;

    private $errorListeners = [];

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     * @throws SoapFault
     */
    public function __construct(array $options = [], $wsdl = null)
    {
        parent::__construct($this->getDefaultOptions($options), $wsdl);
    }

    protected function getDefaultOptions(array $options): array
    {
        if (isset($options['debug'])) {
            $this->setDebug($options['debug']);
            unset($options['debug']);
        }
        if (isset($options['errorListener'])) {
            $this
                ->addErrorListener($options['errorListener'])
                ->setDebug();
            unset($options['errorListener']);
        }
        return array_merge([
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'exceptions' => !$this->debug,
            'trace' => $this->debug
        ], $options);
    }

    public function getLastRequest()
    {
        $doc = new DOMDocument('1.0');
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $doc->loadXML($this->__getLastRequest());
        return $doc->saveXML();
    }

    public function getLastResponse()
    {
        $doc = new DOMDocument('1.0');
        $doc->preserveWhiteSpace = false;
        $doc->formatOutput = true;
        $doc->loadXML($this->__getLastResponse());
        return $doc->saveXML();
    }

    private function setDebug($debug = true): ClangAPI
    {
        $this->debug = $debug;
        return $this;
    }

    private function addErrorListener(Closure $listener): ClangAPI
    {
        $this->errorListeners[] = $listener;
        return $this;
    }

    private function callErrorListeners(SoapFault $error)
    {
        if (!empty($this->errorListeners)) {
            $request = $this->getLastRequest();
            $response = $this->getLastResponse();
            foreach ($this->errorListeners as $errorListener) {
                call_user_func($errorListener, $error, $request, $response);
            }
        }
    }

    public function __soapCall($name, $args, $options = null, $inputHeaders = null, &$outputHeaders = null)
    {
        $result = parent::__soapCall($name, $args, $options, $inputHeaders, $outputHeaders);
        if ($result instanceof SoapFault) {
            $this->callErrorListeners($result);
            throw $result;
        }
        return $result;
    }
}