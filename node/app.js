const express = require('express');
const dotenv = require('dotenv').config();
require('dotenv-expand').expand(dotenv)
const cors = require('cors'); 

const app = express();

app.use(cors());
app.use(express.json());

// use bootstrap
app.use(express.static("node_modules/bootstrap/dist/"));
app.use(express.static("public"));


app.use('/', require('./routes'));

const PORT = process.env.PORT || 8080;
app.listen(PORT, () => {
    console.log(`App ${process.env.npm_package_name} is running on port ${PORT}`);
});