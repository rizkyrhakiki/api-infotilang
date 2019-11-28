<?php

namespace App\Http\Controllers;

use App\Coba;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  = Coba::all();
        $dataPelanggaran['title']='Daftar Pelanggaran';
        $dataPelanggaran['results']= $data;

        return response()->json($dataPelanggaran);
    }
    public function find($id)
    {
        $data  = Coba::find($id);
        $dataPelanggaran['title']='Daftar Pelanggaran';
        $dataPelanggaran['results']= $data;

        return response()->json($dataPelanggaran);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coba = Coba::create($request->all());
        $responseData['title'] = 'Cobain';
        $responseData['result'] = $coba;
        return response()->json($responseData);
    }

    public function cobaCreate()
    {
        return view('CobaInput');
    }


    public function coba (Request $request) {
        $client = new Client();

        $response = $client->response('POST','http://127.0.0.1:8080/api/coba/');
        $responseBody = $response->getBody()->getContents();

        $apiResponse = json_decode($responseBody, true);
        return "gooooddd!!!!!!";
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
