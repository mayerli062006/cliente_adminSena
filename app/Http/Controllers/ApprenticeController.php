<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }

public function index()
{
    $url = env('URL_SERVER_API');
    
    $response = Http::get($url . '/apprentice'); 
    
    // ¡Mira exactamente qué responde la API aquí!
    ($response->json());

    $apprentices = $response->json();

    return view('apprentice.index', compact('apprentices'));
}

    public function create()
    {
        $url = env('URL_SERVER_API');

        $courses = $this->fetchDataFromApi($url . '/course/index');
        $computers = $this->fetchDataFromApi($url . '/computer/index');

        return view('apprentice.create', compact('courses', 'computers'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/apprentice', $request->all());

        return redirect()->route('apprentice.index');
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $apprentice = $this->fetchDataFromApi($url . '/apprentice/' . $id);

        return view('apprentice.show', compact('apprentice'));
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $apprentice = $this->fetchDataFromApi($url . '/apprentice/' . $id);
        $courses = $this->fetchDataFromApi($url . '/course/index');
        $computers = $this->fetchDataFromApi($url . '/computer/index');

        return view('apprentice.edit', compact('apprentice', 'courses', 'computers'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/apprentice/' . $id, $request->all());

        return redirect()->route('apprentice.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete($url . '/apprentice/' . $id);

        return redirect()->route('apprentice.index');
    }
}
