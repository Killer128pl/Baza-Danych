<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<script src="script/records.js"></script>
<script src="script/logout.js"></script>

    <header>
        <button id="logout" onClick="logout();"><img id="turnoff" src="img/turn-off.png"><span id="logout-napis">Wyloguj Się</span></button>
    </header>

    <article>
        <button class="" id="dodawanie" onClick="dodawanieRekordow();">DODAJ</button>
        <button class="niewybranyForm" id="usuwanie" onClick="usuwanieRekordow();">USUŃ</button>
            <div>

            <form action="addRecord.php" method="POST" id="formularz">

            <section id="inputyDodawania"><p><br></p>
            <?php

                session_start();
                $hostname = $_SESSION['hostname'];
                $username = $_SESSION['username'];
                $password = $_SESSION['password'];
                $dbname = $_SESSION['dbname'];

                $conn = mysqli_connect($hostname, $username, $password, $dbname);

                $selected = $_POST['usunTabele'];
                $_SESSION['tablename'] = $selected;

                $sql = "SHOW COLUMNS FROM " . $selected;

                $nazwyKolumn = mysqli_query($conn, $sql);

                $i=0;
                while($result = mysqli_fetch_assoc($nazwyKolumn)){
                    $tablica[$i] = $result['Field'];
                    echo '<input class="kolumnyTabel" type="text" readonly value="' . $tablica[$i] . '">';
                    if($i==0){
                    echo '<input class="kolumnyTabel" type="text" readonly placeholder="ID" name="kolumna'.$i.'"><br>';
                    }
                    else{
                    echo '<input class="kolumnyTabel" type="text" name="kolumna'.$i.'"><br>';  
                    }
                    $i = $i+1;
                }
                $_SESSION['columnNumber'] = $i;

                ?>

                <p><br></p>

            

            </section>
            <section id="inputyUsuwania"><p><br></p>

                    <?php

                        $conn = mysqli_connect("localhost", "root", "", "dane2");

                        $sql = "SELECT * FROM grzyby";

                        $result = mysqli_query($conn, $sql);

                        $sql2 = "SHOW COLUMNS FROM grzyby";

                        $nazwyKolumn = mysqli_query($conn, $sql2);
                        echo "<select>";
                        echo '<option><b>';
                        $i=0;
                        while($wynik = mysqli_fetch_assoc($nazwyKolumn)){
                            $tablica[$i] = $wynik['Field'];
                            echo $wynik['Field']. ' | ';
                            $i = $i +1;
                        }
                        echo '</b></option>';
                        
                        
                        while($row = mysqli_fetch_assoc($result)){
                            $x=0;
                            echo "<option>";
                            while($x<$i){
                                echo $row[$tablica[$x]]. ' | ';

                                $x=$x+1;
                            }
                            
                            echo "</option>";
    
                        }
                        echo "</select>";

                        ?>
                        <p><br></p>

            </section>
            <p><input id="submitRekord" type="submit" value="Dodaj"></p>
            </form>

            <div>

    </article>

    <footer>
        <p>Piotr Gała 2023 © Wszelkie prawa zastrzeżone.</p>
    </footer>

    <span id="source">Image by <a href="https://www.freepik.com/free-vector/gradient-geometric-shapes-dark-background-design_6764499.htm#query=wallpaper%20design&position=4&from_view=keyword">Freepik</a></span>
   
</body>
</html>