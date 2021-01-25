import Vue from 'vue';
const axios = require('axios').default;
// https://flynn.boolean.careers/exercises/api/array/music
var app = new Vue (
    {
        el: '#app',
        data: {
            albums: []
        },
        mounted: function() {
            self = this;
            axios.get('https://flynn.boolean.careers/exercises/api/array/music')
            .then(function(response){
                self.albums = response.data.response;
                console.log(self.albums);
            });
        }
    }
);