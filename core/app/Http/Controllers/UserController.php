<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function doLogin() {
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:6'
        ],[
            'email.required' => 'El email es obligatorio',
            'password.required' => 'La contraseña es obligatoria'
        ]);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'active' => 1])) {
            // Añadimos registro de log
            Log::addLog('Usuario inicia sesión');
            return redirect()->route('dashboard.index');
        } else {
            Log::addErrorLog('Error al iniciar sesión => ' . json_encode($data));
            return redirect()->route('welcome.index')->withErrors(['login' => 'Error al iniciar sesión']);
        }
    }

    public function profile() {
        return view('profile');
    }

    public function edit(Request $request) {
        $data = $this->validate($request, [
            'passwordNew' => 'nullable',
            'passwordNewConfirm' => 'nullable',
        ]);

        if ($data['passwordNew'] != null && $data['passwordNewConfirm'] != null) {
            $this->validate($request, [
                'passwordNew' => 'required|min:6',
                'passwordNewConfirm' => 'required|same:passwordNew',
            ], [
                'passwordNew.required'              => 'La nueva contraseña es obligatoria',
                'passwordNew.min'                   => 'La contraseña tiene que tener al menos 6 caracteres',
                'passwordNewConfirm.required'       => 'La contraseña de confirmación es obligatoria',
                'passwordNewConfirm.same'           => 'La contraseña de confirmación tiene que ser igual a la nueva contraseña',
            ]);

            $data['password'] = bcrypt($data['passwordNewConfirm']);

            Auth::user()->update($data);

            // Añadimos registro de log
            Log::addLog('Usuario actualiza datos => ' . json_encode($data));

            return $this->doLogout();
        } else {
            return redirect()->route('profile.index');
        }
    }

    public function doLogout() {
        Auth::logout();
        return redirect()->route('welcome.index');
    }
}
