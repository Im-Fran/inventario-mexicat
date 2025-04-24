<?php

namespace App\Console\Commands\Auth;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:change-password';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cambia la contraseña de un usuario';

    /**
     * Execute the console command.
     */
    public function handle(): void {
        $correos = User::pluck('email')->toArray();
        $email = $this->askWithCompletion('¿Cual es el correo del usuario?', $correos);

        $user = User::whereEmail($email)->first();
        if (!$user) {
            $this->error('No se encontró el usuario.');

            return;
        }

        $password = $this->secret('¿Cual es la nueva contraseña del usuario?');
        $user->update([
            'password' => Hash::make($password),
        ]);

        $this->info("Contraseña cambiada con éxito. (id: {$user->id})");
    }
}
