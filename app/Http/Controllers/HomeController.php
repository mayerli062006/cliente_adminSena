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

        $coursesData     = $this->fetchDataFromApi($url . '/courses');
        $computersData   = $this->fetchDataFromApi($url . '/computers');
        $apprenticesData = $this->fetchDataFromApi($url . '/apprentice');
        $teachersData    = $this->fetchDataFromApi($url . '/teacher');
        $centersData     = $this->fetchDataFromApi($url . '/training_centers');
        $areasData       = $this->fetchDataFromApi($url . '/area');

        // Totales seguros
        $totalCourses     = is_array($coursesData) ? count($coursesData) : 0;
        $totalComputers   = is_array($computersData) ? count($computersData) : 0;
        $totalApprentices = is_array($apprenticesData) ? count($apprenticesData) : 0;
        $totalTeachers    = is_array($teachersData) ? count($teachersData) : 0;
        $totalCenters     = is_array($centersData) ? count($centersData) : 0;
        $totalAreas       = is_array($areasData) ? count($areasData) : 0;

        return view('home.index', compact(
            'totalCourses',
            'totalComputers',
            'totalApprentices',
            'totalTeachers',
            'totalCenters',
            'totalAreas'
        ));
    }
} // <--- ¡Esta llave cierra la clase HomeController y soluciona el error!