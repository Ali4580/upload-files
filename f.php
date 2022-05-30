<?php


if ($_SERVER['REQUEST_METHOD']=='POST'):

$uplod_filed=$_FILES["my_file"];
//varibale to name fale
$file_name =$uplod_filed['name'];
//variable to path file
$file_path =$uplod_filed['full_path'];
//variable to type file 
$file_type =$uplod_filed['type'];
//variable to tmp name to file
$file_tmp =$uplod_filed['tmp_name'];
//varible to find error in file
$file_eror =$uplod_filed['error'];
// variable to size file
$file_size =$uplod_filed['size'];
// array in it extenstion alwoed

//
//




/*       

echo"name_file". ":".($file_name);
echo"<br>";
echo"file_path".":".$file_path;
echo"<br>";
echo"file_type".":".$file_type;
echo"<br>";
echo"file_tmp".":".$file_tmp;
echo"<br>";
echo"file_eror".":".$file_eror;
echo"<br>";
echo"file_size".":".$file_size;
*/
$alwoed_extension=array("jpg","pdf","jpeg","png","gif");
$file_count=count($file_name);

for($i=0;$i<$file_count;$i++){
    $error=array();
    $file_extinsion[$i]=explode('.',$file_name[$i]); 
   $file__extinsion[$i]=end($file_extinsion[$i]);
   $file___extinsion[$i] =strtolower( $file__extinsion[$i]);                                                                                                                                                                                                        
    if($file_size[$i]>900000):
        $error[] = '<div>file cant bemore than x</div>';
    endif;
    
    // variable to find extenstion type
   
    
    
    //test to fv
    if(!in_array( $file___extinsion[$i],$alwoed_extension)):
       $error[] = '<div>file is not valid</div>';
    endif;
    if(empty($error)):
        move_uploaded_file($file_tmp[$i],'C:\xampp\htdocs\upload\up\\'.$file_name[$i]);
        
       
        echo "file number:".($i+1) ." is uploaded";
    echo $file_name[$i];
    echo"<br>";
    else:
    foreach($error as $error):
        echo$error;
    endforeach;
    endif; 
 
}
endif; 


?>

        <!-form to uploded file->
 <form action="" method="post"enctype=multipart/form-data>
          NAME:  <input type ="file" name="my_file[]" multiple="multiple">
            <input type="submit"name=""value="upload">
 </form>
    

