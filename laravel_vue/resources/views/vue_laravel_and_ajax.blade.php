<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vue, Laravel, and AJAX</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
</head>
<body>
    <div class="container">
        <tasks></tasks>
    </div>
    
    <template id="tasks-template">
        <h1>My Tasks</h1>
        <ul class="list-group">
            <li class="list-group-item" v-for="task in list">
                @{{ task.body }}
                <strong @click="deleteMy(task)">X</strong>
            </li>
        </ul>
    </template>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.9.3/vue-resource.min.js"></script>
    <script type="text/javascript" src="{{ secure_asset('js/vue_laravel_and_ajax.js') }}"></script>
</body>
</html>