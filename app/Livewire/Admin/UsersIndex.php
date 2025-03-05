<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UsersIndex extends Component
{
    public $search = '';
    
    public function render()
    {
        return view('livewire.admin.users-index')
                    ->with('users', User::all());
    }
}
