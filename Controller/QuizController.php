<?php
require_once __DIR__."/../model/QuizModel.php";

class QuizController{
    private $quizModel;

    public function __construct($PDO){
        $this->quizModel = new QuizModel($PDO);
    }

    public function criarPergunta($texto_pergunta, $resposta_correta, $opcao_1,$opcao_2,$opcao_3,$opcao_4,$id_user){
        $this->quizModel->criarPergunta($texto_pergunta, $resposta_correta, $opcao_1,$opcao_2,$opcao_3,$opcao_4, $id_user);
    }
    public function listarPerguntasId(){
        return $this->quizModel->listarPerguntasId();
    }
    public function listarUserId($id_user){
        return $this->quizModel->listarPerguntasId($id_user);
    }
    public function listarPerguntaPorId($id){
        return $this->quizModel->listarPerguntaPorId($id);
    }
    public function criarJogo($total_perguntas,$pergunta_atual_id,$pontuacao_time_1,$perguntas_restantes,$id_user){
        $perguntas_restantes2 = str_replace('"', "'", json_encode($perguntas_restantes));
        return $this->quizModel->criarJogo($total_perguntas,$pergunta_atual_id,$pontuacao_time_1,$perguntas_restantes2,$id_user);
    }
    public function listarJogoPorId($id){
        $jogo = $this->quizModel->listarJogoPorId($id)[0];
        $jogo["perguntas_restantes"] = json_decode(str_replace("'", '"', $jogo["perguntas_restantes"]),true);
        return $jogo;
    }
    public function atualizarJogo($id, $pergunta_atual_id, $pontuacao_time_1, $perguntas_restantes){
        $perguntas_restantes2 = str_replace('"',"'",json_encode($perguntas_restantes));
        $this->quizModel->atualizarJogo($id, $pergunta_atual_id, $pontuacao_time_1, $perguntas_restantes2);
    }
    public function criarResultado($pontuacao_final_time_1, $id_user) {
        return $this->quizModel->criarResultado($pontuacao_final_time_1, $id_user);
    }
    
    public function getLatestResultadoId(){
        return $this->quizModel->getLatestResultadoId();
    }
    public function listarResultadoPorId($id){
        return $this->quizModel->listarResultadoPorId($id);
    }
}