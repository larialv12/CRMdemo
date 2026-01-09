
<style>
	#painel-sugestoes {
		display: flex;
		flex-wrap: wrap;

	}

	.dashboard-stat {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
        min-height: 180px; 

    }

	.dashboard-stat .more,
	.more {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		flex: 1;
		height: auto;
		font-size: 12px;
	}

	.dashboard-stat .more p,
	.desc p {
		padding: 0 5px;
		margin: 5px 0;
		font-size: 15px;
		text-align: start;
		height: 100%;
		text-transform: none;
	}

	.dashboard-stat .tile-object,
	.tile-object {
		display: flex;
		align-items: center;
		justify-content: space-between;
		padding: 10px;
		margin-top: auto;
	}

	.dashboard-stat .tile-object .name i,
	.tile-object .name i {
		font-size: 2em;
		margin-right: 8px;
		font-size: 2.5em !important;
		margin: 8px;
	}

	.dashboard-stat .tile-object .number {
		font-size: 14px;
		font-weight: 500;
		text-align: end;
		margin-left: 8px;
	}

	.name {
		margin: 5px;
	}

	.desc {
		font-size: 20px;
		text-align: left;
		display: flex;
		align-items: center;
	}

	.desc h6 {
		margin-left: 10px;
		font-size: 14px;
	}

	#sugestao_dashboard .tile-object {
		margin-top: 0 !important;
		display: flex;
		align-items: center;
		gap: 2px;
	}

	#conteudo_pagina_atual {
		align-items: center;
		justify-content: space-between;
		background-color: white;
		border-left: 4px solid #2969da;
		border-radius: 10px;
		box-shadow: 0 2px 6px rgba(0,0,0,0.05);
		padding: 30px 20px;
		width: 100%;
		margin-bottom: 5px;
	}

	#conteudo_pagina_atual h3 {
		margin: 0;
		font-size: 13px;
		font-weight: 700;
		color: #2c2c2c;
	}

	#conteudo_pagina_atual h3 span {
		display: block;
		font-weight: 600;
		color: #2c5282;
		font-size: 12px;
		text-transform: uppercase;
		margin-top: 10px;
	}

	#btn_resetar_pagina_inicial {
		font-size: 12px;
		font-weight: 500;
		padding: 6px 12px;
		border: 1px solid #f44336;
		border-radius: 30px !important;
		color: #f44336;
		background-color: rgba(244, 67, 54, 0.05);
		transition: all 0.2s ease-in-out;
		display: flex;
		align-items: center;
		gap: 6px;
		background-color: white;
	}

	#btn_resetar_pagina_inicial:hover {
		background-color: #f44336;
		color: #fff;
	}


</style>

<?php

 $novaVersao = getDesvOc("120827") == "T";
        $divSecundaria  = $novaVersao ? "more" : "tile-body";
        $divPrincipal  = $novaVersao ? "dashboard-stat -" : "tile double bg-";

        $cards = [

            [
                'id' => 'meus_atendimentos',
                'icone' => 'fa-user-circle',
                'titulo' => __('Meus atendimentos'),
                'descricao' => __('Página com o objetivo de organizar todos os chamados que você poderá realizar atendimentos'),
                'cor' => 'blue',
                'corNova' =>'var(--tema_cor-extra-1)',
                'tituloNovo' => __('Definir Página Inicial'),

                'perm' => "" ,
                'numero' => 'CRM',
            ],
            [
                'id' => 'portal_despesas',
                'icone' => 'fa-money',
                'titulo' => __('Portal de Despesas'),
                'descricao' => __('A página apresenta indicadores de suas despesas a serem aprovadas e reembolsadas'),
                'cor' => 'red',
                'corNova' =>'var(--tema_cor-extra-2)',
                'perm' => "",
                'numero' => __('Despesas'),
                'tituloNovo' => __('Definir Página Inicial'),

            ],
            [
                'id' => 'portal_gp',
                'icone' => 'fa-bar-chart',
                'titulo' => __('Gestão de Projeto'),
                'descricao' => __('Portal de Projeto que apresenta indicadores dos projetos em sua responsabilidade'),
                'cor' => 'green',
                'corNova' =>'var(--tema_cor-extra-3)',
                'tituloNovo' => __('Definir Página Inicial'),
                'perm' => "",
                'numero' => __('Projetos'),
            ],
            ['id' => 'meus_atendimentos',
                'icone' => 'fa-user-circle-o',
                'titulo' => __('Minhas Ocorrências'),
                'descricao' => __('Apresenta todas as ocorrências que poderá realizar atendimentos'),
                'cor' => 'green',
                'corNova' =>'#D46C12',
                'tituloNovo' => __('Definir Página Inicial'),

                'perm' => "" ,
                'numero' => __('Definir Página Inicial'),
            ],
            [
             'id' => 'ts_calendario',
        'icone' => 'fa-clock-o',
        'titulo' => __('Calendário'),
        'descricao' => __('Voltado para o profissional que realiza apontamentos de horas'),
        'cor' => 'purple',
                'corNova' =>'var(--tema_cor-extra-5)',
                'tituloNovo' => __('Definir Página Inicial'),

                'perm' => '',
               'numero' => __('Timesheet'),
    ],
    [
        'id' => 'Rel_Disponibilidade',
        'icone' => 'fa-newspaper-o',
        'titulo' => __('Disponibilidade'),
        'descricao' => __('Página que apresenta todas as alocações de recursos'),
        'cor' => 'green',
        'corNova' =>'var(--tema_cor-extra-4)',
        'tituloNovo' => __('Definir Página Inicial'),

        'perm' => '',
        'numero' => __('WorkForce'),
    ],
    [
        'id' => 'sugestao_dashboard',
        'icone' => 'fa-pie-chart',
        'titulo' => __('Dashboards'),
        'descricao' => __('Página customizada com indicadores de sua escolha'),
        'cor' => 'blue',
        'corNova' =>'var(--tema_cor-extra-1)',
        'tituloNovo' => __('Definir Página Inicial'),

        'perm' => '',
        'numero' => __('Dashboards'),
    ],
            [
                'id' => 'ocorrencias_atender_receptivo',
                'icone' => 'fa-phone',
                'titulo' => __('Atender Receptivo'),
                'descricao' => __('Página com comunicação direta ao discador para volume alto de atendimento telefonico'),
                'cor' => 'red',
                'corNova' =>'var(--tema_cor-extra-2)',
                'tituloNovo' => __('Definir Página Inicial'),
                'perm' => '',
                'numero' => __('Atender Receptivo'),
            ],

        ];

        foreach ($cards as $card) {
            $corStyle = $card['corNova'] != '' ? 'style="background-color: '.$card['corNova'].';"' : '';
            $sugestao_cor = $card['perm'] ? $card['cor'] : 'dark';
            $sugestao_bloqueio = $card['perm'] ? '' : 'menu-pag-inicial-inativo';

            if(!$novaVersao) {
                echo '
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sugestao-item">
        <div id="' . $card['id'] . '" class="'.$divPrincipal.$sugestao_cor.' '.$sugestao_bloqueio.' box-pagina" data-def="'.$card['id'].'">
            <div class="'.$divSecundaria.'">
                <i class="fa '.$card['icone'].' pull-right"></i>
                <h4 class="box-pagina-nome">'.$card['titulo'].'</h4>
                <p>'.$card['descricao'].'</p>
            </div>
            <div class="tile-object">
                <div class="name">'.__('Definir Página Inicial').'</div>
                <div class="number">'.$card['numero'].'</div>
            </div>
        </div>
    </div>';
            }else{
                echo '
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 sugestao-item">
        <div id="' . $card['id'] . '" class="'.$divPrincipal.' '.$sugestao_bloqueio.' box-pagina" data-def="'.$card['id'].'">
          <div class="'.$divSecundaria.'">
            <div class="desc" '.$corStyle.'>
                <h6 class="box-pagina-nome">'.$card['titulo'].'</h6>
            </div>
            <p>'.$card['descricao'].'</p>
          </div>
          <div class="tile-object">
            <div class="name" style="border: none">
              <i class="fa '.$card['icone'].' pull-right"></i>
            </div>
            <div class="number">'. $card['tituloNovo'].'</div>
          </div>
        </div>
     </div>';
            }
        }
        ?>
   