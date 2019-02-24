<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class RegistroController extends Controller{

  public function __construct(){

    $this->host = "https://dev.apilab.gentera.com.mx/";

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
          'CardIdentification' => '2867272',
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

    $client = new \GuzzleHttp\Client([
      'verify' => false,
      'headers' => [
        'Content-Type' => 'application/json'
      ]
    ]);

    $response = $client->request('POST', $this->host . 'account/level2', [
      'form_params' => $formParams
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