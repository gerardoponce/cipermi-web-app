<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryIntf;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

use Livewire\Component;

class UserDatatable extends Component
{
    public $users, $dni, $nombre, $apellido, $email, $password, $selected_id;
    public $updateMode = false;

    private $userRepository;

    private function getRepository(): UserRepositoryIntf
    {
        return $this->userRepository = App::make(UserRepositoryIntf::class);
    }

    public function render()
    {
        $this->users = $this->getRepository()->all();
        return view('livewire.admin.user-datatable');
    }

    private function resetInput()
    {
        $this->dni = null;
        $this->nombre = null;
        $this->apellido = null;
        $this->email = null;
        $this->password = null;
    }

    public function store()
    {
        $this->validate([
            'dni' => 'required|min:8|max:8',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);
        
        User::create([
            'dni' => $this->dni,
            'nombre' => $this->nombre,
            'apellido' => $this->apellido,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = User::findOrFail($id);

        $this->selected_id = $id;
        $this->dni = $record->dni;
        $this->nombre = $record->nombre;
        $this->apellido = $record->apellido;
        $this->email = $record->email;
        $this->password = $record->password;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'dni' => 'required|min:5',
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'email' => 'required|email|max:255',
            //'password' => 'required|string|min:8'
        ]);

        if ($this->selected_id) {
            $record = User::find($this->selected_id);
            $record->update([
                'dni' => $this->dni,
                'nombre' => $this->nombre,
                'apellido' => $this->apellido,
                'email' => $this->email,
                'password' => $this->password,
            ]);

            $this->resetInput();
            
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = User::where('id', $id);
            
            $record->delete();
        }
    }
}
