<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShutterstockController extends Controller
{
    public function showPirateImages()
    {
        // Credenciales de la API de Shutterstock (reemplázalas con las tuyas)
        $clientId = env('SHUTTERSTOCK_CLIENT_ID');
        $clientSecret = env('SHUTTERSTOCK_CLIENT_SECRET');

        // Endpoint de búsqueda de imágenes de Shutterstock
        $endpoint = 'https://api.shutterstock.com/v2/images/search?';

        try {
            // Realiza la solicitud a la API de Shutterstock
            $response = Http::withBasicAuth($clientId, $clientSecret)->get($endpoint, [
                'query' => 'beach girl', // Término de búsqueda para imágenes de piratas
                'per_page' => 12, // Número de imágenes a obtener (en este caso, 10)
            ]);

            // Verifica si la solicitud fue exitosa (código de estado 200)
            if ($response->successful()) {
                // Obtén las imágenes de la respuesta JSON
                $images = $response->json()['data'];

                // Crea un arreglo para almacenar la información relevante de cada imagen
                $pirateResult = [];
                foreach ($images as $image) {
                    $pirateResult[] = [
                        'url' => $image['assets']['preview']['url'],
                        'description' => $image['description'],
                        'color' => 'FFFFFF', // Filtro para fondo blanco en formato hexadecimal
                        'image_type' => 'vector',
                    ];
                }

                // Pasa el arreglo de imágenes a la vista 'index'
                return view('index', ['images' => $pirateResult]);
            } else {
                // Maneja el caso en el que la solicitud no fue exitosa
                return view('error', ['message' => 'Error al obtener imágenes de Shutterstock']);
            }
        } catch (\Exception $e) {
            // Maneja cualquier excepción que pueda ocurrir durante la solicitud
            return view('error', ['message' => $e->getMessage()]);
        }
    }
}
