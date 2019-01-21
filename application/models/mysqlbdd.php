<?php



class MySQLBDD
{
    private static function getBdd() {

        $bdd = new Mysqli('localhost','root', '','library');
        if ($bdd->connect_errno)
            echo '<span class="faq_icond" style="color:red">\'</span> Echec lors de la connexion à MySQL : (' . $bdd->connect_errno . ') ' . $bdd->connect_error;
        else
        {
            return $bdd;
        }


    }

    public static function executerequete($req){
        $bdd = MySQLBDD::getBdd();
        try{
            $res = $bdd->query($req);
            return $res;
        }catch (Exception $e)
        {
            echo $e->getMessage();
        }

    }


}