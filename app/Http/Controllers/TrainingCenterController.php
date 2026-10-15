<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{

    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()   //http://api.codersfree.test/v1/categories?included=posts
    {

        $url = env('URL_SERVER_API');

        $trainingCenters = $this->fetchDataFromApi($url . '/trainingCenters');
        // return $categories;
        return view('training_centers.index', compact('trainingCenters'));
    }

    public function show($id)
    {

        $url = env('URL_SERVER_API');

        $trainingCenter = $this->fetchDataFromApi($url . '/trainingCenters/' . $id);

        return view('training_centers.show', compact('trainingCenter'));
    }

    public function create()
    {
        return view('training_centers.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/trainingCenters', $request->all());

        return redirect()->route('training_centers.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        $trainingCenter = $this->fetchDataFromApi($url . '/trainingCenters/' . $id);
        return view('training_centers.edit', compact('trainingCenter'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/trainingCenters/' . $id, $request->all());

        return redirect()->route('training_centers.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        Http::delete($url . '/trainingCenters/' . $id);
        return redirect()->route('training_centers.index');
    }
}
