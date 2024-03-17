const { Router } = require('express');
const { get_meme } = require('../controllers/get_meme');

const router = Router();

router.get('/', async (req, res) => {

    res.send(
        'Welcome to the meme API! Use the /meme endpoint to get a random meme.'
    );
});


router.get('/meme', async (req, res) => {
    const meme = await get_meme();
    res.send(`<img src="${meme}" alt="meme">`);
});

module.exports = router;