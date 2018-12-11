require('./bootstrap');
window.Vue = require('vue');


import Vue from 'vue'
import Vuetify from 'vuetify'
import store from '~/store'
import router from '~/router'
import { i18n } from '~/plugins'
import App from '~/components/App'
import '~/components'

// Editor
import wysiwyg from "vue-wysiwyg"
Vue.use(wysiwyg, {
    image: {
        uploadURL: "/api/product/images/upload",
        dropzoneOptions: {}
    },
})
Vue.use(Vuetify)

Vue.config.productionTip = false



new Vue({
	el: '#app',
	i18n,
	store,
	router,
	...App
})
