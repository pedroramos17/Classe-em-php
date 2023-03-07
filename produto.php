<?php
    class Produto
    {
        var $Codigo;
        var $Descricao;
        var $Preco;
        var $Quantidade;
        var $porcDesconto;

        function ImprimeEtiqueta() {
            print 'Código: ' . $this->Codigo . '<br/>';
            print 'Descrição: ' . $this->Descricao . '<br/>';
         }

         function DescontarValor() {
            $valor = $this->Preco;

            $valorDescontado = $valor - ($porcDesconto / 100);
            echo "Valor atual: " . $valorDescontado . '<br />';
         }

         function AcrescentarValor() {
            $valor = $this->Preco;

            $valorAcrescentado = $valor + ($porcDesconto / 100);
        
            echo "Valor atual: " . $valorAcrescentado . '<br />';
         }

         function verificarPorcentagem() {

         }
    }
?>