const datosTramites = {
    mexico: {
        titulo: "Trámites para México 🇲🇽",
        items: [
            "Solicitud de admisión en línea para estudiantes internacionales.",
            "Pago de cuota SEVIS y trámite de Visa F-1 o M-1.",
            "Traducción y validación de certificado de bachillerato."
        ]
    },
    china: {
        titulo: "Trámites para China 🇨🇳",
        items: [
            "Examen oficial de suficiencia en inglés (TOEFL/IELTS).",
            "Demostración de fondos para el primer año de estudios.",
            "Validación de historial académico mediante agencias autorizadas."
        ]
    },
    vietnam: {
        titulo: "Trámites para Vietnam 🇻🇳",
        items: [
            "Registro SEVIS obligatorio previo a la cita consular.",
            "Entrevista de intención de estudio para la Visa de estudiante.",
            "Certificación oficial de grado de preparatoria vietnamita."
        ]
    },
    brasil: {
        titulo: "Trámites para Brasil 🇧🇷",
        items: [
            "Certificado de Conclusão do Ensino Médio apostillado.",
            "Seguro médico internacional requerido por la institución.",
            "Prueba de solvencia financiera mediante estados de cuenta bancarios."
        ]
    }
};

document.addEventListener("DOMContentLoaded", () => {
    const botones = document.querySelectorAll(".btn-pais");
    const visor = document.getElementById("contenido-dinamico");

    botones.forEach(btn => {
        btn.addEventListener("mouseenter", () => {
            const pais = btn.getAttribute("data-pais");
            const data = datosTramites[pais];

            visor.innerHTML = `
                <h2>${data.titulo}</h2>
                <ul class="lista-tramite">
                    ${data.items.map(i => `<li>${i}</li>`).join('')}
                </ul>
            `;
        });
    });
});