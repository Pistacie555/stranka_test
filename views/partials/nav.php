<body>
    <header class="banner">
        <button onclick="location.href='/moje_stranka/'" class="button-banner">Domů</button>
        <button onclick="location.href='/moje_stranka/notes'" class="button-banner">Notes</button>
        <?php if (isset($_SESSION['user'])): ?>
            <button onclick="location.href='/moje_stranka/logout'" class="button-banner">Logout</button>
        <?php else: ?>
            <button onclick="location.href='/moje_stranka/register'" class="button-banner">Register</button>
        <?php endif; ?>
    </header>