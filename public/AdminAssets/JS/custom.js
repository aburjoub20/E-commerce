function deleteconfirm(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result) {
            $.ajax({
                url:'/admin/delete',
                METHOD:'DELETE',
                data:{'id':id},
                success:function(data){
                    console.log(data);
                    if(data.message=='success'){
                        $("#"+id).remove();
                        Swal.fire(
                            'Deleted!','This admin Deleted successfuly',
                            'success'
                        )
                    }
                },
                error:function(){
                    Swal.fire(
                        'error!','This admin was not found ',
                        'error'
                    )


                }
            })
        }
    });
}
