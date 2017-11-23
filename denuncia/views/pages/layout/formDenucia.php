<?php 
	require_once 'config/config.php';
	$conect=conectarBD();
 ?>
<div class="container">
	<div class="col-md-offset-2">
		<form action="controllers/bd/denuncia.php" method="post" class="form" enctype='multipart/form-data'>
			<section id="dadosVitima">
				<div class="form-group">
					
					<label for="nomeVitima">Nome da Vitima</label>
					<div>
						<input class="form-control" type="text" placeholder="Nome da Vitima" name="nomeVitima">
					</div>
				</div>
				<div class='form-group'>
					<label for='sexo' class=' col-form-label'>Sexo</label>
				    <div class='form-check form-check-inline '>
				        <label class='form-check-label'>
				            <input class='form-check-input' type='radio' name='sexo' value='m'> Masculino
				        </label>
				    </div>
					
				    <div class='form-check form-check-inline '>
				        <label class='form-check-label'>
				            <input class='form-check-input input' type='radio' name='sexo' value='f'> Femenino
				        </label>
				    </div>
			    </div>
		    </section>
			
			<section id="infoViolencia">
			    <div class='form-group'  id=''>
		            <label for='tipoViolencia' class=' col-form-label'>Tipo de Violação</label>
		            <div class=''>
		                <select class='form-control selecionar input' id='outraDif' name='tipoViolencia'>
		                  <option value='semInfo'	> Selecionar Dificiencia</option>
		                  <option value='Física'    > Vliolência Física     </option>
		                  <option value='Verbal'  	> Vliolência Verbal     </option>
		                  <option value='Sexual' 	> Vliolência Sexual		</option>
		                  <option value='Psicologica'>Vliolência psicologica</option>
		                </select>
		            </div>
			    </div>
				<div class="form-group">
				    <label for="comentario">Comentario</label>
				    <div>
				    	<textarea class="form-control" name="comentario" id="" cols="40" rows="5"></textarea>
					</div>
				    
		    	</div>
		    	<div class="form-group form-inline">
		    		<label for="contactoDenucia">Contacto</label>
		    		
			    
			    		<label for="email">Email</label>
			    	
			 
		    	</div>
		    	<div class="form-group">
		 
		    		<div class="">
		    			<label for="contactoDenucia">Contacto</label>
			    		<input class="form-control col-md-12" type="text" placeholder="Contacto para facilitar localização" name="telefone">
			    	</div>
			    	<div class="">
			    		<label for="email">Email</label>
			    		<input type="text" class="form-control col-md-12" type="text" placeholder="Email para acompanhamento" name="email">
			    	</div>
		    	</div>
		    </section>
		    <section id="teste">
		    	<div class="form-group">
		    		<label for="latitude">lat</label>
		    		<div>
		    			<input type="number" class="form-control" name="latitude">
		    		</div>
		    	</div>
		    	<div class="form-group">
		    		<label for="longitude">long</label>
		    		<div>
		    			<input type="number" class="form-control" name="longitude">
		    		</div>
		    	</div>
		    	<div class="form-group">
		    		<label for="latitude">Onde E'</label>
		    		<div>
		    			<input type="text" class="form-control" name="descricao">
		    		</div>
		    	</div>
		    	<div class='form-group'  id=''>
		            <label for='tipoViolencia' class=' col-form-label'>Tipo de Violação</label>
		            <div class=''>
		                <select class='form-control selecionar input' id='outraDif' name='tipoDenuciante'>
		                  <option value='vitima'	> Vitima	</option>
		                  <option value='denunciante'> Denuciante</option>
		                </select>
		            </div>
			    </div>
		    </section>
		    <div class="form-group">
		    	<button type="submit" class="form-control btn btn-primary">Enviar</button>
		    </div>
		</form>
	</div>
</div>

