<?php

class BanRegioApiHelper
{
    private $accessToken;
    private $baseUri;
    private $provider;

    function __construct($baseUri, $accessToken, $provider)
    {
        $this->baseUri = $baseUri;
        $this->accessToken = $accessToken;
        $this->provider = $provider;
    }

    function linkAccount($clientNumber, $last4Digits, $cardPin)
    {
        $body = ['number' => $clientNumber, 'card' => ['last_4_digits' => $last4Digits, 'pin' => $cardPin]];
        $options['body'] = json_encode($body);
        $options['headers']['Content-Type'] = 'application/json;charset=UTF-8';
        $options['headers']['User-Agent'] = 'my-user-agent-name';

        $request = $this->provider->getAuthenticatedRequest('POST',
                $this->baseUri.'/v1/accounts',
                $this->accessToken,
                $options);

        return $this->provider->getResponse($request);
    }

    function listAccounts()
    {
        $options['headers']['Content-Type'] = 'application/json;charset=UTF-8';
        $options['headers']['User-Agent'] = 'my-user-agent-name';

        $request = $this->provider->getAuthenticatedRequest('GET',
                $this->baseUri.'/v1/accounts',
                $this->accessToken,
                $options);

        return $this->provider->getResponse($request);
    }

    function unlinkAccount($accountId)
    {
        $options['headers']['Content-Type'] = 'application/json;charset=UTF-8';
        $options['headers']['User-Agent'] = 'my-user-agent-name';

        $request = $this->provider->getAuthenticatedRequest('DELETE',
                $this->baseUri.'/v1/accounts/'.$accountId,
                $this->accessToken,
                $options);

        return $this->provider->getResponse($request);
    }

    function listTransactions($accountId)
    {
        $options['headers']['Content-Type'] = 'application/json;charset=UTF-8';
        $options['headers']['User-Agent'] = 'my-user-agent-name';

        $request = $this->provider->getAuthenticatedRequest('GET',
                $this->baseUri.'/v1/accounts/'.$accountId.'/transactions',
                $this->accessToken,
                $options);

        return $this->provider->getResponse($request);
    }
}