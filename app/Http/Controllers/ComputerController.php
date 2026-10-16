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

    // Quitamos '/index' para que apunte correctamente a http://adminsena.test/v1/computer
    $computers = $this->fetchDataFromApi($url . '/computer');

    return view('computer.index', compact('computers'));
}
    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/computer', $request->all());

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
        $url = env('URL_SERVER_API');

        Http::put($url . '/computer/' . $id, $request->all());

        return redirect()->route('computer.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete($url . '/computer/' . $id);

        return redirect()->route('computer.index');
    }
}
