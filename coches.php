<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>STUCAR</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="STUCAR.html">STUCAR</a>
            </div>
            <nav id="nav">
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio ">
        <div class="contenido-banner-tablas tablas">
            <h1>TABLA COCHES</h1>
	<table>
		<tr>
			<th>id_coches</th>
			<th>marca</th>
			<th>modelo</th>
			<th>fecha</th>
			<th>CV</th>
			<th>cambio</th>
			<th>vendido</th>
			<th>clientes</th>
			<th>precio</th>
		</tr>

		<?php
		// Conexión a la base de datos
		$localhost = "localhost";
		$username = "root";
		$password = "";
		$dbname = "stucar";
		$conn = new mysqli($localhost, $username, $password, $dbname);

		// Comprobación de la conexión
		if ($conn->connect_error) {
			die("Conexión fallida: " . $conn->connect_error);
		}

		// Selección de los datos de la tabla "compis"
		$sql = "SELECT * FROM coches";
		$result = $conn->query($sql);

		// Bucle for para mostrar los datos en una tabla
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["id_coches"] . "</td>";
				echo "<td>" . $row["marca"] . "</td>";
				echo "<td>" . $row["modelo"] . "</td>";
				echo "<td>" . $row["fecha"] . "</td>";
				echo "<td>" . $row["CV"] . "</td>";
				echo "<td>" . $row["cambio"] . "</td>";
				echo "<td>" . $row["vendido"] . "</td>";
				echo "<td>" . $row["clientes"] . "</td>";
				echo "<td>" . $row["precio"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 resultados";
		}

		$conn->close();
		?>

	</table></h1>


        </div>
    </section>

</body>
</html>

