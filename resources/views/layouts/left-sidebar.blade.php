<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Main</span>
{{--                {{request()->problem->where('key', 'left-sidebar-main-title')->value('english')}}--}}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">
{{--                    @if(Request::path() === 'your url here')--}}
{{--                        // code--}}
{{--                    @endif--}}
{{--                    {{$Translates->where('key','main_sidebar_menu_all_problems')->first()->arabic}}--}}
                    {{trans('messages.main_sidebar_menu_all_problems')}}
                </span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/{{app()->getLocale()}}/problem/all">{{__('messages.all_problems')}}</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/{{app()->getLocale()}}/problem/new">{{__('messages.add_new_problem')}}</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/{{app()->getLocale()}}/problem/tickets">{{__('messages.my_tickets')}}</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
