<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class TeacherController extends Controller
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

        $teachers = $this->fetchDataFromApi($url . '/teacher/index');
        
        return view('teacher.index', compact('teachers'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $teacher = $this->fetchDataFromApi($url . '/teacher/' . $id);

        return view('teacher.show', compact('teacher'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');
        
        // Consumimos los endpoints relacionados 
        $training_centers = Http::get($url . '/training_center/index')->json();
        $areas = Http::get($url . '/area/index')->json();

        return view('teacher.create', compact('training_centers', 'areas'));
    }

    public function store(Request $request)
    {
        $url = env('URL_SERVER_API');

        Http::post($url . '/teacher', $request->all());

        return redirect()->route('teacher.index');
    }

    public function edit($id)
    {
        $url = env('URL_SERVER_API');
        
        $teacher = $this->fetchDataFromApi($url . '/teacher/' . $id);
        $training_centers = $this->fetchDataFromApi($url . '/training_center/index');
        $areas = $this->fetchDataFromApi($url . '/area/index');

        return view('teacher.edit', compact('teacher', 'training_centers', 'areas'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/teacher/' . $id, $request->all());

        return redirect()->route('teacher.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');
        
        Http::delete($url . '/teacher/' . $id);
        
        return redirect()->route('teacher.index');
    }
}