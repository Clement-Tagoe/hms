<?php

namespace App\Livewire\Admin;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    
    public $search = '';
    public $role;

    protected $queryString = [
        'role',
        'search' => ['except' => '']
    ];
    
    public function mount()
    {
        $this->role = request()->role ?? "All Roles";
    }

    public function render()
    {
        $roles = Role::all();
        
        return view('livewire.admin.users-index', [
           'users' => User::with('role')
                ->when($this->role && $this->role !== "All Roles", function ($query) use ($roles) {
                    return $query->where('role_id', $roles->pluck('id', 'name')->get($this->role));
                })
                ->when(strlen($this->search) >= 3, function ($query) {
                    return $query->where('name', 'like', '%' . $this->search . '%');
                })
                ->latest()
                ->paginate(10),
            'roles' => $roles,
        ]);

    }
}
