import Vue from 'vue';

var app = new Vue (
    {
        el: '#app',
        data: {
            prova: 'ciao'
        },
        mounted: function() {
            alert('ciao');
        }
    }
);