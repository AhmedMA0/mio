
<html>
   <head>
      <title>Document</title>
   </head>
   
   <body>
        <ul>
            <li><p><b>Nombre:</b>
                <%= String nombre = request.getParameter("name");%>
            </p></li>

            <li><p><b>Nombre:</b>
                <%= String apellido = request.getParameter("sur");%>
            </p></li>

            <li><p><b>Nombre:</b>
                <%= String apellido = request.getParameter("sur");%>
            </p></li>

            <li><p><b>Email:</b>
                <%= String email = request.getParameter("ema");%>
            </p></li>

            <li><p><b>Nombre de usuario:</b>
                <%= String user = request.getParameter("user");%>
            </p></li>

            <li><p><b>Contraseña:</b>
                <%= String passwd = request.getParameter("passwd");%>
            </p></li>
      </ul>
   
   </body>
</html>