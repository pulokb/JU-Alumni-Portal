<script>
    $(document).ready(function () {
            $('body').on('click', '.delete', function () {
                var dataTable = $('#data-table').DataTable();
                var id = $(this).data("id");
                if(confirm("Are You sure to delete !")){
                $.ajax({
                    type: 'DELETE',
                    url: "/rt-admin/{{$url}}/"+id,
                    success: function (data) {
                        dataTable.draw();
                    },
                    error: function (data) {
                    }
                });
                }
            });
        });
</script>