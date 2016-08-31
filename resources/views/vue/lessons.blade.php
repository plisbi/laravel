@extends('layout_test')

@section('header')
    <title>Lessons</title>
    <style type="text/css">
        .completed { text-decoration: line-through; }
    </style>
@stop


@section('content')


    <div id="app" >
        <lss-tasks :list="tasks"></lss-tasks>

        <lss-tasks :list="[{body: 'first new thing', completed: false},
                            {body: 'second new thing', completed: false}]"
        >
        </lss-tasks>
    </div>

    <template id="task-template">
        <h2> My tasks
            <span v-show="remaining">(@{{ remaining }})</span>
        </h2>
        <ul v-show="list.length">
            <li v-for="task in list">
                <div :class="{ 'completed' : task.completed }"
                @click=" task.completed = ! task.completed "
                >
                    @{{ task.body }}
                </div>
                <strong @click="deleteTask(task)"
                >
                    x
                </strong>

            </li>
        </ul>
        <p v-else>
            No task yet!
        </p>

        <button @click="clearCompleted">Clear completed</button>
    </template>


@stop

@section('footer')
@stop
