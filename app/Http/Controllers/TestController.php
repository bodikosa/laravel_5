<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\tes;
use App\Http\Requests\TestPostRequest;
use Validator;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class TestController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(tes $test)
    {
       // $model = tes::all();
     //   $model = $test->findAlls();
//
    //  foreach($model as $num=>$name){
    //      echo $num."->".$name->nose."<br />";
    //  }

      //  var_dump($model);
     //   echo "<br />".$model->nos."<br />";
       // echo $model->no;
     //   echo $model->year;



        return view('test.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Photos $photosModel)
    {

        $num = $photosModel->getById();

        return view('photo.index',['post'=>$num]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {

        $num = tes::all();

        return view('test.show',['post'=>$num]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $article = tes::findOrFail($id);

        return view('test.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    //public function update(Request $request,$id)
    public function update(Request $request,$id)
    {
        $article = tes::findOrFail($id);
        $article->nos = $request->nos;
        $article->no = $request['no'];
        $article->save();

        return Redirect::route('test.show');

    }

    public function once($id)
    {
        $article = tes::findOrFail($id);
        return view('test.once',compact('article'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Tes::find($id)->delete();
        return Redirect::route('test.show');
    }

}
