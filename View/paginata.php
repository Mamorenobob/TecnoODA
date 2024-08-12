<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="Stylesheet" href="../Model/Css/Fondo1.css">
    <title>Document</title>
    <style>
body{
    background-image: url(../Images/Fondo1-bell.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}

        #logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100px; /* Ajusta el tamaño de la imagen */
        }

        #formContainer {
            position: relative;
            width: 600px;
            background-color: #f1f1f1;
            border: 3px solid #110e0e;
            padding: 20px;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
            opacity: 0;
            visibility: hidden;
            text-align: center;
            border-radius: 10px;
            z-index: 10; /* Asegura que esté sobre la tabla */
            top: 50px;
            left:650px;
        }

        #formContainer.open, #editFormContainer.open {
            opacity: 1;
            visibility: visible;
        }
        #editFormContainer{    position: relative;
            width: 600px;
            background-color: #f1f1f1;
            border: 3px solid #110e0e;
            padding: 20px;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
            opacity: 0;
            visibility: hidden;
            text-align: center;
            border-radius: 10px;
            z-index: 10; /* Asegura que esté sobre la tabla */
            top: -700px;
            left:650px;

        }

  

        button {
            margin-bottom: 10px;
            padding: 10px 20px;
            background: linear-gradient(to bottom, #ffffff, #ccc);
            color: rgb(0, 0, 0);
            border-radius: 20px;
            cursor: pointer;
            border: 5px solid #0217d6;
        }

        button:hover {
            background-color: #000000;
        }

        .form-control {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 4px solid #000000;
            border-radius: 4px;
        }

        .w-25 {
            width: 25%;
        }

        h1 {
            font-family: 'Times New Roman', Times, serif;
            color: rgb(0, 0, 0);
        }

        /* Estilos para el botón "Volver al Inicio" */
        #backButton {
            position: absolute;
            top: 10px;
            right: 20px;
            color: #000000;
            background: linear-gradient(to bottom, #ffffff, #ccc);
            border: 5px solid #0217d6;
            border-radius: 20px;
            width: 10%;
        }

        img {
            border: 3px solid #1e1596;
            display: block;
            width: 7%;
            border: 3px solid #1100ff;
            border-radius: 20px;
            position: absolute;
            top: 800px;
            left: 10px;
        }

        table {
            position: absolute;
            display: block;
            top: 150px;
            left: 40px;
            z-index: 1; /* Asegura que esté detrás del formulario */
            opacity: 0.8; /* Ajusta la opacidad si quieres que sea más tenue */
        }
    </style>
</head>
<body>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Valor</th>
                <th>Ubicación</th>
                <th>Fecha</th>
                <th>Marca</th>
                <th>Código de Barras</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
    </table>
    
    <img src="../Images/images.jfif">
    <button href="../TecnoODA/View/index.php" type="button" class="btn btn-outline-light" id="backButton" onclick="window.location.href='paginaInicio.php';">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
        </svg>
        Volver
    </button>
    
    <button id="toggleButton">Mostrar Formulario</button>

    <!-- Formulario para agregar productos -->
    <center>
        <div id="formContainer">
            <center>
                <form action="../View/InsertarProductos.php" method="POST">
                    <h1>Registro de Productos</h1>
                    <input type="text" id="nombre" placeholder="Nombre" class="form-control w-25">
                    <input type="number" id="cantidad" placeholder="Cantidad" class="form-control w-25">
                    <input type="text" id="proveedor" placeholder="Proveedor" class="form-control w-25">
                    <input type="number" id="valor" placeholder="Valor" class="form-control w-25">
                    <input type="text" id="ubicacion" placeholder="Ubicación" class="form-control w-25">
                    <input type="date" id="fecha" placeholder="Fecha" class="form-control w-25">
                    <input type="text" id="marca" placeholder="Marca" class="form-control w-25">
                    <input type="number" id="codigo_barras" placeholder="Código de barras" class="form-control w-25">
                    <input type="text" id="descripcion" placeholder="Descripción" class="form-control w-25">
                    
                    <input type="submit" name="accion" value="Agregar Producto">
                   
                    <button type="button" id="closeButton">Cerrar</button>
                    
                </form>
            </center>
        </div>
    </center>

    <!-- Formulario para editar productos -->
    <center>
        <div id="editFormContainer">
            <center>
                <form action="../View/InsertarProductos.php" method="POST">
                    <h1>Editar Producto</h1>
                    <input type="text" id="edit_nombre" placeholder="Nombre" class="form-control w-25">
                    <input type="number" id="edit_cantidad" placeholder="Cantidad" class="form-control w-25">
                    <input type="text" id="edit_proveedor" placeholder="Proveedor" class="form-control w-25">
                    <input type="number" id="edit_valor" placeholder="Valor" class="form-control w-25">
                    <input type="text" id="edit_ubicacion" placeholder="Ubicación" class="form-control w-25">
                    <input type="date" id="edit_fecha" placeholder="Fecha" class="form-control w-25">
                    <input type="text" id="edit_marca" placeholder="Marca" class="form-control w-25">
                    <input type="number" id="edit_codigo_barras" placeholder="Código de barras" class="form-control w-25">
                    <input type="text" id="edit_descripcion" placeholder="Descripción" class="form-control w-25">
                    
                    <input type="submit" name="accion" value="Actualizar Producto">
                   
                    <button type="button" id="closeEditButton">Cerrar</button>
                    
                </form>
            </center>
        </div>
    </center>

    <script>
            function deleteRow(button) {
                const row = button.parentNode.parentNode;
                row.parentNode.removeChild(row);
                alert('Producto eliminado correctamente.');
            }



        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.getElementById('toggleButton');
            const formContainer = document.getElementById('formContainer');
            const closeButton = document.getElementById('closeButton');
            const editFormContainer = document.getElementById('editFormContainer');
            const closeEditButton = document.getElementById('closeEditButton');

            toggleButton.addEventListener('click', () => {
                if (formContainer.classList.contains('open')) {
                    formContainer.classList.remove('open');
                    toggleButton.textContent = 'Mostrar Formulario';
                } else {
                    formContainer.classList.add('open');
                    toggleButton.textContent = 'Ocultar Formulario';
                }
            });

            closeButton.addEventListener('click', () => {
                formContainer.classList.remove('open');
                toggleButton.textContent = 'Mostrar Formulario';
            });

            closeEditButton.addEventListener('click', () => {
                editFormContainer.classList.remove('open');
            });
        });

        function openEditForm(nombre, cantidad, proveedor, valor, ubicacion, fecha, marca, codigo, codigo_barras, descripcion) {
            document.getElementById('edit_nombre').value = nombre;
            document.getElementById('edit_cantidad').value = cantidad;
            document.getElementById('edit_proveedor').value = proveedor;
            document.getElementById('edit_valor').value = valor;
            document.getElementById('edit_ubicacion').value = ubicacion;
            document.getElementById('edit_fecha').value = fecha;
            document.getElementById('edit_marca').value = marca;
            document.getElementById('edit_codigo').value = codigo;
            document.getElementById('edit_codigo_barras').value = codigo_barras;
            document.getElementById('edit_descripcion').value = descripcion;

            document.getElementById('editFormContainer').classList.add('open');
        }
        
    </script>
</body>
</html>