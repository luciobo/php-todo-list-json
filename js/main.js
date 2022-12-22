const { createApp } = Vue;


const app = createApp({
    // data: function () {}
    data() {
        // la funzione data deve SEMPRE ritornare un oggetto
        return {
            contenitoreTodo:[],
            contenitoreTask:{},
        };
    },
    methods: {

    },
    
    beforeMount() {
    },

}).mount("#app")