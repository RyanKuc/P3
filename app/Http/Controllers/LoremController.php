<?php

namespace P3\Http\Controllers;

use Faker\Factory as Faker;
use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremController extends Controller {

    public function getLorem() {
      return view('Lorem.create');
    }

    public function postLorem(Request $request) {
      $numpar=$request->input('numpar');
      $numsent=$request->input('numsent');
      $faker = Faker::create();
      $fakerdata = array();
      for ($i = 0; $i < $numpar; $i++)
{
    $fakerdata[] = array($i => $faker->paragraph($numsent, false));
  };
    $data =array(
      'numpar' => $numpar,
      'numsent' => $numsent,
      'faker' => $fakerdata
    );
    /*  return $data['faker']; */
      return view('Lorem.create')->with('data', $data);

}
}
