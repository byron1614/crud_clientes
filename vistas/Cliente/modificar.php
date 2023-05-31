<?php
require '../../modelos/Cliente.php';
    try {
        $Cliente = new Cliente($_GET);

        $Cliente = $Cliente->buscar();
        // echo "<pre>";
        // var_dump($Clientes[0]['CLIENTE_ID']);
        // echo "</pre>";
        // exit;
        // $error = "NO se guardó correctamente";
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar Cliente</h1>
        <div class="row justify-content-center">
            <form action="/crud_Cliente/controladores/Cliente/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="producto_id" value="<?= $Cliente[0]['CLIENTE_ID'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_nombre">Nombre del Cliente</label>
                        <input type="text" name="cliente_nombre" id="cliente_id" class="form-control" value="<?= $cliente[0]['CLIENTE_NOMBRE'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cliente_id">Nit del Cliente</label>
                        <input type="number" step="0.01" min="0" name="cliente_nit" id="cliente_nit" class="form-control" value="<?= $cliente[0]['CLIENTE_NIT'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>