<?php

if(session_status() == ''){
	session_start();
}
include_once('../models/Route.php');
include_once ('DBConnection.php');

$userId = $_SESSION['id'];

class routeDBAccess{
    
    public function __construct(){
        
    }
    
    function addRoute (Route $route){
        $dbCon = new DBConnection();
        $db    = $dbCon->openConnection();

        if ($stmt = $db->prepare( "INSERT INTO routes (user_id,start_lat,start_lng,end_lat,end_lng,start_city,end_city,id_repeat,start_time,descrition) VALUES (?,?,?,?,?,?,?,?,?,?,?)" )  ){
            $stmt->bind_param($route->user_id,$route->city1Lat,$route->city1Lng,$route->city2Lat,$route->city2Lng,$route->from,$route->to,$route->id_repeat,$route->start_time,$route->ridekind,$route->description);
            $r=$stmt->execute();
            $stmt->close();
            return $r;
//        }else{
//            echo 'Error';
        }
    }
    
    function getRoute($userId){
        $dbCon = new DBConnection();
        $db    = $dbCon->openConnection();
        
        $stmt=$dbCon->executeSQL("SELECT * FROM routes WHERE user_id='$userId'");
        $data=mysqli_fetch_array($stmt);

        $route =new Route($data['user_id'],$data['start_lat'],$data['start_lng'],$data['end_lat'],$data['end_lng'],$data['start_city'],$data['end_city'],$data['id_repeat'],$data['start_time'],$data['ridekind'],$data['description']);
        return $route;        
    }
}






//	function getRelevantTeachers($course_id){
//		$dbCon = new DBConnection();
//		$db    = $dbCon->openConnection();
//
//		$teachers=array();
//		$i=0;
//		if( $stmt = $dbCon->executeSQL( "SELECT * FROM teacher WHERE teacher_id IN(SELECT teacher_id FROM teacher_course WHERE course_id='$course_id')" ) ) {
//			//echo "SELECT * FROM teacher WHERE teacher_id IN(SELECT teacher_id FROM teacher_course WHERE course_id='$course_id')";
//			while($data=mysqli_fetch_array($stmt)){
//				$teachers[$i] =new Teacher($data['teacher_id'],$data['name'],$data['address'],$data['nic']);
//				$i=$i+1;
//			}
//			$stmt->close();
//			return $teachers;
//		}else{
//			echo'Error';
//		}
//	}


