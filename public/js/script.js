$(function () {
    $(".addModalButton").on("click", function () {
        $("#judulModal").html("Task Form");
        $(".modal-footer button").html("Add Task");

        $('#id').val('');
        $("#title").val('');
        $("#description").val('');
        $("#status").val('Pending');

    });

    $(".showEditModal").on("click", function () {
        $("#judulModal").html("Edit Task");
        $(".modal-footer button").html("Save");
        $('.modal-body form').attr('action', 'http://localhost/metrocom/taskmanager/public/task/edit');

        const id = $(this).data("id");

        $.ajax({
            url: "http://localhost/metrocom/taskmanager/public/task/getchange",
            data: { id: id },
            method: "post",
            dataType: "json",
            success: function (data) {
                $("#title").val(data.title);
                $("#description").val(data.description);
                $("#status").val(data.status);
                $("#id").val(data.id);
            },
        });
    });
});
