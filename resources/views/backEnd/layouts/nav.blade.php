<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-folder-open"></i> <span>Categorías</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Agregar Nueva Categoria</a></li>
                <li><a href="{{route('category.index')}}">Lista de Categorias </a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Productos</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Agregar nuevo producto</a></li>
                <li><a href="{{route('product.index')}}">Lista de Productos</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-certificate"></i> <span>Cupones</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Agregar nuevo cupon</a></li>
                <li><a href="{{route('coupon.index')}}">Lista de Cupones</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==5? ' active':''}}"> <a href="#"><i class="icon icon-user"></i> <span>Usuarios</span></a>
            <ul>
                <li><a href="{{url('/login_page')}}">Agregar nuevo usuario</a></li>
                <li><a href="{{route('users_admin.index')}}">Lista de usuarios</a></li>
            </ul>
        </li>

    </ul>
</div>
<!--sidebar-menu-->
