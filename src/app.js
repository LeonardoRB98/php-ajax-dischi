import Vue from 'vue';
const axios = require('axios').default;
// https://flynn.boolean.careers/exercises/api/array/music
var app = new Vue (
    {
        el: '#app',
        data: {
            prova: 'ciao'
        },
        mounted: function() {
            axios.get('https://flynn.boolean.careers/exercises/api/array/music')
            .then(function(response){
                console.log(response.data.response);
            });
        }
    }
);