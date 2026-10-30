<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AreaController extends Controller
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

    $response = Http::get($url . '/area');

    // Convertimos la respuesta de la API a un arreglo
    $areas = $response->json();

    // AQUÍ DEBE IR LA VISTA (Asegúrate de quitar el dd($areas))
    return view('area.index', compact('areas'));
}

    public function create()
    {
        return view('area.create');
    }

   public function store(Request $request)
{
    $url = env('URL_SERVER_API');

    // Debe apuntar correctamente a '/area' o '/areas' según tu ruta de la API
    Http::post($url . '/area', [
        'name' => $request->name,
    ]);

    return redirect()->route('areas.index');
}
    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $area = $this->fetchDataFromApi($url . '/area/' . $id);

        return view('area.show', compact('area'));
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $area = $this->fetchDataFromApi($url . '/area/' . $id);

        return view('area.edit', compact('area'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/area/' . $id, $request->all());

        return redirect()->route('areas.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete($url . '/area/' . $id);

        return redirect()->route('areas.index');
    }
}
