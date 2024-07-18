<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'guests' => 'required|integer',
            'date' => 'required|date',
            'destination' => 'required|string|max:255',
        ]);

        // Crea una nueva reserva con los datos validados y guárdala en la base de datos
        $reservation = Reservation::create($validatedData);

        // Redirecciona a la página actual (se recarga) con un mensaje de éxito
        return redirect()->back()->with('success', 'Formulario enviado con éxito.');
    }
}
