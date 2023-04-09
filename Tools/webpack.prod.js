const { merge } = require('webpack-merge');

const base = require('./webpack/base');
const handlebars = require('./webpack/handlebars.js');
const typescript = require('./webpack/typescript');
const scss = require('./webpack/scss');

module.exports = merge(base, handlebars, typescript, scss, {
  mode: "production",
});