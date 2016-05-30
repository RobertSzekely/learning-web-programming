<html>
      <head>
           <title>Students Catalog</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      </head>
      <body>
                <br />
                <br />
                <br />
                     <h3 align="center">Recipes</h3><br />
                     <div id="live_data"></div>
      </body>
 </html>
 <script>
 $(document).ready(function(){
      function fetch_data()
      {
           $.ajax({
                url:"select.php",
                method:"POST",
                success:function(data){
                     $('#live_data').html(data);
                }
           });
      }
      fetch_data();
      $(document).on('click', '#btn_add', function(){
           var name = $('#name').text();
           var author = $('#author').text();
           var type = $('#type').text();
           var description = $('#description').text();
           if(name == '')
           {
                alert("Enter Name");
                return false;
           }
           if(author == '')
           {
                alert("Enter Author");
                return false;
           }
           if(type == '')
           {
                alert("Enter Type");
                return false;
           }
           if(description == '')
           {
                alert("Enter Description");
                return false;
           }
           $.ajax({
                url:"insert.php",
                method:"POST",
                data:{name:name, author:author, type:type, description:description},
                dataType:"text",
                success:function(data)
                {
                     alert(data);
                     fetch_data();
                }
           })
      });
      function edit_data(id, text, column_name)
      {
           $.ajax({
                url:"edit.php",
                method:"POST",
                data:{id:id, text:text, column_name:column_name},
                dataType:"text",
                success:function(data){
                     alert(data);
                }
           });
      }
      $(document).on('blur', '.name', function(){
           var id = $(this).data("id1");
           var name = $(this).text();
           edit_data(id, name, "name");
      });
      $(document).on('blur', '.author', function(){
           var id = $(this).data("id2");
           var author = $(this).text();
           edit_data(id, author, "author");
      });
      $(document).on('blur', '.type', function(){
           var id = $(this).data("id3");
           var type = $(this).text();
           edit_data(id, type, "type");
      });
      $(document).on('blur', '.description', function(){
           var id = $(this).data("id2");
           var description = $(this).text();
           edit_data(id, description, "description");
      });
      $(document).on('click', '.btn_delete', function(){
           var id=$(this).data("id3");
           if(confirm("Are you sure you want to delete this?"))
           {
                $.ajax({
                     url:"delete.php",
                     method:"POST",
                     data:{id:id},
                     dataType:"text",
                     success:function(data){
                          alert(data);
                          fetch_data();
                     }
                });
           }
      });
 });
 </script>
