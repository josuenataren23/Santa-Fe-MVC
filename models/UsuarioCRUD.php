<?php
    class CrudUser{
        private $conn;
        //constructor
        public function __construct($conn){
            $this->conn = $conn;
        }
        //Create
        public function create($data){
            //columns: id, NombreUsuario, Contraseña, Rol, CreadoEn, FotoPerfilRuta
            $query = "INSERT INTO Usuarios (NombreUsuario, Contraseña, Rol, CreadoEn, FotoPerfilRuta) VALUES (:NombreUsuario, :Contraseña, :Rol, :CreadoEn, :FotoPerfilRuta)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':NombreUsuario', $data['NombreUsuario']);
            $stmt->bindParam(':Contraseña', $data['Contraseña']);
            $stmt->bindParam(':Rol', $data['Rol']);
            $stmt->bindParam(':CreadoEn', $data['CreadoEn']);
            $stmt->bindParam(':FotoPerfilRuta', $data['FotoPerfilRuta']);
            $stmt->execute();
        }

        //Read
        public function read(){
            $query = "SELECT nombreUsuario, Rol, FotoPerfilRuta FROM Usuarios";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //Update
        public function update($data){
            $query = "UPDATE Usuarios SET NombreUsuario = :NombreUsuario, Contraseña = :Contraseña, Rol = :Rol, CreadoEn = :CreadoEn, FotoPerfilRuta = :FotoPerfilRuta WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':NombreUsuario', $data['NombreUsuario']);
            $stmt->bindParam(':Contraseña', $data['Contraseña']);
            $stmt->bindParam(':Rol', $data['Rol']);
            $stmt->bindParam(':CreadoEn', $data['CreadoEn']);
            $stmt->bindParam(':FotoPerfilRuta', $data['FotoPerfilRuta']);
            $stmt->bindParam(':id', $data['id']);
            $stmt->execute();
        }

        //Delete
        public function delete($data){
            $query = "DELETE FROM Usuarios WHERE id = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', $data['id']);
            $stmt->execute();
        }   
    }