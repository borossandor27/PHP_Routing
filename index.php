<?php
$menu = filter_input(INPUT_GET, "menu", FILTER_SANITIZE_STRING);
$_SESSION["login"] = true;
$_SESSION["jog"] = "fonok";
var_dump($menu);
require_once 'head.php';

            if($_SESSION["login"]){
                ?>
        <nav>
            <ul>
                <li><a href="index.php?menu=home">Home</a></li>
                <li><a href="index.php?menu=kapcsolat">Kapcsolat</a></li>
                <li><a href="index.php?menu=lista">Lista</a></li>
                <?php
                if($_SESSION["jog"] == "fonok"){
                    echo '<li><a href="index.php?menu=profil">Profil</a></li>';
                }
                ?>
                
            </ul>
        </nav>
        <div id="tartalom">
        <?php
        switch ($menu) {
            case "home":
                include 'home.php';
                break;
            case "kapcsolat":
                include 'kapcsolat.php';
                break;
            case "lista":
                include 'lista.php';
                break;
            case "profil":
                include 'profil.php';
                break;
            case "home":
                include 'home.php';
                break;

            default:
                include '404.php';
                break;
        }
        ?>            
        </div>
<?php
//-- lezárjuk a login részt
            } else {
                include 'login.php';
            }
?>
    </body>
</html>
