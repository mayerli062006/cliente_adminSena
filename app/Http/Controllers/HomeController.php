<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        
        if ($response->successful()) {
            return $response->json();
        }

        return []; // Retorna un array vacío si falla la API
    }

    public function index()
    {
        $url = env('URL_SERVER_API');

        // 1. Obtener listados generales (tomando los últimos 3 de cada recurso)
        // Ajusta las rutas del endpoint ('/courses', '/computers', etc.) 
        $courses    = collect($this->fetchDataFromApi($url . '/courses'))->take(3);
        $computers  = collect($this->fetchDataFromApi($url . '/computers'))->take(3);
        $apprentices= collect($this->fetchDataFromApi($url . '/apprentices'))->take(3);
        $teachers   = collect($this->fetchDataFromApi($url . '/teachers'))->take(3);
        $centers    = collect($this->fetchDataFromApi($url . '/training_centers'))->take(3);
        $areas      = collect($this->fetchDataFromApi($url . '/area'))->take(3); 

        //  Calcular los totales contando los elementos del array de la API
        $totalCourses    = count($this->fetchDataFromApi($url . '/courses'));
        $totalComputers  = count($this->fetchDataFromApi($url . '/computers'));
        $totalApprentices= count($this->fetchDataFromApi($url . '/apprentices'));
        $totalTeachers   = count($this->fetchDataFromApi($url . '/teachers'));
        $totalCenters    = count($this->fetchDataFromApi($url . '/training_centers'));
        $totalAreas      = count($this->fetchDataFromApi($url . '/area'));

        // Aprendices por curso (Dependiendo de si tu API tiene un endpoint específico o si lo calculas aquí)
        // Si tu API provee una ruta como '/courses/with-apprentices-count', puedes consumirla directamente:
        $apprenticesByCourse = $this->fetchDataFromApi($url . '/courses/with-apprentices-count');

        // ENVIAR DATOS A LA VISTA
        return view('home.index', compact(
            'courses',
            'computers',
            'totalCourses',
            'totalComputers',
            'apprentices',
            'totalApprentices',
            'teachers',
            'totalTeachers',
            'centers',
            'totalCenters',
            'areas',
            'totalAreas',
            'apprenticesByCourse'
        ));
    }
}