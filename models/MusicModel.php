<?php
class MusicModel {
    private $pdo;
    private $table_name = "musicas";

    public $id;
    public $nome;
    public $duracao;


    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Método para criar uma musica
    public function inserirmusica($nome, $duracao, $genero,$id_user)
    {

        $sql = "INSERT INTO " . $this->table_name .  " (nome, duracao, genero, id_user) VALUES (?, ?, ?, ?) ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $duracao, $genero, $id_user]);
    }
    public function listarMusicas()
    {
        $sql = "SELECT * FROM " . $this->table_name;
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }

    public function listarMusicasPorUserId($id_user)
    {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id_user = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_user]);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
    public function deletarMusica($id_musica)
    {
        $sql = "DELETE FROM " . $this->table_name . " WHERE id_musica = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_musica]);
    }

    public function atualizarMusica($id_musica,$nome,$duracao,$genero)
    {
        if($nome != ""){
            $sql = "UPDATE " . $this->table_name . " SET nome = ? WHERE id_musica = ? ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$nome,$id_musica]);
        }
    
        if($duracao != ""){
            $sql = "UPDATE " . $this->table_name . " SET duracao = ? WHERE id_musica = ? ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$duracao,$id_musica]);
        }
        
        if($genero != ""){
            $sql = "UPDATE " . $this->table_name . " SET genero = ? WHERE id_musica = ? ";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$genero,$id_musica]);
        }
    }
}
?>
