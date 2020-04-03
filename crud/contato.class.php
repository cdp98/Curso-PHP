<?php
// require 'config.php';
class Contato extends Config {
    //1 passo = verificar se o e-mail já existe no sistema
    //2 passo = adicionar
    //3 passo =
    //4 passo =
    public function adicionar ($email, $nome = '') {

        if ($this->existeEmail($email) == false) {
            //se não existir o e-mail:
            $sql = "INSERT INTO contatos (nome, email) VALUE (:nome, :email)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->execute();
            // var_dump($ok);
            // die ();

            return true;
        }else {
            return false;
        }
    }
    public function getNome($email) {
        //ver a caracteristica nome.
        $sql = "SELECT nome FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        // print_r($sql->rowCount());
        // die ();
        if ($sql->rowCount() > 0) {
            $info = $sql -> fetch();

            return $info['nome'];
        }else {
            echo "<pre>";
            echo $sql->debugDumpParams();
            print_r($sql->errorInfo());
            return false;
        }
    }
    public function getInfo($id) {
        $sql = "SELECT * FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
           return $sql ->fetch();
        }else {
            return array();
        }
    }
    public function getAll() {
        //ver todas as características.
        $sql = "SELECT * FROM contatos";
        $sql = $this->pdo->query($sql);

        if ($sql->rowCount() > 0) {
            return $sql ->fetchAll();
        }else {
            return array();
        }
    }
    public function editar($nome, $id) {
            $sql = "UPDATE contatos SET nome = :nome WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':id', $id);
            $sql->execute();
    }
    public function editarTudo($nome, $email, $id) {
        $sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    public function excluir ($email) {
        if ($this->existeEmail($email)) {
            $sql = "DELETE FROM contatos WHERE email = :email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();

            return true;
        }else {
            return false;
        }
    }
    private function existeEmail($email) {
        $sql = "SELECT * FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        }else {
            return false;
        }
    }
}
?>