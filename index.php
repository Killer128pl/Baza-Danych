<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<script src="script/login.js"></script>

    <article>
        <button class="" id="serwer" onClick="logowanieSerwer();">SERWER</button>
        <button class="niewybranyForm" id="bazaDanych" onClick="logowanieBazaDanych();">BAZA DANYCH</button>
            <div>

            <form action="connectServer.php" method="POST" id="formularz">

                <p>Nazwa serwera:</p><p> <input type="text" name="hostname"></p>
                <p>Nazwa użytkownika:</p><p> <input type="text" name="username"></p>
                <p>Hasło:</p><p> <input type="text" name="password"></p>
                <span id="bazaDanychInput"><p>Nazwa bazy danych:</p><p> <input type="text" id="dbname" name="dbname"></p></span>
                <p><input type="submit" value="Połącz"></p>

            </form>

            <div>

</article>

    <footer>
        <p>Piotr Gała 2023 © Wszelkie prawa zastrzeżone.</p>
    </footer>

    <span id="source">Image by <a href="https://www.freepik.com/free-vector/gradient-geometric-shapes-dark-background-design_6764499.htm#query=wallpaper%20design&position=4&from_view=keyword">Freepik</a></span>
   
</body>
</html>