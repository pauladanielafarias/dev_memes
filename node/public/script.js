const meme_url = fetch('http://localhost:8080/meme')
    .then(async response => {
        const img = await response.text();
        document.body.innerHTML = img;
    })
    .catch(console.error);
