<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class RegistroController extends Controller{

  public function __construct(){

    $this->host = "https://dev.apilab.gentera.com.mx/account/";
    // $this->host = "http://joshuashdz-c4e78821-eval-test.apigee.net/v1/carriers/";

  }

  public function iniciar(Request $request){

    $data = $request->all();
    return view('dashboard', ['data' => $data]);

  }

  public function registro(Request $request){

    $data = $request->all();
    $data['birthday'] = $data['year'] . '-' . $data['month'] . '-' . $data['day'];
    return view('domicilio', ['data' => $data]);

  }

  public function domicilio(Request $request){

    $data = $request->all();
    $formParams = [
      'MessageHeader' => [
        'CreationDateTime' => "2001-01-03T21:34:11Z"
      ],
      'Level2AccountCreationData' => [
        'Identifiers' => [
          'ServiceOfficeID' => "242",
          'CommerceID' => 'J211',
          'OriginID' => 'Z06'
        ],
        'BusinessPartnerCreateLevel2AccountData' => [
          'NameData' => [
            'GivenName' => $data['ap_paterno'],
            'MiddleName' => $data['ap_materno'],
            'FamilyName' => $data['nombre'],
            'AditionalFamilyName' => ''
          ],
          'BirthDate' => $data['birthday'],
          'Gender' => '0',
          'DocumentIdentifier' => [
            'Code' => 'ZCVELE',
            'ID' => 'ARMNJR92120714H700'
          ],
          'CardIdentification' => '2867244',
          'RegionBirth' => 'DF',
          'BirthCountryCode' => 'MX',
          'CitizenshipCode' => 'MX',
          'PhoneData' => [
            'PhoneTypeID' => '6',
            'PhoneNumber' => [
              'SubscriberID' => $data['phone']
            ]
          ],
          'AddressData' => [
            'AddressTypeCode' => 'XXDEFAULT',
            'StreetName' => $data['calle'],
            'CountryCode' => 'MX',
            'RegionCode' => 'DF',
            'CityName' => $data['ciudad'],
            'DistrictName' => $data['colonia'],
            'AdditionalCityName' => $data['delegacion'],
            'StreetPostalCode' => $data['zipcode'],
            'HouseID' => $data['numero'],
            'AdditionalHouseID' => $data['interior']
          ]
        ]
      ]
    ];

    // echo json_encode($formParams); exit;
    // $formParams = json_decode('{"MessageHeader":{"CreationDateTime":"2001-01-03T21:34:11Z"},"Level2AccountCreationData":{"Identifiers":{"ServiceOfficeID":"242","CommerceID":"J211","OriginID":"Z06"},"BusinessPartnerCreateLevel2AccountData":{"NameData":{"GivenName":"Figueroa","MiddleName":"Maya","FamilyName":"Helios","AditionalFamilyName":""},"BirthDate":"1988-03-11","Gender":"0","DocumentIdentifier":{"Code":"ZCVELE","ID":"ARMNJR92120714H700"},"CardIdentification":"2867272","RegionBirth":"DF","BirthCountryCode":"MX","CitizenshipCode":"MX","PhoneData":{"PhoneTypeID":"6","PhoneNumber":{"SubscriberID":"5534286389"}},"AddressData":{"AddressTypeCode":"XXDEFAULT","StreetName":"Marsella","CountryCode":"MX","RegionCode":"DF","CityName":"Mexico","DistrictName":"Juarez","AdditionalCityName":"Cuauhtemoc","StreetPostalCode":"06600","HouseID":"3","AdditionalHouseID":"21"}}}}', 1);
    $client = new \GuzzleHttp\Client([
      'verify' => false,
      'headers' => [
        'Content-Type' => 'application/json'
      ],
      'base_uri' => $this->host
    ]);

    $response = $client->request('POST', 'level2', [
      'headers' => [
        'Content-Type' => 'application/json'
      ],
      'json' => $formParams
    ]);

    $content = $response->getBody()->getContents();
    $apiData = json_decode($content, 1);

    $data['apiData'] = $apiData;

    return view('dashboard', ['data' => $data]);

  }

  public function investment(){

    return view('investment');

  }

  public function movements(){

    return view('movements');

  }

  public function transfers(){

    return view('transfers');

  }

}