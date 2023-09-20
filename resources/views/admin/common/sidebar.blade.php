<aside class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                @php
                    $t1 = 0;
                    $t2 = 0;
                @endphp
                @foreach (Helper::getAdminMenu() as $m)
                    @php
                        $active = Helper::getCurrentUrlAdmin() == $m->route;
                    @endphp
                    @if ($m->menu_type == 1)
                        @if ($t1 == 0)
                            <li class="menu-title">
                                <span>Main menu</span>
                            </li>
                            @php
                                $t1++;
                            @endphp
                        @endif
                        <li>
                            <a href="/{{ $m->route }}" class="@if ($active == true) active @endif">
                                <span data-feather="{{ $m->icon }}" class="nav-icon"></span>
                                <span class="menu-text">{{ $m->name }}</span>
                            </a>
                        </li>
                    @else
                        @if ($t2 == 0)
                            <li class="menu-title m-top-30">
                                <span>Informasi Umum</span>
                            </li>
                            @php
                                $t2++;
                            @endphp
                        @endif
                        <li>
                            <a href="/{{ $m->route }}" class="@if ($active == true) active @endif">
                                <span data-feather="{{ $m->icon }}" class="nav-icon"></span>
                                <span class="menu-text">{{ $m->name }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</aside>
