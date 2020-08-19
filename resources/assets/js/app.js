
/**
 * Chargement des dépendances
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Création de l'app
 */

import SingleItem from './components/SingleItem'
import Product from './components/Product'
import ProductFilter from './components/ProductFilter'
import NavCart from './components/NavCart'
import Cart from './components/Cart'
// import NavSearch from './components/NavSearch'
import ModalWrapper from './components/ModalWrapper'
import OrderInfo from './components/OrderInfo'

import moment from 'moment'

//bootstrap 3 plugin
import * as uiv from 'uiv'
Vue.use(uiv)
Vue.filter('formatDate', (value, format = false) => {
    console.table(value)
    if (value) {
        return moment(String(value)).format(format || 'MMMM/DD/YYYY hh:mm');
    }
    return value;
});
const app = new Vue({
    el: '#app',
    components: {SingleItem, Product, ProductFilter, NavCart, Cart, OrderInfo, /*NavSearch, */ModalWrapper},
});
