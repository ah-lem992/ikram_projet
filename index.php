i    <! DOCTYPE html>  
    <html>  
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta charset="UTF-8">  
    <title> JavaScript editable table </title>  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">  
    </head>  
    <style>  
     @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500');  
    body {  
      font-family: 'Montserrat', sans-serif;  
      text-align: center;  
    }  
    body{  
      background-color: rgb(63,72,83);  
      font-family: sans-serif;  
      color: rgb(220,220,220);  
      overflow-x: hidden;  
    }  
    tr:first-child { color: #FB667A; }  
    td:hover {  
      color: white;  
      font-weight: bold;   
      transition-delay: 0s;  
        transition-duration: 0.4s;  
        transition-property: all;  
      transition-timing-function: line;  
    }  
    h1 {  
      position: relative;  
      padding: 0;  
      margin: 10;  
      font-family: "Raleway", sans-serif;  
     font-weight: 400;  
      font-size: 40px;  
      color: white;  
      -webkit-transition: all 0.4s ease 0s;  
      -o-transition: all 0.4s ease 0s;  
      transition: all 0.4s ease 0s;   
    }  
    .table {  
      width: 100%;  
      thead {  
        th {  
          padding: 10px 10px;  
          background: #00adee;  
          font-size: 25px;  
          text-transform: uppercase;  
          vertical-align: top;  
          color: #1D4A5A;  
          font-weight: normal;  
          text-align: left;  
        }  
      }  
      tbody {  
        tr {  
          td {  
            padding: 10px;  
            background: #f2f2f2;  
            font-size: 14px;  
          }  
        }  
      }  
    }  
    .add {  
      outline: none;  
      background: none;  
      border: none;  
    }  
    .edit {  
      outline: none;  
      background: none;  
      border: none;  
    }  
    .save {  
      outline: none;  
      background: none;  
      border: none;  
    }  
    .delete {  
      outline: none;  
      background: none;  
      border: none;  
    }  
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
    .add {  
      float: right;  
      background: transparent;  
      border: 1px solid  black;  
      color: black;  
      font-size: 13px;  
      padding: 0;  
      padding: 3px 5px;  
      cursor: pointer;  
      &:hover {  
        background: #ffffff;  
        color: #00adee;  
      }  
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
    <table class="table data">  
    <h1> Example </h1>  
      <thead>  
        <tr>  
          <th> Name </th>  
          <th> Email </th>  
          <th> Number </th>  
        </tr>  
      </thead>  
      <tbody>  
        <tr>  
          <td class="data"> John Doe </td>  
          <td class="data"> johndoe@john.com </td>  
          <td class="data"> 666-666-666 </td>  
          <td>  
            <button class="save"> Save </button>  
            <button class="edit"> Edit </button>  
            <button class="delete"> Delete </button>  
          </td>  
        </tr>  
        <tr>  
          <td class="data"> John Doe </td>  
          <td class="data"> johndoe@john.com </td>  
          <td class="data"> 666-666-666 </td>  
          <td>  
            <button class="save"> Save </button>  
            <button class="edit"> Edit </button>  
            <button class="delete"> Delete </button>  
          </td>  
        </tr>  
      </tbody>  
      <tbody>  
        <tr>  
          <td class="data"> John Doe </td>  
          <td class="data"> johndoe@john.com </td>  
          <td class="data"> 666-666-666 </td>  
          <td>  
            <button class="save"> Save </button>  
            <button class="edit"> Edit </button>  
            <button class="delete"> Delete </button>  
          </td>  
        </tr>  
        <tr>  
          <td class="data"> John Doe </td>  
          <td class="data"> johndoe@john.com </td>  
          <td class="data"> 666-666-666 </td>  
          <td>  
            <button class="save"> Save </button>  
            <button class="edit"> Edit </button>  
            <button class="delete"> Delete </button>  
          </td>  
        </tr>  
      </tbody>  
    </table>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
    <script>  
    $(document).on('click', '.edit', function() {  
      $(this).parent().siblings('td.data').each(function() {  
        var content = $(this).html();  
        $(this).html('<input value="' + content + '" />');  
      });  
      $(this).siblings('.save').show();  
      $(this).siblings('.delete').hide();  
      $(this).hide();  
    });  
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
    </body>  
    </html>  