fetchData();

let add=document.getElementById('add');
add.addEventListener("click",function(){
    $("#contactModal").modal("show");
})

$("#save").click(function(e){
    e.preventDefault();
    let data ={
        action : "insert",
        id : $("#id").val(),
        name : $("#name").val(),
        mobile : $("#mobile").val(),
        address : $("#address").val(),
        category : $("#Category").val()
    };
  $.ajax({
    method : "POST",
    dataType : "JSON",
    data : data,
    url : "../apis/api.php",
    
    success : function(response){
        let message = response.data;
        Swal.fire(
            'Commits',
            message,
            'success'
          );
        $("#id").val("");
        $("#name").val("");
        $("#mobile").val("");
        $("#address").val("");
        $("#Category").val("");
          fetchData();
    },
    error : function(response){
        let msg = response['status'];
        let text = response.data;
        if (msg==404)
        {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "Something Went Wrong! \nThe requested URL was not found on this server.",
                footer: '<a href="">Why do I have this issue?</a>'
              })
        }
        else
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "Something Went Wrong Behind Sene!",
            footer: '<a href="">Why do I have this issue?</a>'
          })

       
    }
  });
})
$("#close").click(function(){
    $("#contactModal").modal("hide");
})






// readData
function fetchData(){
    $("#contactTable tbody").html("");
    let data ={
        action : "read"
    };
    $.ajax({
        method : "POST",
        dataType : "JSON",
        data : data,
        url : '../apis/api.php',
        success : function(response){
            let status =response.status;
            if (status){
                let responseData=response.data;
                let tr="";
                responseData.forEach((items)=>{
                    tr+="<tr>"
                   for (let item in items){
                        tr+=`<td>${items[item]}</td>`;
                   }
                   tr+=`<td><i class="fas fa-edit edit" edit=${items['id']} style='margin-right: 10px; font-size: 26px; color: green;'></i> <i class="fa-solid fa-circle-minus delete" delete_id=${items['id']} style=' font-size: 26px; color: red;'></i> </td>`
                })
                $("#contactTable tbody").append(tr);
            }
        },
        error : function(data){
            alert("Something went wrong");
        }
    })
}

function DeleteContact(id){
    let data ={
        action: "delete",
        id : id

    }

    $.ajax({
        method : "POST",
        dataType : "JSON",
        data : data,
        url : '../apis/api.php',
        success : function(response){
            let status =response.status;
            let message =response.data;
            if (status){
                Swal.fire(
                    'Commits',
                    message,
                    'success'
                  );
                  fetchData();
            }
        },
        error : function(data){
            alert("Something went wrong");
        }
    })

}

function Update(id){
    $("#contactModel").modal("show");
    $("#id").val(id);
}

$("#contactTable tbody").on("click","i.delete",function(){
    Swal.fire({
        title: 'Are you sure?',
        text: "Do You Want To Continue To Delete This Record!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            let id =$(this).attr("delete_id");
            DeleteContact(id);
        }
        else
         return;
      })
        
})

$("#contactTable tbody").on("click","i.edit",function(){
   let id =$(this).attr("edit");
   let data ={
    id : id,
    action : "readSpecify"
   };
   $.ajax({
    method : 'POST',
    dataType : 'JSON',
    data : data,
    url : "../apis/api.php",
    success : function (response){
        let resData = response.data;
        let id=resData[0].id;
        let name=resData[0].name;
        let address=resData[0].address;
        let mobile=resData[0].mobile;
        let category=resData[0].category;
        $("#updateContact").modal("show");
        $("#uid").val(id);
        $("#uname").val(name);
        $("#umobile").val(mobile);
        $("#uaddress").val(address);
        $("#uCategory").val(category);
       
    }
   })

})


$("#edit").click(function(e){
    e.preventDefault();
   
    let data ={
        action : "update",
        id : $("#uid").val(),
        name : $("#uname").val(),
        mobile : $("#umobile").val(),
        address : $("#uaddress").val(),
        category : $("#uCategory").val()
    };
  $.ajax({
    method : "POST",
    dataType : "JSON",
    data : data,
    url : "../apis/api.php",
    
    success : function(response){
        let message = response.data;
        Swal.fire(
            'Commits',
            message,
            'success'
          );
        $("#uid").val("");
        $("#uname").val("");
        $("#umobile").val("");
        $("#uaddress").val("");
        $("#uCategory").val("");
          fetchData();
    },
    error : function(response){
        let msg = response['status'];
        let text = response.data;
        if (msg==404)
        {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "Something Went Wrong! \nThe requested URL was not found on this server.",
                footer: '<a href="">Why do I have this issue?</a>'
              })
        }
        else
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: "Something Went Wrong Behind Sene!",
            footer: '<a href="">Why do I have this issue?</a>'
          })

       
    }
  });
})