<?php
function AutenticarUser ($login, $passwd){
      $sql = mysqli_query(conn(),"SELECT * FROM usuario WHERE email = '$login' AND senha ='$passwd' ");
        $num = mysqli_fetch_array($sql,MYSQLI_ASSOC);
        if ($num>=1) {
            return true;
            return $num['id'];
        }
}
function eADM($login, $passwd){        
        $sql = "SELECT * FROM usuario WHERE email = '$login' AND senha ='$passwd' and tipo ='Admin' ";
     $resultado = mysqli_query(conn(), $sql);
        $num = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
        if ($num['tipo'] == "Admin") {
            return true;
        }
}
?>