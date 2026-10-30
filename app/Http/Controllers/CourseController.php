<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CourseController extends Controller
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

        $courses = $this->fetchDataFromApi($url . '/course/index');

        return view('course.index', compact('courses'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $course = $this->fetchDataFromApi($url . '/course/' . $id);

        return view('course.show', compact('course'));
    }

    public function create()
    {
        $url = env('URL_SERVER_API');

        $training_centers = $this->fetchDataFromApi($url . '/training_center/index');
        $areas = $this->fetchDataFromApi($url . '/area/index');

        return view('course.create', compact('training_centers', 'areas'));
    }

  public function store(Request $request)
{
    $url = env('URL_SERVER_API');

    $response = Http::post($url . '/course', $request->all());

    // Si la API falló (devuelve error 4xx o 5xx), detenemos la ejecución y mostramos el error exacto
    if ($response->failed()) {
        dd($response->status(), $response->json());
    }

    return redirect()->route('course.index');
}

    public function edit($id)
    {
        $url = env('URL_SERVER_API');

        $course = $this->fetchDataFromApi($url . '/course/' . $id);
        $training_centers = $this->fetchDataFromApi($url . '/training_center/index');
        $areas = $this->fetchDataFromApi($url . '/area/index');

        return view('course.edit', compact('course', 'training_centers', 'areas'));
    }

    public function update(Request $request, $id)
    {
        $url = env('URL_SERVER_API');

        Http::put($url . '/course/' . $id, $request->all());

        return redirect()->route('course.index');
    }

    public function destroy($id)
    {
        $url = env('URL_SERVER_API');

        Http::delete($url . '/course/' . $id);

        return redirect()->route('course.index');
    }
}
