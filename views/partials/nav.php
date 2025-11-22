<body>
    <header class="banner">
        <button onclick="location.href='/moje_stranka/'" class="button-banner">Domů</button>
        <?php if (isset($_SESSION['user'])): ?>

            <button onclick="location.href='/moje_stranka/notes'" class="button-banner">Notes</button>
            <form method="POST" action="/moje_stranka/session" style="display: inline;">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="button-banner">Logout</button>
            </form>
        <?php else: ?>
            <button onclick="location.href='/moje_stranka/register'" class="button-banner">Register</button>
            <button onclick="location.href='/moje_stranka/login'" class="button-banner">Login</button>
        <?php endif; ?>

    </header>