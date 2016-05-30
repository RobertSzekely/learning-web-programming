<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 70%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    height:40px;
    background-color: #ff8533;
    color: white;
}
img {
    float:right;
    padding: 50px;
   width: 15%
}
</style>
</head>
</html>
<?php
 $connect = mysqli_connect("localhost", "srie1831", "srie1831", "srie1831");
 $output = '';
 $sql = "SELECT * FROM recipes";
 $result = mysqli_query($connect, $sql);
 $output .= '
           <table border=1, align="center">
                <tr>
                     <th width="10%">Id</th>
                     <th width="20%">Name</th>
                     <th width="20%">Author</th>
                     <th width="20%">Type</th>
                     <th width="20%">Description</th>
                     <th width="10%">Delete</th>
                </tr>';
 if(mysqli_num_rows($result) > 0)
 {
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
               <tr>
                     <td>'.$row["id"].'</td>
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td>
                     <td class="name" data-id2="'.$row["id"].'" contenteditable>'.$row["author"].'</td>
                     <td class="name" data-id2="'.$row["id"].'" contenteditable>'.$row["type"].'</td>
                     <td class="name" data-id2="'.$row["id"].'" contenteditable>'.$row["description"].'</td>
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
                </tr>
           ';
      }
      $output .= '
           <tr>
                <td></td>
                <td id="name" contenteditable></td>
                <td id="author" contenteditable></td>
                <td id="type" contenteditable></td>
                <td id="description" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
           </tr>
      ';
 }
 else
 {
      $output .= '<tr>
                          <td colspan="4">Data not Found</td>
                     </tr>';
 }
 $output .= '</table>
<img aligh="right" src="cookbook.gif" alt="cookbook" >';
 echo $output;
 ?>				
