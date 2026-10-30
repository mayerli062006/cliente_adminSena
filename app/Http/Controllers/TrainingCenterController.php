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

        $training_centers = $this->fetchDataFromApi($url . '/training_center');

        return view('training_center.index', compact('training_centers'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        // Si necesitas traer datos relacionados para el formulario (como hacía categories con posts), 
        // puedes agregarlos aquí. Si no, puedes dejarlo solo retornando la vista.

        return view('training_center.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $url = env('URL_SERVER_API');
        $file = $request->file('imagen');

        // Enviamos los campos de texto junto con el archivo usando Http::attach (exactamente igual que el instructor)
        $response = Http::attach(
            'imagen',
            file_get_contents($file->getRealPath()),
            $file->getClientOriginalName()
        )->post($url . '/training_center', [
            'name' => $request->name,
            'location' => $request->location,
        ]);

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
