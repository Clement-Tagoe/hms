<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;


class CreateUser extends Component
{
    public string $name = '';

    public string $email = '';

    public string $contact = '';

    public $role_id;

    public string $password = '';

    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'contact' => ['string'],
            'role_id' => ['required'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered((User::create($validated))));

        Session::flash('success_message', 'User created successfully!');

        $this->redirectRoute('admin.users', absolute: false, navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.create-user');
    }
}
