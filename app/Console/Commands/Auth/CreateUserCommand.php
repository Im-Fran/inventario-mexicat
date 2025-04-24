<?php

namespace App\Console\Commands\Auth;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUserCommand extends Command {
    protected $signature = 'auth:create-user';

    protected $description = 'Crea un nuevo usuario';

    public function handle(): void {
        $name = $this->ask('¿Cual es el nombre del usuario?');

        $email = $this->ask('¿Cual es el email del usuario?');
        $password = $this->secret('¿Cual es la contraseña del usuario?');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'email_verified_at' => now(),
        ]);

        $this->info("Usuario creado con éxito. (id: {$user->id})");
    }
}
