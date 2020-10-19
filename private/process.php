<?php
class Main{
    function Connect_and_insert(){
        if(isset($_POST['SEND1'])){
            try {
            $Conn = new PDO('mysql:host=127.0.0.1;dbname=testesystem', $username = "root", $pass="");
            $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $Name = $_POST['Mname'];
            $NameFor = $_POST['MnameFornecedor'];
            $Validade = $_POST['Mvalidade'];
            $Preco = $_POST['Mpreco'];
            $Qtd = $_POST['Mqtd'];

            $stmt = $Conn->prepare('INSERT INTO testeTable (nome,nomeFor,validade,preco,qtd) VALUES(:Name,:NameFor,:Validade,:Preco, :Qtd)');
            $stmt->execute(array(
              ':Name' => $Name,
              ':NameFor' => $NameFor,
              ':Validade' => $Validade,
              ':Preco' => $Preco,
              ':Qtd' => $Qtd

            ));



            } catch (\Throwable $error) {
                echo "Erro ao conectar ao banco de dados. Erro: " . $error;
            }
        }else{
            echo "";
        }

    }

    function Connect_and_remove(){
        if(isset($_POST['SEND4'])){

        $id = null;
                try {
                $Conn = new PDO('mysql:host=localhost;dbname=testesystem', $username="root", $password="");
                $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                $id = $_POST['RR'];
                $stmt = $Conn->prepare('DELETE FROM testeTable WHERE id = :id');
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                } catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage();
                }
            }else{
                echo "";
            }



    }



    function Connect_and_actualize(){
        $Conn = new PDO('mysql:host=127.0.0.1;dbname=testesystem', $username = "root", $pass="");
        $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta = $Conn->query("SELECT id,nome,nomeFor,validade,preco,qtd FROM testeTable;");

            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            print "<article>";
            print "<hr>";
                echo "id: {$linha['id']} <br><br> Nome: {$linha['nome']} <br><br> Nome do fornecedor: {$linha['nomeFor']} <br><br> Validade: {$linha['validade']} <br><br> Preço: {$linha['preco']} <br><br> Quantidade: {$linha['qtd']}";
                print "</article>";
                print "<hr>";






    
                
            }

        }

    function Connect_and_insertTwo(){


        if(isset($_POST['SEND5'])){
            try {
                $Conn = new PDO('mysql:host=127.0.0.1;dbname=testesystem', $username = "root", $pass="");
                $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $id = $_POST['rR'];

                $Name = $_POST['Mname'];
                $NameFor = $_POST['MnameFornecedor'];
                $Validade = $_POST['Mvalidade'];
                $Preco = $_POST['Mpreco'];
                $Qtd = $_POST['Mqtd'];


                 
                $stmt = $Conn->prepare('INSERT INTO testeTable (id,nome,nomeFor,validade,preco,qtd) VALUES(:id,:Name,:NameFor,:Validade,:Preco, :Qtd)');
                $stmt->execute(array(
                    ':id' => $id,
                  ':Name' => $Name,
                  ':NameFor' => $NameFor,
                  ':Validade' => $Validade,
                  ':Preco' => $Preco,
                  ':Qtd' => $Qtd
    
                ));
                 
                echo $stmt->rowCount(); 
              } catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage();
        }
        
    }else{
        echo "";
    }
}

}

$M = new Main();
$M->Connect_and_insert();
$M->Connect_and_remove();
$M->Connect_and_insertTwo();






?>