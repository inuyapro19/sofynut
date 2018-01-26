<table class="table table-responsive" id="informacions-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Telefono2</th>
        <th>Quienes Somos</th>
        <th>Direcion</th>
        <th>Facebook</th>
        <th>Twitter</th>
        <th>Instagram</th>
        <th>Mapa</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($informacions as $informacion)
        <tr>
            <td>{!! $informacion->nombre !!}</td>
            <td>{!! $informacion->email !!}</td>
            <td>{!! $informacion->telefono !!}</td>
            <td>{!! $informacion->telefono2 !!}</td>
            <td>{!! $informacion->quienes_somos !!}</td>
            <td>{!! $informacion->direcion !!}</td>
            <td>{!! $informacion->facebook !!}</td>
            <td>{!! $informacion->twitter !!}</td>
            <td>{!! $informacion->instagram !!}</td>
            <td>{!! $informacion->mapa !!}</td>
            <td>
                {!! Form::open(['route' => ['informacions.destroy', $informacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('informacions.show', [$informacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('informacions.edit', [$informacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>