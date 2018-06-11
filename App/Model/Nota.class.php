<?php 

require_once('Conexao.class.php');
/**
* 
*/
class Nota{
    

private $nomenota;
private $datanota;
private $valornota;
private $aluno_idaluno;
private $serie_idserie;
private $serie_disciplina_iddisciplina;


public function getNomenota()
{
    return $this->nomenota;
}   

public function setNomenota($nomenota)
{   
    return $this->nomenota = $nomenota;
}   

public function getDatanota()
{
    return $this->datanota;
}

public function setDatanota($datanota)
{
    return $this->datanota = $datanota;
}

public function getValornota()
{
    return $this->valornota;
}

public function setValornota($valornota)
{
    return $this->valornota = $valornota;
}

public function getAluno_idaluno()
{
    return $this->aluno_idaluno;
}

public function setAluno_idaluno($aluno_idaluno)
{
    return $this->aluno_idaluno = $aluno_idaluno;
}

public function getSerie_idserie()
{
    return $this->serie_idserie;
}

public function setSerie_idserie($serie_idserie)
{
    return $this->serie_idserie = $serie_idserie;
}

public function getSerie_disciplina_iddisciplina()
{
    return $this->serie_disciplina_iddisciplina;
}

public function setSerie_disciplina_iddisciplina($serie_disciplina_iddisciplina)
{
    return $this->serie_disciplina_iddisciplina = $serie_disciplina_iddisciplina;
}


    public function InserirNotas($idaluno, $idserie, $iddisciplina, $nomenota, $valornota, $datanota){

       $recebe = new Conexao();

       $query = "INSERT INTO nota (nomenota, valornota, datanota, aluno_idaluno, serie_idserie, disciplina_iddisciplina) VALUES ('$nomenota', '$valornota', '$datanota', '$idaluno', '$idserie', '$iddisciplina')";
       $recebe->ExecutaSQL($query);
   
    }

  
      public function ListaNotasAluno($alu, $ser){

          $dados = new Conexao();

          $query = "SELECT nota.valornota, nota.nomenota, disciplina.nomedisciplina FROM nota, disciplina WHERE nota.disciplina_iddisciplina = disciplina.iddisciplina AND aluno_idaluno = '$alu' AND serie_idserie = '$ser'";
          $dados->ExecutaSQL($query);
          $lista = $dados->ListarDados();

          return $lista;
        }

}

 ?>