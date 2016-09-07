/**
 * Created by jvicente on 30/08/2016.
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
    el:'body'
});


/*
//    ------> tasks

Vue.component('tasks',{

    template:'#tasks-template',

    props: ['list'],

    created: function() {
        $.getJSON('vue/tasks_ajax',function (data) {
            console.log(data);
        })
    }

});


new Vue({
    el:'body'
});


//    ------> lessons

Vue.component('lss-tasks', {

    props: ['list'],

    template: '#task-template',

    computed: {
        remaining: function(){
            var vm = this;
            return this.list.filter(this.inProgress).length;
        }
    },

    methods:{
        isCompleted: function (task) {
            return task.completed;
        },

        inProgress: function (task) {
            return ! this.isCompleted(task);
        },

        deleteTask: function (task) {
            this.list.$remove(task);
        },

        clearCompleted: function () {
            this.list = this.list.filter(this.inProgress);
        }

    }

});

new Vue({
    el: '#app',
    data: {
        tasks: [
            {body: 'Do first exercise', completed: false},
            {body: 'Do second exercise', completed: false},
            {body: 'Do third exercise', completed: true}
        ]
    }


});

*/