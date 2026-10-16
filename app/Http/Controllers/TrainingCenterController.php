<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas (patrón del instructor)
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');

        // Se eliminó '/index' para que apunte correctamente a la ruta base de la API
        $training_centers = $this->fetchDataFromApi($url . '/training_center');

        return view('training_center.index', compact('training_centers'));
    }

    public function create()
    {
        return view('training_center.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/training_center', $request->all());

        return redirect()->route('training_center.index');
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $training_center = $this->fetchDataFromApi($url . '/training_center/' . $id);

        return view('training_center.show', compact('training_center'));
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $training_center = $this->fetchDataFromApi($url . '/training_center/' . $id);

        return view('training_center.edit', compact('training_center'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/training_center/' . $id, $request->all());

        return redirect()->route('training_center.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete($url . '/training_center/' . $id);

        return redirect()->route('training_center.index');
    }
}