<?php
namespace ToDo;
use PDO;
class Task{
    protected $pdo;
    private $pavadinimas;
    private $kodas;
    private $pvm_kodas;
    private $adresas;
    private $telefonas;
    private $pastas;
    private $veikla;
    private $vadovas;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function search() {
        $search_value=$_POST['search'];
            $sql = "SELECT * FROM companies WHERE pavadinimas LIKE '%$search_value%' OR kodas LIKE '%$search_value%'";
            $q = $this->pdo->prepare($sql);
            $q->execute(array($search_value));
            $data = $q->fetchAll(PDO::FETCH_ASSOC);
            if ($data != null && $search_value != "") {
                echo "<div class='container-fluid d-flex justify-content-center'>";
                echo '<table class="table table-bordered table-striped">';
                    echo '<tr style="text-align:center">';
                    echo '<th>Company name</th>';
                    echo '<th>Code</th>';
                    echo '<th>PVM code</th>';
                    echo '<th>Adress</th>';
                    echo '<th>Phone</th>';
                    echo '<th>Email</th>';
                    echo '<th>Things</th>';
                    echo '<th>CEO</th>';
                    echo '</tr>';
                foreach($data as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['pavadinimas'] . '</td>';
                    echo '<td>'. $row['kodas'] . '</td>';
                    echo '<td>'. $row['pvm_kodas'] . '</td>';
                    echo '<td>'. $row['adresas'] . '</td>';
                    echo '<td>'. $row['telefonas'] . '</td>';
                    echo '<td>'. $row['pastas'] . '</td>';
                    echo '<td>'. $row['veikla'] . '</td>';
                    echo '<td>'. $row['vadovas'] . '</td>';
                    echo '</tr>';
                    }
                echo '</table>';
                echo '</div>';
                }else {
                        $add_task = 'https://phpfastcreate.ddev.site/add-task';
                        $watch='https://phpfastcreate.ddev.site/table';
                        echo '<p style="text-align: center" >'. "NOT FOUND". '<br>'.
                        "<a  class="."text-danger"." href='".$add_task."' role="."button".">CREATE NEW COMPANY</a>".'</p>';
                        echo '<p style="text-align: center">'. "OR". '<br>'.
                        "<a class="."text-success"." href='".$watch."' role="."button".">OPEN COMPANY LIST</a>".'</p>';                   
                    } 
    }
   
    public function info($id){
        try {
        $statement = $this->pdo->prepare("SELECT * FROM `companies` WHERE `id` = :id");
        $statement->bindValue(":id", $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function createTask($company){
        $this->pavadinimas = $company['pavadinimas'];
        $this->kodas = $company['kodas'];
        $this->pvm_kodas = $company['pvm_kodas'];
        $this->adresas = $company['adresas'];
        $this->telefonas = $company['telefonas'];
        $this->pastas = $company['pastas'];
        $this->veikla = $company['veikla'];
        $this->vadovas = $company['vadovas'];
        $this->insertTask();
    }
    private function insertTask(){
        try{
            $query = "INSERT INTO `companies` (`pavadinimas`, `kodas`, `pvm_kodas`, `adresas`, `telefonas`, `pastas`, `veikla`, `vadovas`) 
            VALUES (:pavadinimas, :kodas, :pvm_kodas, :adresas, :telefonas, :pastas, :veikla, :vadovas)";
            $stmt = $this -> pdo->prepare($query);
            $stmt->bindParam(':pavadinimas', $this->pavadinimas, PDO::PARAM_STR);
            $stmt->bindParam(':kodas', $this->kodas, PDO::PARAM_STR);
            $stmt->bindParam(':pvm_kodas', $this->pvm_kodas, PDO::PARAM_STR);
            $stmt->bindParam(':adresas', $this->adresas, PDO::PARAM_STR);
            $stmt->bindParam(':telefonas', $this->telefonas, PDO::PARAM_STR);
            $stmt->bindParam(':pastas', $this->pastas, PDO::PARAM_STR);
            $stmt->bindParam(':veikla', $this->veikla, PDO::PARAM_STR);
            $stmt->bindParam(':vadovas', $this->vadovas, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/');
        }catch(\PDOExpection $e){
            echo $e->getMessage();
        }
    }
    public function allTasks(){
        $statement = $this->pdo->prepare('select * from companies');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC); //grazinam kaip asociatyvu masyva
    }
    public function deleteTask($id){
        $statement = $this->pdo->prepare("DELETE FROM `companies` WHERE id=$id");
        $statement->execute();
        header('Location:/table/');
        return $statement;
    } 
    public function fullList(){$statement = $this->pdo->prepare("SELECT * FROM companies ");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}