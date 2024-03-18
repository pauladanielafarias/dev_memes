const targetUrl = '/scripts/get_meme.php';

const get_meme = async () => {
    try {
        const response = await fetch(targetUrl);
        const html = await response.text();

        // Crear un nuevo DOMParser para analizar el HTML
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');

        // Obtener la img
        const img = doc.querySelector('.g1-frame-inner img');

        if (img) {

            // Crear un nuevo elemento <img> y establecer su atributo src
            const imgElement = document.createElement('img');
            imgElement.src = img.getAttribute('data-src');
            imgElement.alt = img.getAttribute('alt');
            imgElement.width = img.getAttribute('width');
            imgElement.height = img.getAttribute('height');
            
            // Agregar la imagen al cuerpo del documento
            document.body.innerHTML = imgElement.outerHTML;

        } else {
            console.error('No se encontró la etiqueta en el HTML recibido.');
        }
    } catch (error) {
        console.error(error);
    }
}

get_meme();
