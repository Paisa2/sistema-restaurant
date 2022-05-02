
<div>
    <div class="card">
        <div class="card-header">
            <Input wire:model="search" class="form-control" placeholder="ingrese el nombre o correo de un usuario">
        </div>
        <div class="card body">
            <table class="table table-dark table-striped mt-4">
                <thead>

                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route('admin.users.edit',$user)}}">Editar</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$users ->links()}}
        </div>
    </div>
</div>
