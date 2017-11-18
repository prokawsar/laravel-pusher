
require('./bootstrap');

window.Vue = require('vue');

Vue.component('component', require('./components/Component.vue'));

const app = new Vue({
    el: '#app',

    data:{
        message: '',
        chat:{
            message: []
        }
    },
    methods: {
        send(){
            if(this.message === "clear"){ //clearing messages just for comfort
                this.chat.message = []
                this.message = ''
                return
            }

            if(this.message != 0){
                this.chat.message.push(this.message);
                this.message = ''
            }
            
        }
    }
});
