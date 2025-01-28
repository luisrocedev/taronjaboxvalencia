document.addEventListener('DOMContentLoaded', function () {
    fetch('api_destacados.php')
        .then(response => response.json())
        .then(data => {
            const destacadosContainer = document.getElementById('destacados-container');
            data.forEach(item => {
                const destacado = document.createElement('div');
                destacado.className = 'destacado';
                destacado.innerHTML = `
                    <h2>${item.titulo}</h2>
                    <p>${item.descripcion}</p>
                `;
                destacadosContainer.appendChild(destacado);
            });
        })
        .catch(error => console.error('Error:', error));
});