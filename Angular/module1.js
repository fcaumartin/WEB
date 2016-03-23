angular.module('todoApp', []).controller('TodoListController', function($scope, $http) {
    
    var todoList = this;
    
    todoList.clients = [
      {nom:'toto', prenom:"titi"},
      {nom:'riri', prenom:"fifi"},
    ];

    todoList.textBox = 'test';
 
    todoList.ajoute = function() {
      $scope.clients.push({nom: todoList.textBox, prenom:"654654"});
      //todoList.todoText = '';
    };
 
    todoList.chargeliste = function() {
      $http.get('/someUrl', config).then(function(data) { }, errorCallback);
      return ;
    };
 
    // todoList.archive = function() {
    //   var oldTodos = todoList.todos;
    //   todoList.todos = [];
    //   angular.forEach(oldTodos, function(todo) {
    //     if (!todo.done) todoList.todos.push(todo);
    //   });
    // };


  });