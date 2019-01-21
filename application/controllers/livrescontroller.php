<?php

class LivresController extends Controller {

	function view($id) {
		try{
			$res = MySQLBDD::executerequete("SELECT * FROM library.livres WHERE livres.id = ".$id."");
		}catch (Exception $e){

		}
		$this->set('title',' Livre');
		$this->set('livre',$res->fetch_assoc());

	}
	
	function viewall() {

		$this->set('title','All Livres');
		try {
			$res = MySQLBDD::executerequete("SELECT * FROM Livres");
			for ($set = array(); $row = $res->fetch_assoc(); $set[] = $row) ;
			
		}catch (Exception $e){

		}
		$this->set('livres',$set);
	}
	
	function add() {


        $titre=$_POST['titre'];
        $auteur = $_POST['auteur'];
        $reference = $_POST['reference'];
        $genre = $_POST['genre'];
        $nameImage=$_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        $path = URL_BASE."/library/public/img/";

        if (move_uploaded_file($tmp, $_SERVER['DOCUMENT_ROOT'].'/library/public/img/'.$nameImage)) {
            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }


         $imageType=strtoupper(pathinfo($path.$nameImage,PATHINFO_EXTENSION));

        $newName=date('d_m_Y_H_i_s').'.'.$imageType;

        rename($_SERVER['DOCUMENT_ROOT'].'/library/public/img/'.$nameImage,$_SERVER['DOCUMENT_ROOT'].'/library/public/img/'.$newName);



        try {
            $res = MySQLBDD::executerequete("INSERT INTO library.livres (id,titre,reference,genre,auteur,image) VALUES (NULL , '$titre' , '$reference','$genre', '$auteur','$newName' )");
            if($res){
                $this->set('title','Success Add');

            }
            else{
                $this->set('title','echec Add');

            }
        }catch (Exception $e) {

        }
        $this->set('todo',$res);
        header('Location: '.'viewall');
	}
	
	function delete($id) {
		try{
			$res = MySQLBDD::executerequete("DELETE FROM library.livres WHERE livres.id = ".$id."");
			if($res){
				$this->set('title','Success Del');
				$this->set('todo',$res);
			}else{
				$this->set('title','echec Del');
			}
		}catch (Exception $e){

		}

		
	}


	public function getLivre(){
		try {
			$res = MySQLBDD::executerequete("SELECT * FROM Livres");
			for ($set = array(); $row = $res->fetch_assoc(); $set[] = $row) ;
			return $set;
		}catch (Exception $e){
			return NULL;
		}
	}



	public function supprimerLivre($id){
		try{
			$res = MySQLBDD::executerequete("DELETE FROM library.livres WHERE livres.id = ".$id."");
			if($res){
				return true;
			}else{
				return false;
			}
		}catch (Exception $e){
			return NULL;
		}
	}



    public function exportcsv(){

        header("Content-Disposition: attachment; filename=\"data.csv\";" );
        header("Content-type: application/vnd.ms-excel");
        $output = fopen("php://output", "w");
        $result = MySQLBDD::executerequete("SELECT id,titre,reference,genre,auteur FROM Livres ");




        foreach ($result as $val) {

            fputcsv($output, $val);
        }



        fclose($output);



    }





}
