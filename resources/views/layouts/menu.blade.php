<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>Sliders</span></a>
</li>

<li class="{{ Request::is('informacions*') ? 'active' : '' }}">
    <a href="{!! route('informacions.edit',1) !!}"><i class="fa fa-edit"></i><span>Informacions</span></a>
</li>

