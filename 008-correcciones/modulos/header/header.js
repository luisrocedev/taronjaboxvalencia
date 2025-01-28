document.addEventListener('DOMContentLoaded', function () {
    fetch('api_header.php')
        .then(response => response.json())
        .then(data => {
            const header = document.querySelector('header');
            header.innerHTML = `
                <div class="logo">
                    <img src="${data.logo_url}" alt="Logo">
                    <h1>${data.titulo}</h1>
                </div>
                <nav>
                    <ul>
                        ${JSON.parse(data.menu).map(item => `
                            <li><a href="${item.url}">${item.texto}</a></li>
                        `).join('')}
                    </ul>
                </nav>
            `;
        })
        .catch(error => console.error('Error:', error));
});