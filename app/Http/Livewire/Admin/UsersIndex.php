<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;
    protected $paginationTheme="bootstrap";
    public function render()
    {

        $Users =User::Paginate(); 
        return view('livewire.admin.users-index');
        //return view('livewire.admin.users-index', compact('users'));
    } 
}
