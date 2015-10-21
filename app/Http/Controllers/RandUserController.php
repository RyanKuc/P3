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
        // Validate the request data
      $this->validate($request, [
          'users' => 'required|integer|min:1|max:99',
      ]);
        $users=$request->input('users');
        $faker = Faker::create();
        $fakerdata = array();
        for ($i = 0; $i < $users; $i++)
  {
      $fakerdata[] = array($i =>
      array('name' => $faker->name,
      'address' =>$faker->streetAddress,
      'city' =>$faker->city,
      'state' =>$faker->state,
      'postcode' =>$faker->postcode
    )
  );
  }
        $data =array(
          'users' => $users,
          'faker' => $fakerdata
      );
  /*  return $data['faker']; */
          return view('RandUser.create')->with('data', $data);
    }
  }
