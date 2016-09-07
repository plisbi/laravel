/**
 * Created by jvicente on 08/09/2016.
 */


//    ------> tasks


Vue.component('tasksajax',{

    template:'#tasks-ajax-template',

    data: function(){
        return{
            list: []
        }
    },

    created: function() {
        this.fechTaskList();
    },

    methods: {
        fechTaskList: function(){

            this.$http.get( 'api/tasks_ajax_data', function(ajaxtasks) {
                console.log(ajaxtasks);
            });

            // with jquery
            // $.getJSON('api/tasks_ajax_data', function(ajaxtasks){
            //     this.list = ajaxtasks;
            // }.bind(this));
        },

        delete: function (ajaxtask) {
            this.list.$remove(ajaxtask);
        }
    }

});

new Vue({
    el:'#app-tasksajax'
});