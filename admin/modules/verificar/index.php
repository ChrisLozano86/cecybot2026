<?php
require_once '../../class/Registro.php';
include_once '../../assets/template/header.php';
$registros = Registro::recuperarTodos(); 
?>

<!-- Main content -->
    <div class="content" id="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col">
            
            <h2 class="text-center"> Escanea el QR de registro del equipo </h2>

            <img src="../../assets/img/qr-code.gif" alt="QR" class="img-fluid d-block mx-auto" style="width: 25%;">

           
            
              <?php
$status = $_GET['status'] ?? '';
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let status = "<?php echo $status; ?>";

    if (status === "ok") {
        Swal.fire({
            title: 'Registro exitoso',
            text: 'El equipo fue registrado correctamente',
            imageUrl: "../../assets/img/succsfully__registred.gif",
            imageWidth: 250,
            showConfirmButton: false,
            timer: 2000
        });
    }

    if (status === "duplicado") {
    Swal.fire({
        icon: "warning",
        title: "Registro duplicado",
        text: "Este QR ya fue escaneado previamente",
        imageUrl: "../../assets/img/warning.gif",
        imageWidth: 200,
        showConfirmButton: false,
        timer: 2200
    });
}

    if (status === "error") {
        Swal.fire({
            title: 'Error',
            text: 'El código QR no es válido o no se encuentra registrado',
            imageUrl: "../../assets/img/error.gif",
            imageWidth: 200,
            showConfirmButton: false,
            timer: 2500
           
        });
    }
});
</script>

   
            <form action="verificar_registro.php" method="post" id="formQR">

            
           
            <div class="form-group">
            <!-- <label for="titulo">Escanea el código QR <span class="text text-danger">*</span></label> -->
            <input  class="form-control" placeholder="Escanea el código QR" type="text" id="qrInput" name="qr" autofocus autocomplete="off">
            </div>

           
            </form>
            <p> Si el equipo no tiene QR, puedes verificarlo manualmente dando click en el siguiente botón: </p>
            <a href="search_qr.php" class="btn btn-primary"> Verficar equipo sin escanear QR </a>

         
<script>
const input = document.getElementById("qrInput");
const form = document.getElementById("formQR");

//Mantener foco siempre
window.addEventListener("load", () => input.focus());
document.addEventListener("click", () => setTimeout(() => input.focus(), 50));
window.addEventListener("focus", () => input.focus());

//Envío automático
input.addEventListener("input", function() {
    if (input.value.length > 0) {
        setTimeout(() => {
            procesarYEnviar();
        }, 100);
    }
});

function procesarYEnviar() {
    let valor = input.value.trim();

    try {
        //Si es URL válida
        let url = new URL(valor);
        let id = url.searchParams.get("id");

        if (id) {
            input.value = id; // solo deja el número
        }
    } catch (e) {
        //Si no es URL, intenta extraer número directo
        let match = valor.match(/\d+/);
        if (match) {
            input.value = match[0];
        }
    }

    input.blur();
    form.submit();
}
</script> 

              
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
include_once '../../assets/template/footer.php';
?>