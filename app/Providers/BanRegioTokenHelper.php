<?php

class BanRegioTokenHelper
{
    private $clientId;
    private $clientSecret;
    private $redirectUri;
    private $baseUri;
    private $provider;

    function __construct($baseUri, $grantType, $clientId, $redirectUri, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
        $this->baseUri = $baseUri;

        $this->provider = new \League\OAuth2\Client\Provider\GenericProvider([
            'clientId'                => $clientId,
            'clientSecret'            => $clientSecret,
            'redirectUri'             => $redirectUri,
            'urlAuthorize'            => $this->baseUri.'/oauth/authorize',
            'urlAccessToken'          => $this->baseUri.'/oauth/token/',
            'urlResourceOwnerDetails' => ''
        ]);
    }

    function getAuthorizationCodeURL()
    {
        return $this->provider->getAuthorizationUrl(['approval_prompt' => 'false']);
    }

    function fetchTokenWithClientCredentials()
    {
        return $this->provider->getAccessToken('client_credentials');
    }

    function fetchTokenWithAuthorizationCode($authorizationCode)
    {
        return $this->provider->getAccessToken('authorization_code', ['code' => $authorizationCode]);
    }

    function getProvider()
    {
        return $this->provider;
    }
}
