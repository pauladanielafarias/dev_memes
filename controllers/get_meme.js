const axios = require('axios');
const cheerio = require("cheerio")

const url = 'https://programmerhumor.io/programming-memes';

const get_meme = async () => {
    const msgLocation = 'Controllers::get_meme::get_meme()'
    console.log('Getting meme...', msgLocation);
    try {
        const response = await axios({
            method: 'get',
            url: process.env.MEMES_URL || url,
        });

        const html = response.data;
        const $ = cheerio.load(html);
        const meme = $('.g1-frame-inner').find('img').attr('data-src');
        console.log(meme, msgLocation);
        return meme;

    }
    catch (error) {
        console.log(error, msgLocation);
    }   
}

module.exports = {
    get_meme
};
