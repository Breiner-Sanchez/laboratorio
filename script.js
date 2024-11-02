document.getElementById('generarPDF').addEventListener('click', function () {
    // Cargar el entorno de jsPDF
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Título del PDF
    doc.setFontSize(18);
    doc.text('Resultados de Laboratorio', 14, 22);
    
    // Añadir espacio
    doc.setFontSize(12);
    doc.text('Fecha de generación: ' + new Date().toLocaleDateString(), 14, 30);

    // Obtener los datos de la tabla
    let tabla = document.getElementById("resultadosTabla");
    let filas = tabla.querySelectorAll("tbody tr");

    // Configurar la tabla para el PDF
    let posicionY = 40; // Posición inicial de la tabla en Y

    filas.forEach((fila, index) => {
        let columnas = fila.querySelectorAll("td");
        let nombre = columnas[0].textContent;
        let documento = columnas[1].textContent;
        let prueba = columnas[2].textContent;
        let resultado = columnas[3].textContent;
        let fecha = columnas[4].textContent;

        // Añadir los datos al PDF
        doc.text(`${index + 1}. ${nombre} - ${documento} - ${prueba} - ${resultado} - ${fecha}`, 14, posicionY);
        posicionY += 10;
    });

    // Descargar el archivo PDF
    doc.save('
