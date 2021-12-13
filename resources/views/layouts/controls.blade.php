<div id="controls-block">
    @if (Route::has('login'))
        <div id="authorisation-block">
            <ul>
                @auth()
                    <li id="logout">Logout</li>
                    <li id="profile">Profile</li>
                @else
                    @if (Route::has('register'))
                        <li id="sign-in">Sign In</li>
                        <li>or</li>
                    @endif
                    <li id="login">Login</li>
                @endauth
            </ul>
        </div>
    @endif
    <div id="settings-block">Settings</div>
</div>
