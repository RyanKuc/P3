<?php

namespace P3\Http\Controllers;

use Faker\Factory as Faker;
use P3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RandUserController extends Controller {

    public function getUser() {
      return view('RandUser.create');
    }

    public function postUser(Request $request) {
      $numuser=$request->input('numuser');
      $faker = Faker::create();
      $fakerdata = array();
      for ($i = 0; $i < $numuser; $i++)
{
    $fakerdata[] = array($i => $faker->name);
}
      $data =array(
        'numuser' => $numuser,
        'faker' => $fakerdata
    );
  /* return $data['faker'];*/
       return view('RandUser.create')->with('data', $data);

  }

    public function testuser() {
      $faker = Faker::create();
      for ($i=0; $i < 10; $i++) {
      echo $faker->name, "\n";
}
}

}
