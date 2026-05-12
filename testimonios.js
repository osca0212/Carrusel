const alumnos = [
    {
        img: "imgs/alumno1.jpg",
        nombre: "Sofía Méndez",
        uni: "EPCC",
        carrera: "Administración de Empresas",
        tiempo: "2 años",
        testimonio: "Recibir apoyo constante de mis profesores me motivó a dar lo mejor de mí en cada proyecto académico."
    },
    {
        img: "imgs/alumno2.jpg",
        nombre: "Comité Estudiantil",
        uni: "EPCC",
        carrera: "Artes Visuales y Cine",
        tiempo: "Evento Anual",
        testimonio: "La gala de cine fue la oportunidad perfecta para conectar con otros creativos y mostrar nuestro trabajo en la alfombra roja."
    },
    {
        img: "imgs/alumno3.jpg",
        nombre: "Elena Garay",
        uni: "EPCC",
        carrera: "Biología y Ciencias Ambientales",
        tiempo: "1 año",
        testimonio: "Las prácticas de campo y el estudio de la flora local me permitieron entender la importancia de la sustentabilidad en nuestra región."
    },
    {
        img: "imgs/alumno4.jpg",
        nombre: "Valeria Ortiz",
        uni: "EPCC",
        carrera: "Deportes y Recreación",
        tiempo: "3 años",
        testimonio: "Orgullosa de representar al equipo de Cross Country. Ser una 'All-Academic Team' requiere disciplina tanto en la pista como en el aula."
    }
];

document.addEventListener("DOMContentLoaded", () => {

    const tarjetas = document.querySelectorAll(".tarjeta-alumno");

    tarjetas.forEach((tarjeta, index) => {

        if(index === 0){
            tarjeta.classList.add("tarjeta-activa");
        }

        tarjeta.addEventListener("click", () => {

            tarjetas.forEach(t => t.classList.remove("tarjeta-activa"));

            tarjeta.classList.add("tarjeta-activa");

            const indexAlumno = tarjeta.getAttribute("data-index");

            mostrarAlumno(indexAlumno);
        });
    });
});

function mostrarAlumno(index) {

    const alumno = alumnos[index];

    const img = document.getElementById("imagen-grande");

    const info = document.getElementById("info-alumno");

    img.classList.add("fade-out");

    info.classList.add("fade-out");

    setTimeout(() => {

        img.src = alumno.img;

        info.innerHTML = `
            <h3>${alumno.nombre}</h3>

            <p><strong>Universidad:</strong> ${alumno.uni}</p>

            <p><strong>Carrera:</strong> ${alumno.carrera}</p>

            <p><strong>Tiempo:</strong> ${alumno.tiempo}</p>

            <p class="testimonio">${alumno.testimonio}</p>
        `;

        img.classList.remove("fade-out");

        info.classList.remove("fade-out");

        img.classList.add("fade-in");

        info.classList.add("fade-in");

        setTimeout(() => {

            img.classList.remove("fade-in");

            info.classList.remove("fade-in");

        }, 350);

    }, 250);
}