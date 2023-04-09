const webpackProd = require('../webpack.prod')
const webpackDev = require('../webpack.dev')

module.exports = {
    prod: Object.assign(webpackProd),
    dev: Object.assign({watch: true}, webpackDev)
}