<?php
/**
 * Description of use_repository
 *
 * @author Eugénio Chimuco
 */
class User_repository {

    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function createUser(Usuario $user) {
        $query = "INSERT INTO usuario (email, password, tipo)
                  VALUES (:email, :password, :tipo)";
        
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':password', $user->getPassword());
        $stmt->bindValue(':tipo', $user->getTipo());

        if ($stmt->execute()) {
            return $this->connection->lastInsertId();
        } else {

            echo "Erro ao inserir usuário";
            return false;
        }
    }
}
