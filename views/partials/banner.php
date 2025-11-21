<?php
echo "<h1>$banner</h1>";
echo "<h1>Welcome, " . ($_SESSION['user']['email'] ?? 'Guest') . "!</h1>";