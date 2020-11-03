@include('layouts.admin.logo')

<ul class="metismenu" id="menu">
    <li>
        <div class="side_bar_top">
            <img src="{{ asset(''.Auth::user()->photo) }}" alt="profile pic">
            <h6>{{ Auth::user()->name }}</h6>
        </div>
    </li>
    <li>
        <a href="/admin">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Dashboard</div>
        </a>
    </li>

    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-account-box-o"></i></div>
            <div class="menu-title">User Management</div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_user_index') }}"><i class="zmdi zmdi-account-box-o"></i> All Users</a>
            </li>
        </ul>
    </li>

    <li>
        <a class="has-arrow" href="#">
            <div class="parent-icon"><i class="zmdi zmdi-globe"></i></div>
            <div class="menu-title">Website Management</div>
        </a>
        <ul class="">
            <li>
                <a class="has-arrow" href="#">
                    <div class="parent-icon"><i class="zmdi zmdi-home"></i></div>
                    <div class="menu-title">Home Page</div>
                </a>
                <ul class="">
                    <li>
                        <a href="{{ route('admin_about_us_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            Basic Informations
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_banner_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            Banner
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_short_about_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            Short About Me
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_descriptive_about_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            Descriptive About Me
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_area_of_practice_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            Area Of Practice
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin_faq_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_law_list_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            Law List
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_free_consultation_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            Free Consultation Requests
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_review_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            Reviews
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin_subscriber_index') }}">
                            <i class="zmdi zmdi-dot-circle-alt"></i>
                            Subscribers
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="zmdi zmdi-dot-circle-alt"></i>
                    Service Details
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="zmdi zmdi-dot-circle-alt"></i>
                    Team Lead
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="zmdi zmdi-dot-circle-alt"></i>
                    Our Privilege
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="zmdi zmdi-dot-circle-alt"></i>
                    Contact Messages
                </a>
            </li>
        </ul>
    </li>

    {{--
        <li>
            <a class="has-arrow" href="#">
                <div class="parent-icon"><i class="zmdi zmdi-reader"></i></div>
                <div class="menu-title">Dropdown</div>
            </a>
            <ul class="">
                <li>
                    <a href=""><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v1</a>
                </li>
                <li>
                    <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v2</a>
                    <ul class="">
                        <li>
                            <a href=""><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v1</a>
                        </li>
                        <li>
                            <a href="dashboard-eCommerce-v2.html"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v2</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
     --}}

    <li class="menu-label">Extra</li>
    <li>
        <a href="/" target="_blank">
            <div class="parent-icon"><i class="zmdi zmdi-globe"></i></div>
            <div class="menu-title">Visit Site</div>
        </a>
    </li>
    <li>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="parent-icon"><i class="zmdi zmdi-power-off"></i></div>
            <div class="menu-title">Logout</div>
        </a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</ul>
