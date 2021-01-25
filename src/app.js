import Vue from 'vue';
const axios = require('axios').default;
// https://flynn.boolean.careers/exercises/api/array/music
var app = new Vue (
    {
        el: '#app',
        data: {
            albums: [],
            genres: []
        },
        mounted: function() {
            self = this;
            axios.get('db.php')
            .then(function(response){
                self.albums = response.data;
                console.log(response.data);
                self.albums.forEach((element) => {
                    self.genres.push(element.genre);
                });
                console.log(self.genres);
            });
        },
        updated: function () {
            
           
        }
    }
);