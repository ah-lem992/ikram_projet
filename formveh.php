
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>formulaire</title>
  
</head>
<style>
.edit {  
      padding: 5px 10px;  
      cursor: pointer;  
    }  
    .save {  
      padding: 5px 10px;  
      cursor: pointer;  
    }  
    .delete {  
      padding: 5px 10px;  
      cursor: pointer;  
    }
    .save {  
      display: none;  
      background: #32AD60;  
      color: #ffffff;  
      &:hover {  
        background: darken(#32AD60, 10%);  
      }  
    }  
    .edit {  
      background: #2199e8;  
      color: #ffffff;  
      &:hover {  
        background: darken(#2199e8, 10%);  
      }  
    }  
    .delete {  
      background: #EC5840;  
      color: #ffffff;  
       &:hover {  
        background: darken(#EC5840, 10%);  
      }  
    }  
    </style>
<body>
    <div class ='container '>
        <div class = 'row'>
<table class="table table-hover mt-5">
    
  <thead > 
    <tr >
      <th scope="col">id_véhicule</th>
      <th scope="col">marque</th>
      <th scope="col">modele</th>
      <th scope="col">couleur</th>
      <th scope="col">immatriculation</th>
      <th scope="col">action</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">501</th>
      <td class="data">Peugeot</td>
      <td class="data">807</td>
      <td class="data">noir</td>
      <td class="data">AB-355-CA</td>
      <td ><button class="edit"><i class="fa fa-edit"></i> </button>
       <button class="save"><i class="fa fa-save"></i> </button> 
       <button class="delete"><i class="fa fa-trash"></i> </button> </td>
      
    </tr>
    <tr>
      <th scope="row">502</th>
      <td class="data">Citroen</td>
      <td class="data">C8</td>
      <td class="data">noir</td>
      <td class="data">CE-122-AE</td>
      <td ><button class="edit"><i class="fa fa-edit"></i> </button>
       <button class="save"><i class="fa fa-save"></i> </button> 
       <button class="delete"><i class="fa fa-trash"></i> </button> </td>
      
    </tr>
    <tr>
      <form action="post" >
      <th scope="row">503</th>
      <td class="data">Mercedes</td>
      <td class="data">Cls</td>
      <td class="data">vert</td>
      <td class="data">FG-953-HI</td>
      </form>
      <td ><button class="edit"><i class="fa fa-edit"></i> </button>
       <button class="save"><i class="fa fa-save"></i> </button> 
       <button class="delete"><i class="fa fa-trash"></i> </button> </td>
    </tr>

    <tr>
    <th scope="row">504</th>
      <td class="data" >Volkswagen</td>
      <td class="data">Touran</td>
      <td class="data">noir</td>
      <td class="data">SO-322-NV</td>
      <td ><button class="edit"><i class="fa fa-edit"></i> </button>
       <button class="save"><i class="fa fa-save"></i> </button> 
       <button class="delete"><i class="fa fa-trash"></i> </button> </td>
      
    </tr>

    <tr>
    <th scope="row">505</th>
      <td  class="data">Skoda</td>
      <td class="data">Octavia</td>
      <td class="data">gris</td>
      <td class="data">PB-631-TK</td>
      <td ><button class="edit"><i class="fa fa-edit"></i> </button>
       <button class="save"><i class="fa fa-save"></i> </button> 
       <button class="delete"><i class="fa fa-trash"></i> </button> </td>

    </tr>

    <tr>
      <th scope="row">506</th>
      <td class="data" >Volkswagen</td>
      <td class="data">Passat</td>
      <td class="data">gris</td>
      <td class="data" >XN-P73-MM</td>
      <td ><button class="edit"><i class="fa fa-edit"></i> </button>
       <button class="save"><i class="fa fa-save"></i> </button> 
       <button class="delete"><i class="fa fa-trash"></i> </button> </td>
      
    </tr>  

  </tbody>
  
</table> 
</div>
</div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
 <script>
   //fct that control editio,
$(document).on('click', '.edit', function() {  
      $(this).parent().siblings('td.data').each(function() {  
        var content = $(this).html();  
        $(this).html('<input value="' + content + '" />');  
      });  
      //on cachant le button delete 
      $(this).siblings('.save').show();  
      $(this).siblings('.delete').hide();  
      $(this).hide();  
    });  
    //saving value
    $(document).on('click', '.save', function() {  
      $('input').each(function() {  
        var content = $(this).val();  
        $(this).html(content);  
        $(this).contents().unwrap();  
      });  
      $(this).siblings('.edit').show();  
      $(this).siblings('.delete').show();  
      $(this).hide();  
    });  
    $(document).on('click', '.delete', function() {  
      $(this).parents('tr').remove();  
    });  
    $('.add').click(function() {  
      $(this).parents('table').append('<tr><td class="data"></td><td class="data"></td><td class="data"></td><td><button class="save">Save</button><button class="edit">Edit</button> <button class="delete">Delete</button></td></tr>');  
    });  
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

</body>
</html>