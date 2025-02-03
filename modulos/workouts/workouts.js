document.addEventListener("DOMContentLoaded", function () {
    fetch("../../backend/api/api_workouts.php")
        .then(response => response.json())
        .then(data => {
            let container = document.querySelector("#infoWorkouts");
            container.innerHTML = "";
            data.forEach(workout => {
                let section = document.createElement("div");
                section.innerHTML = `
                    <h3>${workout.titulo}</h3>
                    <p>${workout.descripcion}</p>
                    <strong>Duración: ${workout.duracion}</strong>
                    <img src="${workout.imagen}" alt="${workout.titulo}">
                `;
                container.appendChild(section);
            });
        })
        .catch(error => console.error("Error al cargar la información:", error));
});
