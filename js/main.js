const { createApp } = Vue;


const app = createApp({
   // data: function () {}
   data() {
      // la funzione data deve SEMPRE ritornare un oggetto
      return {
         contenitoreTodo: [],
         contenitoreTask: {},
      };
   },
   methods: {
      alClick() {
         axios.post("api/creaTask.php", this.contenitoreTask, {
            headers: { "Content-Type": "multipart/form-data" },
         }).then((resp) => {
            this.fetchData();
         });
      },
      fetchData() {
         axios.get("api/task.php").then((resp) => {
            this.contenitoreTodo = resp.data;
         })
      }
   },

   beforeMount() {
   },

}).mount("#app")