<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('team.index') }}"><strong>NBA 2019</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('roster.index') }}">Roster</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('team.index') }}">Team</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('player.index') }}">Player Total</a></li>
            </ul>
        </div>
    </div>
</nav>
