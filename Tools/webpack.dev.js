const { merge } = require('webpack-merge');
const path = require("path");


const base = require('./webpack/base');
const handlebars = require('./webpack/handlebars.js');
const typescript = require('./webpack/typescript');
const scss = require('./webpack/scss');

module.exports = merge(base, handlebars, typescript, scss, {
  mode: "development",
  devServer: {
    static: [
      {
        directory: path.join(__dirname, '../Resources/Public/MarkUp/'),
        publicPath: '/',
      },
      {
        directory: path.join(__dirname, '../Resources/Public/StyleSheets/'),
        publicPath: '/StyleSheets',
      },
      {
        directory: path.join(__dirname, '../Resources/Public/JavaScripts/'),
        publicPath: '/JavaScripts',
      },
    ],
    compress: false,
    liveReload: true,
    open: true,
  },
});