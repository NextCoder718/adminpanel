<nav class="navbar navbar-expand-md  navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand mb-0 h1" href="admin.html">Bendeck Insurance</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.leads.index') }}">Leads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.producers.index') }}">Producers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.agents.index') }}">Leasing Agents</a>
                </li>
            </ul>
            <span class="navbar-text">
					<a href="{{ route('logout') }}" data-token="{{ csrf_token() }}" data-method="POST">Logout</a>
				</span>
        </div>
    </div>
</nav>