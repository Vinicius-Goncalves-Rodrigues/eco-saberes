<?php

class QuizModel{
    
    private $PDO;

    public function __construct($PDO){
        $this->PDO = $PDO;
    }
    
    public function criarPergunta($texto_pergunta, $resposta_correta, $opcao_1,$opcao_2,$opcao_3,$opcao_4,$id_user){
        $sql = "INSERT INTO quiz(tipo,texto_pergunta, resposta_certa, opcao_1,opcao_2,opcao_3,opcao_4,id_user) VALUES ('pergunta',?,?,?,?,?,?,?)";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute([$texto_pergunta, $resposta_correta, $opcao_1,$opcao_2,$opcao_3,$opcao_4,$id_user]);
    }
    public function listarPerguntasId(){
        $sql = "SELECT id FROM quiz WHERE tipo = 'pergunta'";
        $stmt = $this->PDO->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listarUserId($id_user){
        $sql = "SELECT id FROM quiz  WHERE id_user = ?";
        $stmt = $this->PDO->prepare($sql); // ✅ Correto
        $stmt->execute([$id_user]);
        return $stmt->fetchALL(PDO::FETCH_ASSOC);
    }
    
    public function listarPerguntaPorId($perguntaId) {
        if (!$perguntaId) {
            throw new Exception("ID da pergunta inválido.");
        }
    
        $stmt = $this->PDO->prepare("SELECT * FROM quiz WHERE id = ? AND tipo = 'pergunta'"); // ✅ Correto
        $stmt->execute([$perguntaId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    
    public function criarJogo($total_perguntas,$pergunta_atual_id,$pontuacao_time_1,$perguntas_restantes,$id_user){
        $sql = "INSERT INTO quiz(tipo,total_perguntas,pergunta_atual_id,pontuacao_time_1,perguntas_restantes,id_user) VALUES ('jogo',?,?,?,?,?)";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute([$total_perguntas,$pergunta_atual_id,$pontuacao_time_1,$perguntas_restantes,$id_user]);
        $sql = "SELECT * FROM quiz WHERE tipo = 'jogo' ORDER BY id DESC";
        $stmt = $this->PDO->query($sql);
        $selected = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id = $selected[0]['id'];
        return $id;
    }
    public function atualizarJogo($id, $pergunta_atual_id, $pontuacao_time_1, $perguntas_restantes){
        $sql = "UPDATE quiz SET pergunta_atual_id = ?, pontuacao_time_1 = ?, perguntas_restantes = ? WHERE id = ?";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute([$pergunta_atual_id, $pontuacao_time_1, $perguntas_restantes, $id]);
    }
    public function listarJogoPorId($id){
        $sql = "SELECT * FROM quiz WHERE id = $id";
        $stmt = $this->PDO->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function criarResultado($pontuacao_final_time_1, $id_user){
        $sql = "INSERT INTO quiz(pontuacao_final_time_1, id_user) VALUES (?,?)";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute([$pontuacao_final_time_1,$id_user]);
    }
    public function getLatestResultadoId() {
        $sql = "SELECT * FROM quiz WHERE tipo = 'resultado' ORDER BY id DESC LIMIT 1";
        $stmt = $this->PDO->query($sql);
        $selected = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $selected ? $selected['id'] : null;
    }
    
    public function listarResultadoPorId($id){
        if ($id === null) {
            // Handle the case where id is null (return null, throw error, etc.)
            return null;
        }
        
        $sql = "SELECT * FROM quiz WHERE id = $id AND tipo = 'resultado'";
        $stmt = $this->PDO->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}