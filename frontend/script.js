
console.log("Hola")

// Hacemos la petición fetch al archivo backend.php para obtener las entradas del blog
fetch('../backend/backend.php')
    .then(response => {
        console.log('Respuesta recibida');  // Verificamos que la respuesta haya sido recibida
        return response.json();  // Procesamos la respuesta como JSON
    })
    .then(data => {
        console.log('Datos recibidos:', data);  // Mostramos los datos recibidos en consola

        const blogContainer = document.getElementById('blog-posts');  // Obtenemos el contenedor donde insertaremos las entradas

        // Verificamos si encontramos el contenedor de blog correctamente
        if (blogContainer) {
            console.log('Contenedor encontrado:', blogContainer);
        } else {
            console.log('Contenedor #blog-posts no encontrado');
            return;  // Si no encontramos el contenedor, detenemos la ejecución
        }

        // Comprobamos si tenemos datos recibidos
        if (data.length > 0) {
            data.forEach(post => {
                // Creamos un nuevo div para cada entrada de blog
                const postElement = document.createElement('div');
                postElement.classList.add('blog-post');  // Añadimos una clase para el estilo

                // Insertamos el título y contenido de la entrada de blog en el div
                postElement.innerHTML = `
                    <h3>${post.title}</h3>
                    <p>${post.content}</p>
                    <small>Publicado el: ${post.created_at}</small> <!-- Mostrar la fecha de publicación -->
                `;

                // Añadimos el nuevo div al contenedor de entradas de blog
                blogContainer.appendChild(postElement);
            });
        } else {
            console.log('No hay datos de blog para mostrar');
            blogContainer.innerHTML = "<p>No hay entradas disponibles.</p>";  // Mensaje si no hay entradas
        }
    })
    .catch(error => {
        console.error('Error:', error);  // En caso de error en la solicitud fetch
    });
