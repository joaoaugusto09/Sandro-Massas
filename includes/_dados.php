<?php
/*
* Dados das categorias dos produtos
*/
$dadosCategorias = array(
    'pao'=>'Pão',
    'doces'=>'Doces',
    'bolos'=>'Bolos',
    'salgados'=>'Salgados',
    'bebidas'=>'Bebidas',
    'sorvete'=>'Sorvete'
);

$dadosProdutos = array(
    0=> array('nome'=>'Brigadeiro','imagem'=>'brigadeiro.jpg','preco'=>1.3,'descricao'=>'Descrição do Brigadeiro','categoria'=>'doces'),
    1=> array('nome'=>'Carolinas','imagem'=>'carolinas.jpg','preco'=>2.3,'descricao'=>'Descrição do Carolinas','categoria'=>'doces'),
    2=> array('nome'=>'Beijinho','imagem'=>'beijinho.png','preco'=>3.5,'descricao'=>'Descrição do Beijinho','categoria'=>'doces'),
    3=> array('nome'=>'Cajuzinho','imagem'=>'cajuzinho.jpg','preco'=>3.5,'descricao'=>'Descrição do Cajuzinho','categoria'=>'doces'),
    4=> array('nome'=>'Bomba','imagem'=>'bomba.jfif','preco'=>10,'descricao'=>'Descrição do Bomba','categoria'=>'doces'),
    5=> array('nome'=>'Branquinho de Churros','imagem'=>'branquinho-churros.jpg','preco'=>2.7,'descricao'=>'Descrição do Churros','categoria'=>'doces'),
    6=> array('nome'=>'Branquinho de Paçoquinha','imagem'=>'branquinho-pacoquinha.png','preco'=>2.7,'descricao'=>'Descrição do Paçoquinha','categoria'=>'doces'),
    7=> array('nome'=>'Brownies ','imagem'=>'brownies.jpg','preco'=>7.5,'descricao'=>'Descrição do Brownies','categoria'=>'doces'),
    8=> array('nome'=>'Churros','imagem'=>'churros.jpg','preco'=>5,'descricao'=>'Descrição do Doces','categoria'=>'doces'),
    9=> array('nome'=>'Lua de Mel','imagem'=>'lua-de-mel.jpg','preco'=>6,'descricao'=>'Descrição do Doce','categoria'=>'doces')
);

$dadosReceitas = array(
    0=> array('titulo'=>'Bolo de Chocolate','imagem'=>'bolochocolatee.png','descrição'=>'
    MASSA:
   4 ovos
   1 e 1/2 xícara (chá) de açúcar - (250g)
   3/4 xícara (chá) de óleo - (180ml)
   1/2 xícara de (chá) de água quente - (120ml)
   2 colheres (sopa) de cacau em pó - (40g)
   1 e 1/2 e xícara (chá) de farinha de trigo - (180g)
   2 colheres (sopa) de amido de milho - (40g)
   1 colher (chá) de fermento químico - (10g)
   1 colher (café) de bicarbonato - (5g)
   *Se não tiver bicarbonato, use então 1 colher de sopa de fermento (15g).
   
   CALDA CREMOSA
   1/2 xícara (chá) de leite integral - (125ml)
   1/2 caixinha de creme de leite - (100g)
   1 colher (sopa) de chocolate em pó - (20g)
   1 colher (sopa) de manteiga  - (15g)
   3 colheres (sopa) de açúcar - (60g)
   
   COBERTURA DE BRIGADEIRO 
   1 e 1/2 caixinha de leite condensado - (592g)
   2 colheres (sopa) de chocolate em pó - (40g)
   1 colher (sopa) manteiga - (15g)
   1 caixinha de creme de leite - (200g)
   ','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/QFMxJWh3mqE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    1=> array('titulo'=>'Bolo de Cenoura','imagem'=>'bolodecenoura.jpg','descrição'=>'MASSA:
    5 ovos
    2 e 1/2 xícaras (chá) cenoura crua e descascada - 400g (corte em rodelas para nivelar melhor na xícara, igual no vídeo)
    2 xícaras (chá) de açúcar - 360g
    3 xícaras (chá) de farinha de trigo - 360g
    3/4 xícara (chá) de óleo de soja - 180ml
    1 colher (sopa) fermento químico - 15g
    ** Farinha e açúcar tem o mesmo peso, porém volumes diferentes, por isso xícara diferente e peso igual. Não está errado, é isso mesmo.
    
    COBERTURA:
    1 xícara (chá) de açúcar - 180g
    1 xícara (chá) de achocolatado - 160g
    2 colheres de sopa de manteiga ou margarina - 40g
    6 colheres de sopa de leite - 75ml','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/z3Dyazls_VQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    2=> array('titulo'=>'Brigadeiro','imagem'=>'brigadeiroreceita.jpg','descrição'=>'INGREDIENTES:
    1 lata de leite condensado (395g)
    1 colh sopa de manteiga sem sal (20g)
    1 colh sopa de chocolate em pó 50% (15g)
    2 colh sopa de creme de leite (40g)
    Manteiga ou margarina para untar as mãos
    Granulado para enrolar
    Rendimento aproximado: 20 unidades de 20g cada.
    
    MODO DE PREPARO:
    1) Na panela, derreter a manteiga e misturar o chocolate em pó ;
    2) Desligar e misturar bem o leite condensado e o creme de leite ;
    3) Mexer o tempo todo até soltar do fundo da panela ;
    4) Desligar e continuar mexendo até parar de ferver ;
    5) Deixar esfriar e enrolar com as mãos untadas em manteiga ou margarina ;
    6) Passar no granulado.
    ','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/rh-SlxmZdzQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    3=> array('titulo'=>'Coxinha','imagem'=>'coxinhareceita.jpg','descrição'=>'Recheio:
    Cozinhe 1kg de peito de frango com os temperos de sua preferência (depois de cozido ele reduz para aproximadamente 800g)
    5 colhere (sopa) óleo ou azeite
    1 cebola
    3 dentes de alho
    1 colher de colorífico
    Temperos a gosto: sal, orégano, pimenta, páprica e cheiro verde.
    400g de requeijão consistente tipo catupiry (opcional)
    
    
    MASSA:
    250ml de leite
    250ml de caldo do cozimento do frango ou água
    2 xícaras (chá) de farinha | 240g
    1 cubo de caldo de galinha
    1 colher (sopa) de manteiga | 30g
    1 colher (sopa) de óleo | 15ml
    
    ','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/2QcLFcgp6XY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    4=> array('titulo'=>'Brownies','imagem'=>'brownie-simples.jpg','descrição'=>'INGREDIENTES:

    • 225g de manteiga derretida (1 xícara)
    • 3 ovos
    • 15ml de essência de baunilha (1 colher de sopa)
    • 15ml de café (1 colher de sopa)
    • 200g Açúcar (1 xícara)
    • 200g Açúcar mascavo claro (1 xícara)
    • 75g Cacau em pó (1/3 xícara)
    • 120g Farinha de trigo (1 xícara)
    • 6g de sal (1 colher de chá)
    • 160g chocolate meio amargo (1 xícara)
    • 100g nozes (1 xícara)','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/kMC5uFTtBpE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    5=> array('titulo'=>'Beijinho','imagem'=>'beijinhoreceita.jpg','descrição'=>'Ingredientes:
    1 lata de leite condensado (395 g)
    ½ xícara (chá) de coco seco ralado (40 g)
    ⅓ xícara (chá) de leite
    1 colher (sopa) de manteiga
    
    Modo de Preparo:
    Coloque o leite condensado, o leite e a manteiga numa panela pequena e leve ao fogo baixo. Mexa com uma espátula de silicone até a manteiga derreter.
    
    Acrescente o coco ralado e continue mexendo por cerca de 12 minutos, até o doce engrossar, para comer de colher – mexa raspando bem os fundos e lateral da panela com a espátula para não queimar. 
    
    Atenção para o ponto: o beijinho endurece mais depois de frio, ele deve sair da panela ainda bem cremoso.
    
    Para verificar, levante uma porção do beijinho com a espátula e deixe pingar sobre o doce da panela, ele não deve afundar.
    
    Transfira o beijinho para uma tigela e deixe esfriar em temperatura ambiente até a hora de servir.','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/FVXb8h6YM0A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    6=> array('titulo'=>'Stick de queijo com salsicha','imagem'=>'stick.png','descrição'=>'INGREDIENTES PARA A MASSA

    300 ml(s) leite
    1 colher(es) de sopa açúcar
    1/2 colher(es) de sopa sal
    1 colher(es) de sopa margarina
    1 colher(es) de sopa fermento biológico seco
    1/2 kg(s) farinha de trigo
    óleo para fritura
    
    INGREDIENTES PARA O RECHEIO
    
    9 fatia(s) muçarela
    9 unidade(s) salsicha
    molho de tomate a gosto
    
    INGREDIENTES PARA EMPANAR
    
    1 ovo
    1 copo(s) água
    farinha panko
    
    MODO DE PREPARO
    
    Em uma tigela ponha todos os ingredientes, menos a farinha, e misture bem. Em seguida vá acrescentando a farinha aos poucos, sove bem até obter uma massa lisinha, agora e só abrir com a ajuda de um rolo até ficar bem fina e cortar pedaços do tamanho de um palmo da mão por 3 três dedos. Coloque um pouco do molho em cima da salsicha, enrole com o queijo e coloque na ponta da massa aberta, enrole e feche as laterais. Agora, é só empanar passando no ovo e na farinha panko, leve ao oléo quente para fritar até dourar. Retire do óleo e sirva.','video'=>'<iframe width="956" height="538" src="https://www.youtube.com/embed/10b7k0OOBX8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    7=> array('titulo'=>'Churros','imagem'=>'churo.jpg','descrição'=>'INGREDIENTES:
        300 gramas de farinha de trigo comum 
        440 gramas de água 
        1 col de chá de sal fino 
        1 pitada de açúcar 
        1 colher de esc de baunilha 
        raspas da casca de uma laranja 
        1 ovo 
        ','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/R3jmHjdtmQo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'),
    8=> array('titulo'=>'Lua de Mel','imagem'=>'luademelreceita.jfif','descrição'=>'ngredientes:
        600g de farinha de trigo
        250ml de leite morno
        2 colheres de sopa de margarina
        2 colheres de sopa de açúcar
        2 ovos
        1 pacote de fermento seco para pães
        1 colher de café rasa de sal','video'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/hdVjNycrR9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'), 
    9=> array('titulo'=>'Bomba','imagem'=>'bombareceita.jpg','descrição'=>'Ingredientes da massa Pâte a Choux

    1 xícara (chá) de água ( 240 ml)
    6 colheres (sopa) de manteiga ( 120 g)
    1 colher (sopa) de açúcar ( 12 g)
    1 colher ( café ) de sal 
    1 xícara (chá) de farinha de trigo ( 140 g)
    3 ovos
    
    
    Ingredientes do recheio  Creme Patissier ou Creme de Confeiteiro
    
    2 copos (tipo requeijão) de leite ( 500 g)
    2 colheres (chá) de essência de baunilha ( 10 ml)
    3 gemas 
    1 xícara (chá) de açúcar ( 180 g)
    ¼ xícara (chá) de amido de milho ( 38 g)
    2 colheres (sopa) de manteiga ( 40 g)
    
    Ingrediente para  pincelar
    
    1 ovo 
    
    Ingredientes da cobertura 
    
    150 g de chocolate ao leite ou cobertura fracionada sabor chocolate ao leite 
    chocolate branco a gosto ( para decorar)
    granulado de chocolate a gosto ( para decorar)','video'=>'<iframe width="956" height="538" src="https://www.youtube.com/embed/ohd_1zoa_wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>')

        );
?>