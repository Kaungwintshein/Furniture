function delete_data(id,directUrl){
    var id = id;
    var directUrl = directUrl;

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to recover this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: directUrl,
                data: {
                    "deleteFromDb":id
                },
                success: function(data){
                    Swal.fire({
                        icon: "success",
                        title: "Delete Successfully",
                        timer: 2000,
                        showConfirmButton: false,
                    })
                    setTimeout(function(){
                        window.location.reload(1);
                    }, 2000);
                }
            })
        }else{
            Swal.fire({
                text: "Your data is Safe",
                showCloseButton: true,
            });
        }
    })
}

function update_data(id,directUrl){
    var directUrl = directUrl;
    var id = id

    // $.ajax({
    //     type: 'POST',
    //     url: directUrl,
    //     data: {
    //         "updateCategory":id
    //     },
    //     success: function(data){
    //         Swal.fire({
    //             icon: "success",
    //             title: "Delete Successfully",
    //             timer: 2000,
    //             showConfirmButton: false,
    //         })
    //         setTimeout(function(){
    //             window.location.reload(1);
    //         }, 2000);
    //     }
    // })
    // var update_product_name = $("#update_product_name").val();
    // var update_product_price = $("#update_product_price").val();
    // var update_product_type = $("#update_category_type").val();
    // var update_image = $("#update_image").val();
    // var update_description = $("#update_description").val();
    // var update_image = $("#update_image").val();
    
}

// function update_cat(){
//     var id = $("#update_category_id").val();
//     var category_name = $("#update_category_name").val();
//     console.log(category_name);
//     $.ajax({
//         type: 'POST',
//         url: "php/actions/categoryEdit.php",
//         data: {
//             "id":id,
//             "category_name":category_name,
//         },
//         success: function(data){
//             Swal.fire({
//                 icon: "success",
//                 title: "Delete Successfully",
//                 timer: 2000,
//                 showConfirmButton: false,
//             })
//             setTimeout(function(){
//                 window.location.reload(1);
//             }, 2000);
//         }
//     })
// }

function productUpdate(){
    var id = $("#id").val();
    var product_name = $("#product_name").val();
    var product_price = $("#product_price").val();
    var category_type = $("category_type").val();
    
    $.ajax({
        type: 'POST',
        url: "php/actions/categoryEdit.php",
        data: {
            "id":id,
            "product_name":product_name,

        },
        success: function(data){
            Swal.fire({
                icon: "success",
                title: "Update Successfully",
                timer: 2000,
                showConfirmButton: false,
            })
            setTimeout(function(){
                window.location.reload(1);
            }, 2000);
        }
    })
}