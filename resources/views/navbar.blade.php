<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand"  href="/main_page">
        <img src="{{ asset('assets/logo.jpg') }}" width="240" height="80" alt="logo">
    </a>
    <a class="nav-link" href="/team_profile" style="margin-left: 980px;">Team Profile</a>
    <a class="nav-link" href="/credits">Credits</a>
    <ul class="navbar-nav ms-auto">
    @auth
    <li>
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="dropdown-item" style="color: white;">Logout</button>
    </form>
    </li>
    @else
    <a class="nav-link ml-auto" href="/login_user">Login</a>
    @endauth
    </ul>
</nav>