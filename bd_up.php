<?php

$bd = new SQLite3("sistemas.db");

$sql = "DROP TABLE IF EXISTS opesis";

if ($bd->exec($sql))
    echo "\nTabela de sistemas deletada\n";


$sql = "CREATE TABLE opesis (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )
";

if ($bd->exec($sql))
    echo "\nTabela de sistemas criada\n";
else
    echo "\nErro ao criar tabela de sistemas\n";

$sql = "INSERT INTO opesis (titulo, poster, sinopse, nota) VALUES (
    'Fedora',
    'https://fedoraproject.org/w/uploads/2/2d/Logo_fedoralogo.png',
    'O Fedora (anteriormente Fedora Core) é uma distribuição Linux desenvolvida pelo Projeto Fedora,
     suportado pela comunidade, e de propriedade da Red Hat. O Fedora contém software distribuído sob
      uma licença livre e de código aberto e pretende estar na vanguarda de tais tecnologias.
      O Fedora tem uma reputação de se concentrar na inovação, integrando novas tecnologias desde o início
      e trabalhando em estreita colaboração com as comunidades Linux upstream.',
    7.5
)";

if ($bd->exec($sql))
    echo "\nTabela de sistemas criada\n";
else
    echo "\nErro ao criar tabela de sistemas\n";


    $sql = "INSERT INTO opesis (titulo, poster, sinopse, nota) VALUES (

        'Parrot OS',
        'https://s7p9r4y4.rocketcdn.me/wp-content/uploads/2020/02/Parrot-OS-4.8-beta-releases-640x367-1.png',
        'Parrot (anteriormente Parrot Security OS) é uma distribuição baseada em Debian e orientada
         à segurança, com uma coleção de utilitários projetados para testes de penetração, análise forense
          de computadores, engenharia reversa, hacking, privacidade, anonimato e criptografia. O produto, 
          desenvolvido pela Frozenbox, vem com o MATE como o ambiente de desktop padrão.',
        8.3
    )";
    
    if ($bd->exec($sql))
        echo "\nTabela de sistemas criada\n";
    else
        echo "\nErro ao criar tabela de sistemas\n";
    
    $sql = "INSERT INTO opesis (titulo, poster, sinopse, nota) VALUES (
        'Solus OS',
        'https://getsol.us/imgs/logo.jpg',
        'Solus é uma distribuição Linux construída do zero. Ele usa uma versão
         bifurcada do gerenciador de pacotes PiSi, e um ambiente de desktop personalizado
        desenvolvido internamente. A área de trabalho do Budgie, que
        pode ser configurada para emular a aparência da área de trabalho do GNOME 2, é
        totalmente integrada à pilha do GNOME. A distribuição está disponível apenas para
             computadores de 64 bits.
    ',
        8.5
    )";
    
    if ($bd->exec($sql))
        echo "\nTabela de sistemas criada\n";
    else
        echo "\nErro ao criar tabela de sistemas\n";
    
    $sql = "INSERT INTO opesis (titulo, poster, sinopse, nota) VALUES (
        'Ubuntu',
        'https://assets.ubuntu.com/v1/8dd99b80-ubuntu-logo14.png',
        'O Ubuntu é um sistema operacional Linux completo para desktop,
         disponível gratuitamente com suporte comunitário e profissional. A comunidade
          Ubuntu baseia-se nas idéias consagradas no Manifesto do Ubuntu: que o software deve estar
           disponível gratuitamente, que as ferramentas de software devem ser usadas pelas pessoas no
            idioma local e apesar de qualquer deficiência, e que as pessoas devem ter a liberdade de
        personalizar e altere o software da maneira que achar melhor.',
        9.2
    )";
    
    if ($bd->exec($sql))
        echo "\nTabela de sistemas criada\n";
    else
        echo "\nErro ao criar tabela de sistemas\n";
    

?>
