<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="{{route('dashboard')}}" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>


    <div class="navbar-nav align-items-center ms-auto">


        <div class="nav-item dropdown" >
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="dashboard/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0" >
                {{-- <a href="#" class="dropdown-item" >حسابي</a> --}}


                <x-dropdown-link class="dropdown-item" :href="route('profile.edit')">
                    {{ __('اعدادات الحساب') }}
                </x-dropdown-link>


                {{-- <a href="#" class="dropdown-item">الاعدادات</a> --}}
                
                
                <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        
                        <x-dropdown-link class="dropdown-item" :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('تسجيل الخروج') }}
                    </x-dropdown-link>
                </form>

            </div>
        </div>
    </div>
</nav>