<?php
class Auth extends CI_Model {
    public function register(){
        $arr = ['firstname','lastname','address','city','state','zip','id_number','phonenumber','email'];
        for($i=0; $i<count($arr);$i++){
            $data[$arr[$i]]=$_POST[$arr[$i]];
        }
        $the_date = strtotime($_POST['birthday']);
        $data['birthday'] = gmdate('Y-m-d H:i:s', $the_date);        
        $this->db->insert('user_register', $data);
    }
    public function register2(){
        $arr = ['username','password','security_question1','answer1','security_question2','answer2','security_question3','answer3'];
        for($i=0; $i<count($arr);$i++){
            $data[$arr[$i]]=$_POST[$arr[$i]];
        }
             
        $this->db->where('phonenumber', $_SESSION['phonenumber']);
        $this->db->update('user_register',$data); 
    }
    
    
}
?>