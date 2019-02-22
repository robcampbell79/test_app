<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mytest extends Model
{
  public static function Call() {
    $url = 'http://localhost:8088/vampire';
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($curl);

    curl_close($curl);

    if(empty(json_decode($data))) {
      $newData = "Failed curl";
    } else {
      $newData = json_decode($data, true);
    }

    return $newData;
  }
}
