<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class GraphController extends Controller
{
  private $api = "http://highcharts-api.dev/api/create";

  public function index()
  {
      $client = new Client(); //GuzzleHttp\Client
      $response = $client->request('POST', "{$this->api}", [
          'form_params' => [
            'title' => 'Income',
            'subtitle' => 'Student income',
            'categories' => "['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']",
            'unit' => 'Bath',
            'series' =>"[{name:'Student1',data:[50,100,60,40,70,102,50]},{name:'Student2',data:[10,20,30,40,50,60,70]}]"
          ]
          // 'form_params' => []
      ]);

      $resBody = $response->getBody();
      $res = json_decode($resBody);
      return view('index', [
          // 'statusCode' => $response->getStatusCode(),
          // 'responseHeader' => $response->getHeader('content-type')[0],
          // 'success' => $res->success,
          // 'data' => $res->data,
          // 'resBody' => $response->getBody()
          'data' => $resBody
      ]);
  }
}
