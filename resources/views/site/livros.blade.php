@extends('site.layouts.basico')
@section('conteudo')

<div class="col-100">
    <div class="slider-principal">
        <img src="./img/livraria.jpg">
    </div>
</div>

<div class="col-100 texto"><br><br>
    <div class="content texto-destaque">
        <h1>Indicações de livros que podem auxiliar o entendemento</h1>
    </div>
</div>
<main class="col-100 indicacoes">
    <div class="content livro">
        <div class="col-3 superior2">
            <h3><strong>Enfrentando o TOD: 40 questões para lidar com o transtorno opositivo desafiador</strong></h3>
            <img src="./img/enfrentando o tod.jpg">
            <a href='https://www.amazon.com.br/Enfrentando-TOD-transtorno-opositivo-desafiador/dp/6556160792/ref=asc_df_6556160792/?tag=googleshopp00-20&linkCode=df0&hvadid=379715971857&hvpos=&hvnetw=g&hvrand=5945538272849117613&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=20103&hvtargid=pla-1316166196724&psc=1' target="_blank"><button>Compre aqui!</button></a>

        </div>
        <div class="col-3 superior2">
            <h3><strong>Manual dos transtornos escolares</strong></h3>
            <img src="./img/manual.jpg">
            <a href="https://www.amazon.com.br/Manual-transtornos-escolares-Gustavo-Teixeira/dp/8576846403" target="_blank"><button>Compre aqui!</button></a>
        </div>
        <div class="col-3 superior2">
            <h3><strong>CRIANÇAS DESAFIADORAS</strong></h3>
            <img src="./img/criancasdesafiadoras.jpg">
            <a href="https://www.amazon.com.br/CRIAN%C3%87AS-DESAFIADORAS-LUCIANA-BRITES/dp/8545203616/ref=asc_df_8545203616/?tag=googleshopp00-20&linkCode=df0&hvadid=379818445901&hvpos=&hvnetw=g&hvrand=3582270740875927473&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=20103&hvtargid=pla-846039210187&psc=1" target="_blank"><button>Compre aqui</button></a> 
        </div>
        <div class="col-3 inferior2">
            <h3><strong>Como enfrentar o Transtorno Opositivo Desafiador na escola</strong></h3>
            <img src="./img/desafiador na escola.jpg">
            <a href="https://www.estantevirtual.com.br/thebookonthetable/alexandre-violin-garcia-enide-como-enfrentar-o-transtorno-opositivo-desafiador-na-escola-3415057598?gclid=CjwKCAiArNOeBhAHEiwAze_nKFidzXxRZYPFDhSqGHmT5AJsxe-L2VxMAHLOZYqpCSH32YaMr-MvARoCzqEQAvD_BwE" target="_blank"><button>Compre aqui!</button></a>

        </div>
        <div class="col-3 inferior2">
            <h3><strong>Técnicas e recursos terapêuticos: 100 ideias para estimular diálogos com crianças e adolescentes</strong></h3>
            <img src="./img/tecnicas.jpg">
            <a href="https://www.amazon.com.br/T%C3%A9cnicas-recursos-terap%C3%AAuticos-estimular-adolescentes/dp/6556161888/ref=asc_df_6556161888/?tag=googleshopp00-20&linkCode=df0&hvadid=379699382131&hvpos=&hvnetw=g&hvrand=8560983819778510072&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=20103&hvtargid=pla-1640761966777&psc=1" target="_blank"><button>Compre aqui!</button></a>

        </div>
        <div class="col-3 superior2">
            <h3><strong>TOD - Transtorno Opositivo Desafiador</Obj></strong></h3>
            <img src="./img/tod.jpg">
            <a href="https://www.amazon.com.br/TOD-TRANSTORNO-Ana-Paula-Coutinho/dp/B0B7QWPLS4" target="_blank"><button>Compre aqui!</button></a>

        </div>
    </div>
</main>
<footer>
    <div class="col-100 footer">
        <div class="content menu2">
            <div class="col-4 1 li1">
                <h3><b>Menu</b></h3>
                <li><a href="index.html"><img src="img/home.png"></a></li>
                <li><a href="livros.html"><img src="img/open-book.png"></a></li>
                <li><a href="video.html"><img src="img/film.png"></a></li>
                <li><a href="arquivos.html"><img src="img/pasta-de-arquivo.png"></a></li>
            </div>
    <div class="col-4">
        <h3><b>Sobre</b></h3>
        <p>Com objetivo de trazer mais visibilidade para o Transtorno Opositivo Desafiador, a página conta com indicações de livros, artigos, vídeos e atividades. Visamos poder ajudar no entendimento dos familiares e estimular a construção de laços afetivos entre ambos.</p>
    </div>
    
    <div class="col-4">
        <h3><b>Fale conosco</b></h3>
        <p>
            Tem alguma sugestão? ou encontrou algo que precisa ser revisado? ou tem interesse de deixar um 
            feedback? 
        </p>

        <p>Entre em contato conosco através do E-mail:</p>
        <p class="emailico">Adapta.Edu@outlook.com<p>

    </div>
</div>
</div>
</footer>
    <script type="text/javascript" src="./js/codejquery.js"></script>
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/slick.main.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>				
</body>
</html>

 @endsection
