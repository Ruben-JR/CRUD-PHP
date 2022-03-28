<?php
    include "validar.php";
    
    //Realizando mensagem de alertas
        function mensagem($texto, $tipo) {
            echo "<div class='alert alert-$tipo' role='alert'>
                    $texto
                </div>";
        }

    //formatar data na hora de listar
        function mostra_data($data){
            $d = explode('-', $data);
            $escreve = $d[2] ."/" .$d[1] ."/" .$d[0];
            return $escreve;
        }

        //Receber nome de uma foto e trocar nome depois realizar o upload para a pasta img do projeto
        function mover_foto($imagem){ 
            $vtipo = explode("/", $imagem['type']);
            $tipo = $vtipo[0] ?? ' ';
            $extensao = "." .$vtipo['1'] ?? ' ';
            if(!$imagem['error'] && $imagem['size'] <= 500000 && $tipo == "image"){
                $nome_arguivo = date(Ymdhms) . $extensao;
                move_uploaded_file($imagem['tmp_name'], "img/". $nome_arguivo);
                return $nome_arguivo;
            }
            else{
                return 0;
            }
        }

        function mostrar_foto($foto){
            if($foto != NULL){ 
                echo $foto ['foto']; 
                $mostra = "img src='img/$foto'"; 
            } 
            else{
                $mostra = " ";
            }
        }

        function clear($conexao, $texto_puro){
            $texto = mysqli_real_escape_string($conexao, $texto_puro);
            $texto = htmlspecialchars($texto);
            return $texto;
        }
?>