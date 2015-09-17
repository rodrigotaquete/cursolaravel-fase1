<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Blog extends Controller
{
    public function index()
    {
        $notes = [
            ['title' => "Internacional/RS 2 x 1 Corinthians/SP",
             'text' => "Vencer o líder já seria legal para o Inter. Mas bater o melhor time do Brasileirão de virada, voltar a sonhar com a Libertadores e ainda quebrar uma invencibilidade de 17 jogos do rival é excelente. Com gols de Réver e Valdivia, o Colorado fez 2 a 1 no Corinthians, no Beira-Rio, na noite desta quarta-feira, pela 26ª rodada, com atuação contundente. Ao Timão, resta lamentar o fim da série invicta de quase três meses. Se não perdesse do Inter, igualaria marcas históricas de São Paulo, em 2008, e Atlético-PR, em 2004. Ao menos a situação na tabela continua confortável.",
             'result' => "derrota",
             'date' => "17 de setembro de 2015"],
            ['title' => "Corinthians/SP 3 x 0 Joinvile/SC",
             'text' => "Vencer em casa um time que está na zona do rebaixamento desde o início do Brasileirão é obrigação para quem quer ser campeão. O Corinthians sabia disso e não vacilou. Com um 3 a 0 incontestável, o Timão bateu o Joinville e se manteve tranquilo na liderança da competição - abriu cinco pontos para o Atlético-MG, que empatou em 1 a 1 com o Cruzeiro. Já o JEC segue como vice-lanterna, à frente apenas do Vasco.",
                'result' => "vitoria",
                'date' => "13 de setembro de 2015"],
            ['title' => "Corinthians/SP 1 x 1 Gremio/RS",
             'text' => "Ainda são de Corinthians e Grêmio as defesas menos vazadas do Campeonato Brasileiro. Mas agora com um gol a mais na conta. Na noite desta quarta-feira, o líder da competição levou susto dentro de sua arena ao sofrer gol de Bobô (aquele mesmo que o próprio clube paulista revelou), no segundo tempo, mas arrancou empate por 1 a 1, pouco depois, com Renato Augusto.",
                'result' => "empate",
                'date' => "9 de setembro de 2015"],
            ['title' => "Palmeiras/SP 3 x 3 Corinthians/SP",
             'text' => "Um Dérbi para ser lembrado por muito tempo. Palmeiras e Corinthians fizeram um jogaço neste domingo, na arena palmeirense, pela 23ª rodada do Brasileirão. O empate por 3 a 3 poderia ter tido um placar ainda maior, tamanho o volume de jogo e as chances criadas pelas duas equipes.  O time da casa esteve três vezes à frente no placar (graças a Lucas, Dudu e Robinho), mas saiu de campo com apenas um ponto. Por três vezes, os visitantes buscaram o empate, mesmo quando estava pior, como foi o caso do último gol, marcado por Vagner Love aos 33 minutos do segundo tempo. Os outros gols corintianos foram marcados por Guilherme Arana e Amaral (contra).",
                'result' => "empate",
                'date' => "6 de setembro de 2015"],
            ['title' => "Corinthians/SP 2 x 0 Fluminense/RJ",
             'text' => "Dia de festa na Arena Corinthians. Antes do jogo, a torcida comemorou os 105 anos do clube com bonitas homenagens a ex-jogadores na arquibancada. A euforia não cessou, e o time deu motivos para isso. O Timão venceu o Fluminense por 2 a 0, com gols de Marciel e Ralf, e viu seu concorrente ao título - Atlético-MG, se distanciar na tabela. O Tricolor sofreu com um gol mal anulado pelo árbitro no início do segundo tempo, quando o placar estava 1 a 0 para os anfitriões. Mas não teve jeito. Aniversário foi completo, e os alvinegros mantém cada vez mais vivo o sonho do hexa no Campeonato Brasileiro.",
                'result' => "vitoria",
                'date' => "2 de setembro de 2015"],
        ];

        return view('blog.index', compact('notes'));
    }
}
