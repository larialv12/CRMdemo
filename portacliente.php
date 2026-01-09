<?php



$classeSelect =  getDesvOc('') == 'T' ? '' : 'selected';
                   $backhroundPesquisa = getDesvOc('120827') == 'T' ?'' : '#a19a9a';
                  $Backgroundportlet = getDesvOc('120827') == 'T' ? '' : 'purple';
                  $TituloCaixaPesquisa =  getDesvOc('120827') == 'T' ? '' : __('Consultar Ocorrencia');

                  $coresNovas = [
                      'var(--tema_cor-extra-1)',
                      'var(--tema_cor-extra-2)',
                      'var(--tema_cor-extra-3)',
                      'var(--tema_cor-extra-4)',
                      'var(--tema_cor-extra-5)',
                      'var(--tema_cor-extra-6)',
                      'var(--tema_cor-extra-7)',
                      'var(--tema_cor-extra-8)',
                      'var(--tema_cor-extra-9)',
                  ];

                  $caixinhas = [
                        ['id' => 'abertas',
                            'href' => '',
                            'icone' => ' fa fa-user',
                            'idDiv' => 'dtlBtn2',
                            'titulo' => __('Total de Abertas por você'),
                            'cor' =>  'bg-green',
                            'perm' =>  "" ,
                            'totalizador' => 'btn2'


                        ],


                         ['id' => 'pendentes',
                             'href' => '',
                             'icone' => 'fa fa-comments',
                             'idDiv' => 'dtlBtn1',
                             'titulo' => __('Em atendimento / Pendentes'),
                             'cor' => 'bg-red',
                             'perm' =>"",
                             'totalizador' => 'btn1'


                         ],

                        [ 'id' => 'agua_feedback',
                            'href' => '',
                            'idDiv' => 'dtlBtn3',
                            'icone' => ' fa fa-envelope',
                            'titulo' => __('Aguardando Feedback'),
                            'cor' => 'bg-yellow',
                            'totalizador' => 'btn3',

                            'perm' =>'' ,

                        ],
                        ['id' => 'solucion',
                            'href' => '',
                            'idDiv' => 'ajuda_solucoes',
                            'icone' => ' fa fa-question-circle',
                            'titulo' => __('Soluções'),
                            'cor' => 'bg-yellow',
                            'perm' => '' ,

                        ],

                        ['id' => 'consultar_oc',
                            'href' => '',
                            'idDiv' => 'ajuda_consultar_oc',
                            'icone' => ' fa fa-search',
                            'titulo' => __('Consultar Ocorrências'),
                            'cor' => 'bg-green',
                            'perm' =>'' ,


                        ],
                        ['id' => 'ger_relatorio',
                            'href' => '',
                            'idDiv' => 'relatorio_horas',
                            'icone' => 'fa fa-bar-chart-o',
                            'titulo' => __('Relatório de Horas'),
                            'cor' => 'bg-yellow',
                            'perm' =>'' ,

                        ],

                        ['id' => 'saldo_franquia',
                            'href' => '',
                              'idDiv' =>'btnSaldoFranquia',
                            'icone' => ' fa fa-clock-o',
                            'titulo' => __('Saldo da Franquia'),
                            'cor' => 'bg-red',
                            'perm' =>'' ,

                        ],

                        ['id' => 'aprova_horas',
                            'href' => '',
                            'idDiv' =>'aprova_horas',
                            'icone' => ' fa fa-check-circle-o',
                            'titulo' => __('Aprovar Horas'),
                            'cor' => 'bg-red',
                            'perm' =>'', 

                        ],
                        ['id' => 'encerradas',
                            'href' => '',
                            'idDiv' =>'dtlBtn5',
                            'icone' => ' fa fa-lock',
                            'titulo' => __('Encerradas'),
                            'cor' => 'bg-purple',
                            'perm' =>'',
                            'totalizador' => 'btn5'

                        ],
                        ['id' => 'dados_financeiros',
                            'href' => '',
                            'idDiv' =>'dtBtnPortalMega',
                            'titulo' => __('Dados Financeiros'),
                            'icone' => ' fa fa-money',
                            'cor' => 'bg-green',
                            'perm' =>'',
                            'totalizador' => 'BtnPortalMega'


                        ],
                        ['id' => 'rel_ocorrencias',
                            'href' => '',
                            'titulo' => __('Relatórios de Ocorrências'),
                            'idDiv' =>'btnRelatoriosOcorrenciasVisualizacao',
                            'icone' => ' fa fa-bar-chart',
                            'cor' => 'bg-green',
                            'perm' => '' ,

                        ],
                        ['id' => 'aguard_avaliacao',
                            'href' => '',
                            'titulo' => __('Aguardando avaliação'),
                            'icone' => ' fa fa-star',
                            'idDiv' =>'dtlBtn4',
                            'cor' => 'bg-blue',
                            'perm' =>'' ,
                            'totalizador' => 'btn4'


                        ],


                        ['id' => 'dash',
                            'href' => '',
                            'icone' => 'fa fa-pie-chart',
                            'idDiv' =>'dtBtnDash',
                            'titulo' => __('Dashboards'),
                            'cor' => 'bg-green',
                            'perm' => '',
                           'totalizador' => 'btnDash'

                        ],
                    ];

                    // --- lógica para que caso cliente possua poucas caixas  as cores avancem e nao fiquem repetidas ou parecidas demais ---
                    $coresCount = count($coresNovas);
                    $ultimoIndiceCor = -1;

                    $novaVersao = getDesvOc('') == "T";
                    $caixinhasHabilitadas = array_values(array_filter($caixinhas, function ($c) {
                        return $c['perm'] == "T";
                    }));
                    $totalCaixas = count($caixinhasHabilitadas);
                    $distribuCores = $totalCaixas <= 4 ? 2 : 1;

                    foreach ($caixinhasHabilitadas as $i => &$caixinhaH) {
                        $indiceCor = ($ultimoIndiceCor + $distribuCores) % $coresCount;
                        $caixinhaH['corNova'] = $coresNovas[$indiceCor];
                        $ultimoIndiceCor = $indiceCor;
                    }
                    unset($caixinhaH);


                    foreach ($caixinhas as $caixinha) {
                        foreach ($caixinhasHabilitadas as $h) {
                            if ($caixinha['id'] === $h['id']) {
                                $caixinha['corNova'] = $h['corNova'];
                            }
                        }

                  $permissao = $caixinha['perm'] == "T"  ;
                  $corCaixinha = getDesvOc('120827') == "T" ? $caixinha['corNova'] : $caixinha['cor'];
                  $caixaPesquisa = getDesvOc('120827') == "T"? "display:none" :"";
//                  $linkHref = getDesvOc('120827') == "T" ? $caixinha['href'] : "#";
               $classeCor = getDesvOc('120827') == "T" ? '' : $caixinha['cor'];

               if($permissao ) {

                   $linkHref = "";
                   if($caixinha['href']!= ""){
                       $linkHref = 'href=" '. $caixinha['href'].'"';
                   }

                    echo  '  
                             <a '.$linkHref.' class="linkhref tile hidden-md hidden-xs '.$classeCor.'" 
   style="background-color:'.$corCaixinha.'; '.$borda.';" 
   id="'.$caixinha['idDiv'].'">                              
                                <div class="tile-body">
                                    <i class="' . $caixinha['icone'] . '" ></i>
                                </div>
                                <div class="tile-object">
                                    <div class="name" >
                                    
                                    ' . $caixinha['titulo'] . '
                                    </div>
                                    <br>
                                     <div class="number" id="' . $caixinha['totalizador'] . '">
                                </div>
                                </div>
                            </a>
                            
                            <!------------------Versao Mobile ---------------------->
                            <a class="tile hidden-sm hidden-lg '.$classeCor.' " style="background-color:' .$corCaixinha  . ';  '.$borda.'   " id=" ' . $caixinha['idDiv'] .'_mobile " >
                              
                                <div class="tile-body">
                                    <i class="' . $caixinha['icone'] . '" ></i>
                                </div>
                                <div class="tile-object">
                                    <div class="name" >
                                    
                                    ' . $caixinha['titulo'] . '
                                    </div>
                                     <div class="number" id="' . $caixinha['totalizador'] .'_mobile">
                                </div>
                                </div>
                            </a>
                        ';
                }

          }

?>