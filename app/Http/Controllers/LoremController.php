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
        // Validate the request data
      $this->validate($request, [
          'paragraphs' => 'required|integer|min:1',
          'sentences' => 'required|integer|min:1'
      ]);

        $paragraphs=$request->input('paragraphs');
        $sentences=$request->input('sentences');
        $faker = Faker::create();
        $fakerdata = array();
        for ($i = 0; $i < $paragraphs; $i++)
  {
      $fakerdata[] = array($i => $faker->paragraph($sentences, false));
    };
      $data =array(
        'paragraphs' => $paragraphs,
        'sentences' => $sentences,
        'faker' => $fakerdata
      );
      /*  return $data['faker']; */
        return view('Lorem.create')->with('data', $data);

  }
  }
