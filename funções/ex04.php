<?php
$hieraquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
           //Incio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor comercial',
				'subordinados'=>array(
			      //inicio Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)	
			      //Termino do gerente de vendas	
				)
			),

			//Termino o diretor Comercial

			 //Incio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
			      //inicio Gerente Financeiro
					array(
						'nome_cargo'=>'Gerented Finaceiro'
					)	
			      //Termino do gerente finnaceiro
				)
			),

			//Termino o diretor Financeiro

			 //Incio: Diretor TI
			array(
				'nome_cargo'=>'Diretor de TI',
				'subordinados'=>array(
			      //inicio Gerente de TI
					array(
						'nome_cargo'=>'Gerente de TI'
					)	
			      //Termino do gerente de TI	
				)
			),

			//Termino o diretor de TI

		)
	)


);

function exibe($cargos){
	$html ='<ul>';
	foreach ($cargos  as $cargo) {
		$html.='<li>';

		$html.=$cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ) {
			$html .= exibe($cargo['subordinados']);
		}

		$html.='</li>';


	}

	$html.='</ul>';
	return $html;
}

echo exibe($hieraquia);



?>