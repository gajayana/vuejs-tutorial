/*global $, Vue*/
Vue.component('tasks', {
    template: '#tasks-template',
    
    data: function () {
        return {
            list : []
        };
    },
    
    created: function () {
        this.fetchTasklist();
    },
    
    methods : {
        
        fetchTasklist: function () {
            var resource = this.$resource('api/tasks/{id}');
            
            resource.get({}).then(function (response) {
                this.list = JSON.parse(response.data);
            });
        },
        
        deleteMy: function (task) {
            this.list.$remove(task);
        }
        
    }
});

new Vue({
    el: 'body'
});