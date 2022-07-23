
<?php

require '../config/conn.php';

if (isset($_POST['action'])){
    $request= new Request();
    // checking the actions
    if ($_POST['action']=="insert")
        $request->InsertContact();

    else if ($_POST['action']=="update")
        $request->UpdateContact();

    else if ($_POST['action']=="delete")
        $request->DeleteContact();

    else if ($_POST['action']=="read")
        $request->ReadContacts();

        else if ($_POST['action']=="readSpecify")
        $request->RequestContact();

    else
        echo "Invalid Action";
}

// class request
class Request{
        // read contacts
        function ReadContacts(){
            $query = "SELECT *FROM contacts";
            $results =connection::GetMysqlConnection()->query($query);
            $responseData=array();
            $data=array();

            if ($results){
                while($row=$results->fetch_assoc()){
                    $data []=$row;
                }
                $responseData=array("status"=>true, "data"=>$data);
            }
            else
                $responseData=array("status"=>false, "data"=> connection::GetMysqlConnection()->error);
            echo json_encode($responseData);
        }

        function RequestContact(){
            $id =$_POST['id'];
            $query = "SELECT *FROM contacts where id ='$id'";
            $results =connection::GetMysqlConnection()->query($query);
            $responseData=array();
            $data=array();

            if ($results){
                while($row=$results->fetch_assoc()){
                    $data []=$row;
                }
                $responseData=array("status"=>true, "data"=>$data);
            }
            else
                $responseData=array("status"=>false, "data"=> connection::GetMysqlConnection()->error);
            echo json_encode($responseData);
        }

        // insert data
        function InsertContact(){
            extract($_POST);
            $query="INSERT INTO contacts(id,name,mobile,address,category) VALUES('$id','$name','$mobile','$address','$category')";
            $results=connection::GetMysqlConnection()->query($query);
            $data=array();
            if ($results){
                $data=array("status"=>true,"data"=>"Successfully Saved...");
            }
            else    
                $data=array("status"=>false,"data"=>connection::GetMysqlConnection()->error);
            echo json_encode($data);
        }

        // update contacts
        function UpdateContact(){
            extract($_POST);
            $query="UPDATE contacts SET name='$name',mobile='$mobile',address='$address',category='$category'
            WHERE id='$id'";
            $results=connection::GetMysqlConnection()->query($query);
            $data=array();
            if ($results){
                $data=array("status"=>true,"data"=>"Successfully Updated...");
            }
            else    
                $data=array("status"=>false,"data"=>connection::GetMysqlConnection()->error);
            echo json_encode($data);
        }


        // delete contacts
        function DeleteContact(){
            $id=$_POST['id'];
            $query="DELETE FROM contacts where id='$id'";
            $results=connection::GetMysqlConnection()->query($query);
            $data=array();
            if ($results){
                $data=array("status"=>true,"data"=>"Successfully Deleted...");
            }
            else    
                $data=array("status"=>false,"data"=>connection::GetMysqlConnection()->error);
            echo json_encode($data);
        }

}


?>