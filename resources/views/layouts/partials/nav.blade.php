<div class="collapse bg-inverse" id="navbarHeader">
<div class="container">
<div class="row">
<div class="col-sm-8 py-4">
<h4 class="text-white">About</h4>
<p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
</div>
<div class="col-sm-4 py-4">
<h4 class="text-white">Contact</h4>
<ul class="list-unstyled">


<li><a href="/posts/" class="text-white">Posts</a></li>
<li><a href="/posts/create" class="text-white">create post</a></li>
<li><a href="/posts/update" class="text-white">update post</a></li>

</ul>
</div>
</div>
</div>
</div>
<div class="navbar navbar-inverse bg-inverse">
<div class="container d-flex justify-content-between">
<a href="#" class="navbar-brand">{{ config('app.name', 'Laravel') }}</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>


<!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>

</div>
</div>
