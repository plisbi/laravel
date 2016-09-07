/**
 * Created by jvicente on 30/08/2016.
 */


var demo = new Vue({

    el: '#main-nav',

    data: {
        active: 'home',
        examples: ''
    },

    methods: {
        makeActive: function(item){
            //when a model is changed, the view will be automatically updated
            this.active = item;
        }
    }

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