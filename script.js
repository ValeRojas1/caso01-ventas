function calcular() {
    let cantidad = document.getElementById("cantidad").value;
    let precio = document.getElementById("precio").value;

    let total = cantidad * precio;

    document.getElementById("total").value = total.toFixed(2);

    alert("Total calculado: " + total.toFixed(2));
}

function guardar(event) {
    event.preventDefault();

    let cliente = document.getElementById("cliente").value;
    let producto = document.getElementById("producto").value;
    let cantidad = document.getElementById("cantidad").value;
    let precio = document.getElementById("precio").value;
    let total = document.getElementById("total").value;

    // Validación
    if (cantidad <= 0) {
        alert("La cantidad debe ser mayor a 0");
        return;
    }

    let datos = new FormData();
    datos.append("cliente", cliente);
    datos.append("producto", producto);
    datos.append("cantidad", cantidad);
    datos.append("precio", precio);
    datos.append("total", total);

    fetch("guardar.php", {
        method: "POST",
        body: datos
    })
    .then(response => response.text())
    .then(res => {
        if (res === "ok") {
            alert("Venta guardada correctamente");
        } else {
            alert("Error al guardar");
        }
    });
}