<?php

menu();

function menu(): void
{

   $continuar = true;

   do {


      print("\033[32m▗▄▄▄▖▗▄▄▄  ▗▄▄▖▗▄▄▖ ▗▄▄▄▖▗▖  ▗▖▗▖ ▗▖ ▗▄▖     ▗▄▄▄  ▗▄▖      ▗▄▄▖ ▗▄▖ ▗▄▄▄▖▗▖  ▗▖ ▗▄▖ \n");
      print("  █    █  ▐▌   ▐▌ ▐▌  █  ▐▛▚▖▐▌▐▌ ▐▌▐▌ ▐▌    ▐▌  █▐▌ ▐▌    ▐▌   ▐▌ ▐▌  █   ▝▚▞▘ ▐▌ ▐▌\n");
      print("  █    █  ▐▌▝▜▌▐▛▀▚▖  █  ▐▌ ▝▜▌▐▛▀▜▌▐▌ ▐▌    ▐▌  █▐▛▀▜▌    ▐▌   ▐▛▀▜▌  █    ▐▌  ▐▛▀▜▌\n");
      print("  █  ▗▄█▄▖▝▚▄▞▘▐▌ ▐▌▗▄█▄▖▐▌  ▐▌▐▌ ▐▌▝▚▄▞▘    ▐▙▄▄▀▐▌ ▐▌    ▝▚▄▄▖▐▌ ▐▌▗▄█▄▖▗▞▘▝▚▖▐▌ ▐▌\n\n");

      print("Escolha a modelidade que você quer jogar?\n\n");

      print("[1] Mega-Sena\n");
      print("[2] Quina\n");
      print("[3] Lotomania\n");
      print("[4] Lotofácil\n\033[31m");
      print("[5] Sair\n\033[0m");

      $opcao = trim(readline());

      switch ($opcao) {
         case "1":
            print("Você escolheu a Mega Sena!\n");
            sleep(3);
            echo "\033[2J\033[;H";
            MegaSena();
            break;

         case "2":
            print("escolhido foi Quina\n");
            sleep(3);
            echo "\033[2J\033[;H";
            Quina();
            break;

         case "3":
            print("escolhido foi Lotomania\n");
            sleep(3);
            echo "\033[2J\033[;H";
            Lotomania();
            break;

         case "4":
            print("escolhido foi Lotofacil\n");
            sleep(3);
            echo "\033[2J\033[;H";
            Lotofacil();
            break;

         case "5":
            print("Você saiu da caixa!\n");
            $continuar = false;
            break;

         default:
            $opcao = trim(readline(("Escolha uma opção válida:\n")));
            break;
      }
   } while ($continuar);
}

function MegaSena(): void
{

   print("\033[32m███    ███ ███████  ██████   █████      ███████ ███████ ███    ██  █████  \n");
   print("████  ████ ██      ██       ██   ██     ██      ██      ████   ██ ██   ██ \n");
   print("██ ████ ██ █████   ██   ███ ███████     ███████ █████   ██ ██  ██ ███████ \n");
   print("██  ██  ██ ██      ██    ██ ██   ██          ██ ██      ██  ██ ██ ██   ██ \n");
   print("██      ██ ███████  ██████  ██   ██     ███████ ███████ ██   ████ ██   ██ \n");

   do{
   
   $quantidadeJogos = readline("Quantos jogos deseja: ");
   
   }while(0 < $quantidadeJogos);

   do{
      
      $quantidadeDezenas = readline("Quantas dezenas cada jogo (entre 6 e 20): ");
   
   }while (6 <= $quantidadeDezenas & $quantidadeDezenas <= 20);
      
   
   for ($i = 0; $i <  $quantidadeJogos; $i++) {
      $dezenas = SorteioEVerificacao($quantidadeDezenas, 1, 60);
      print("\nOs seus números sorteados foram:\n");
      foreach ($dezenas as $num) {
         echo $num . "    ";
      }
      echo "\n";
      $continuar = readline();
   }

   print("O valor final foi de seus jogos:\nR$ " . number_format(tabelaValoresMega($quantidadeDezenas) * $quantidadeJogos, 2, ",", ".")  . " reais\n");
   sleep(4);
   echo "\033[2J\033[;H";
}

function tabelaValoresMega($quantidadeDezenas)
{

   $tabela = [
      6 => 6,
      7 => 420,
      8 => 168,
      9 => 504,
      10 => 1260,
      11 => 2772,
      12 => 5544,
      13 => 10296,
      14 => 18018,
      15 => 30030,
      16 => 48048,
      17 => 74256,
      18 => 111384,
      19 => 162792,
      20 => 232560
   ];

   return $tabela[$quantidadeDezenas];
}

function Quina(): void
{

   print("\033[32m ██████  ██    ██ ██ ███    ██  █████ \n");
   print("██    ██ ██    ██ ██ ████   ██ ██   ██ \n");
   print("██    ██ ██    ██ ██ ██ ██  ██ ███████ \n");
   print("██ ▄▄ ██ ██    ██ ██ ██  ██ ██ ██   ██ \n");
   print(" ██████   ██████  ██ ██   ████ ██   ██ \n");
   print("    ▀▀                                 \n");

   do{
   
   $quantidadeJogos = readline("Quantos jogos deseja: ");
   
   }while(0 < $quantidadeJogos);
   
   do{
      
      $quantidadeDezenas = readline("Quantas dezenas cada jogo (entre 5 e 15): ");
   
   }while (5 <= $quantidadeDezenas & $quantidadeDezenas <= 15);

   for ($i = 0; $i <  $quantidadeJogos; $i++) {
      $dezenas = SorteioEVerificacao($quantidadeDezenas, 1, 80);
      print("\nOs seus números sorteados foram:\n");
      foreach ($dezenas as $num) {
         echo $num . "    ";
      }
      echo "\n";
      $continuar = readline();
   }

   print("O valor final foi de seus jogos:\nR$ " . number_format(tabelaValoresQuina($quantidadeDezenas) * $quantidadeJogos, 2, ",", ".")  . " reais\n");
   sleep(4);
   echo "\033[2J\033[;H";
}

function tabelaValoresQuina($quantidadeDezenas)
{

   $tabela = [
      5 => 3,
      6 => 18,
      7 => 63,
      8 => 168,
      9 => 378,
      10 => 756,
      11 => 1386,
      12 => 2376,
      13 => 3861.50,
      14 => 6006,
      15 => 9009
   ];

   return $tabela[$quantidadeDezenas];
}

function Lotomania(): void
{

   print("\033[32m██       ██████  ████████  ██████  ███    ███  █████  ███    ██ ██  █████  \n");
   print("██      ██    ██    ██    ██    ██ ████  ████ ██   ██ ████   ██ ██ ██   ██ \n");
   print("██      ██    ██    ██    ██    ██ ██ ████ ██ ███████ ██ ██  ██ ██ ███████ \n");
   print("██      ██    ██    ██    ██    ██ ██  ██  ██ ██   ██ ██  ██ ██ ██ ██   ██ \n");
   print("███████  ██████     ██     ██████  ██      ██ ██   ██ ██   ████ ██ ██   ██ \n");



   do{
   
      $quantidadeJogos = readline("Quantos jogos deseja: ");
      
   }while(0 < $quantidadeJogos);

   $quantidadeDezenas = 50;

   for ($i = 0; $i <  $quantidadeJogos; $i++) {
      $dezenas = SorteioEVerificacao($quantidadeDezenas, 0, 99);
      print("\nOs seus números sorteados foram:\n");
      foreach ($dezenas as $num) {
         echo $num . "    ";
      }
      echo "\n";
      $continuar = readline();
   }

   print("O valor final foi de seus jogos:\nR$ " . number_format(1 * $quantidadeJogos, 2, ",", ".")  . " reais\n");
   sleep(4);
   echo "\033[2J\033[;H";
}




function Lotofacil(): void
{
   print("\033[32m██       ██████  ████████  ██████  ███████  █████   ██████ ██ ██ 
██      ██    ██    ██    ██    ██ ██      ██   ██ ██      ██ ██ 
██      ██    ██    ██    ██    ██ █████   ███████ ██      ██ ██ 
██      ██    ██    ██    ██    ██ ██      ██   ██ ██      ██ ██ 
███████  ██████     ██     ██████  ██      ██   ██  ██████ ██ ███████ \n");


   do{
   
   $quantidadeJogos = readline("Quantos jogos deseja: ");
   
   }while(0 < $quantidadeJogos);
   
   do{
      
      $quantidadeDezenas = readline("Quantas dezenas cada jogo (entre 15 e 20): ");
   
   }while (15 <= $quantidadeDezenas & $quantidadeDezenas <= 20);

   for ($i = 0; $i <  $quantidadeJogos; $i++) {
      $dezenas = SorteioEVerificacao($quantidadeDezenas, 1, 25);
      print("\nOs seus números sorteados foram:\n");
      foreach ($dezenas as $num) {
         echo $num . "    ";
      }
      echo "\n";
      $continuar = readline();
   }

   print("O valor final foi de seus jogos:\nR$ " . number_format(tabelaValoresLotofacil($quantidadeDezenas) * $quantidadeJogos, 2, ",", ".")  . " reais\n");
   sleep(4);
   echo "\033[2J\033[;H";
}

function tabelaValoresLotofacil($quantidadeDezenas)
{

   $tabela = [
      15 => 3.50,
      16 => 56,
      17 => 476,
      18 => 2856,
      19 => 13566,
      20 => 54264

   ];

   return $tabela[$quantidadeDezenas];
}

function SorteioEVerificacao($quantidadeDezenas, $min, $max)
{

   $numeros = [];
   $numero = 0;
   $continuar = true;
   for ($i = 0; $i < $quantidadeDezenas; $i++) {
      $numero = rand($min, $max);

      do {
         if (!in_array($numero, $numeros)) {
            $numeros[] = $numero;
            $continuar = false;
         } else {
            $continuar = true;
            $numero = rand($min, $max);
         }
      } while ($continuar);
   }
   sort($numeros);

   return $numeros;
}
