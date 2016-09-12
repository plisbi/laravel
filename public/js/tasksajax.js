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
        this.fetchTaskList();
    },

    methods: {
        fetchTaskList: function(){
            this.$http.get('api/tasks_ajax_data').then(
                function(ajaxtasks) {
                    this.list = ajaxtasks.data;
                    console.log(ajaxtasks.data);
                }
            ).bind(this);
// Code for referring an id
            // var resource = this.$resource('api/tasks{/id}');
            // resource.update({ id:5 },{ body:'Updated task body' }).then(
            //     (response) => {
            //         // this.list = response.data;
            //         console.log('hey');
            //         alert('hey');
            //     }
            // ).bind(this);

        },

        delete: function (ajaxtask) {
            this.list.$remove(ajaxtask);
        }
    }

});

new Vue({
    el:'#app-tasksajax'
});