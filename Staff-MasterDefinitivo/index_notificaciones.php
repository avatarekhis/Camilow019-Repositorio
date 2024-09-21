<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/index.css">
</head>
<body>
    <style>
        #dashboard{
            height: 126%;
            width: 25%;
        }
    </style>
    <div id="dashboard">
        <img src="IMG/Logo PNG.png" alt="" id="logo">
        <br><br><br>


        <a href="index_notificaciones.php" id="option-a"><img src="IMG/notificacion.png" alt="" id="icon"><span id="option">Notificaciones</span></a>
        <a href="index_formCalendario.php" id="option-a"><img src="IMG/calendario.png" alt="" id="icon"> <span id="option">Calendario</span></a>
        <a href="index_perfil.php" id="option-a"><img src="IMG/usuario.png" alt="" id="icon"> <span id="option">Perfil</span></a>
        <a href="" id="option-a"><img src="IMG/ajuste.png" alt="" id="icon"> <span id="option">Ajustes</span></a>
        <a href="logout.php" id="option-a"><img src="IMG/cerrar-sesion.png" alt="" id="icon"> <span id="option">Salir</span></a>
    </div>
<br><br>
        <div id="padre">
        
        <div id="hijo_ajuste">
            <div id="titulo_box"><span id="xd"><h1>Notificaciones</h1> </span><br><br><br></div>
        <div id="contenido_hijo"><br>
            <p><h3>Silenciar Notificaciones </h3>
                <select >
                    <option value="">-Por favor elige un plazo-</option>
                    <option value="">5min</option>
                    <option value="">10min</option>
                    <option value="">30min</option>
                    <option value="">1h</option>
                    <option value="">2h</option>
                    <option value="">1d</option>
                  </select>
            </p>

            <p></p>
            <p><b>Contacto de soporte:</b>  <a href="">ccamilovacero@gmail.com y zartafernandez2006@gmailcom</a></p><br>
       
            <form action="crearNoti.php">
                <input type="submit" value="Crear notificación">
            </form>
            
        </div>
        
        </div>

        
        
    
    
    </div>

</body>
</html>