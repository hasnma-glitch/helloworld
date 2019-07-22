<?php
				require_once "classes/nomeexemplo.class.php"; //dao

				//instancia o objeto da classe
				$dao = new DaoTabnome;
				
				//pega os dados 
				$dados = $dao->listar();

				//popula o select
				while($a=current($dados)) {
					echo "<option value=".$a['id_table'].">".$a['nomeexemplo']."</option>";
					next($dados);
				}
			?>