<div>

    @foreach($usuarios as $usuario)
    <tr>
        <td>
            <div class="d-flex px-2 py-1">
                <div>
                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <h6 class="mb-0 text-sm">{{ $usuario->usu_alias}}</h6>
                    <p class="text-xs text-secondary mb-0">{{ $usuario->usu_correo}}</p>
                </div>
            </div>
        </td>
        <td>
            <p class="text-xs font-weight-bold mb-0">{{ $usuario->usu_rol}}</p>
            
        </td>
        <td class="align-middle text-center text-sm">
            <span class="badge badge-sm bg-gradient-success">{{ $usuario->usu_tp_doc}}</span>
        </td>
        <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">{{ $usuario->usu_num_doc}}</span>
        </td>
        <td class="align-middle">
            <a href="javascript:;" class="badge badge-sm bg-gradient-info" data-toggle="tooltip" data-original-title="Edit user">
                Editar
            </a>
            <a href="javascript:;" class="badge badge-sm bg-gradient-danger" data-toggle="tooltip" data-original-title="Edit user">
                Eliminar
            </a>
        </td>
    </tr>
    @endforeach

</div>