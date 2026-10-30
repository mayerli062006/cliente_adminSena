<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ComputerController extends Controller
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

        $computers = $this->fetchDataFromApi($url . '/computer');

        return view('computer.index', compact('computers'));
    }

    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|integer',
            'marca' => 'required|string|max:255',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $url = env('URL_SERVER_API');
        $file = $request->file('imagen');

        Http::attach(
            'imagen',
            file_get_contents($file->getRealPath()),
            $file->getClientOriginalName()
        )->post($url . '/computer', [
            'numero' => $request->numero,
            'marca' => $request->marca,
        ]);

        return redirect()->route('computer.index');
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $computer = $this->fetchDataFromApi($url . '/computer/' . $id);

        return view('computer.show', compact('computer'));
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $computer = $this->fetchDataFromApi($url . '/computer/' . $id);

        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'numero' => 'required|integer',
            'marca' => 'required|string|max:255',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $url = env('URL_SERVER_API');

        $http = Http::asMultipart();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $http->attach(
                'imagen',
                file_get_contents($file->getRealPath()),
                $file->getClientOriginalName()
            );
        }

        // Laravel no siempre procesa archivos binarios correctamente mediante un PUT directo por HTTP,
        // por lo que se envía por POST simulando PUT o con multipart hacia la API.
        $http->post($url . '/computer/' . $id, [
            '_method' => 'PUT',
            'numero' => $request->numero,
            'marca' => $request->marca,
        ]);

        return redirect()->route('computer.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete($url . '/computer/' . $id);

        return redirect()->route('computer.index');
    }
}
