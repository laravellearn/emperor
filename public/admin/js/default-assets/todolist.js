(function () {
    "use strict";

    function addTodoItem() {
        var todoItem = $("#new-todo-item").val();
        $("#ecapsToDo-list").append("<li><label class='ckbox'><input type='checkbox'" +
            " name='todo-item-done'" +
            " class='todo-item-done'" +
            " value='" + todoItem + "' /><span></span></label>" +
            todoItem +
            " <i class='todo-item-delete ti-close'>" +
            "</i></li>");
        $("#new-todo-item").val("");
    }

    function deleteTodoItem(e, item) {
        e.preventDefault();
        $(item).parent().fadeOut('100', function () {
            $(item).parent().remove();
        });
    }

    function completeTodoItem() {
        $(this).parentsUntil("#ecapsToDo-list").toggleClass("todo-completed animated fadeIn");
    }

    $(function () {
        $("#add-todo-item").on('click', function (e) {
            e.preventDefault();
            addTodoItem()
        });

        $("#ecapsToDo-list").on('click', '.todo-item-delete', function (e) {
            var item = this;
            deleteTodoItem(e, item)
        })

        $(document).on('click', ".todo-item-done", completeTodoItem)
    });
    
})();