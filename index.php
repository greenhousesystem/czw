<?php
// Treść ładowana z pliku tresc.txt – akapity oddzielone pustą linią
$tekst = file_get_contents(__DIR__ . '/tresc.txt');
$akapity = preg_split('/\R\s*\R/', trim($tekst));
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Staszic Ćwiczenie</title>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header id="naglowek"><?php include 'naglowek.html'; ?></header>
  <nav id="menu"><?php include 'menu.html'; ?></nav>
  <main id="tresc">
    <?php foreach ($akapity as $akapit): ?>
      <p><?= htmlspecialchars(trim($akapit)) ?></p>
    <?php endforeach; ?>
  </main>
  <footer id="stopka"><?php include 'stopka.html'; ?></footer>
</body>
</html>
