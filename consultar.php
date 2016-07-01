<?php include"header.php"?>
	
	<div class="container">
	
		<div class="container-consultar">
		
			<div class="row">
			
				<div class="col-md-4">
				
					<div class="consultar text-center">
					
						<form class="form-consultar">
					
							<div class="form-group">
							
								<label class="text-left" for="CPF">CPF:</label> 
								<input class="input-consultar" type="tel" placeholder="Informe o CPF a ser consultado">
							
							</div>
							
							<div class="form-group">
							
								<label class="text-left" for="UF">Estado de títulos protestados</label> 
								<select class="select-consultar">
								
								<option>Selecione o estado que deseja consultar títulos protestados</option>
								<option>SP</option>
								<option>MG</option>
								<option>BA</option>
								
								</select> 
							
							</div>
							
							<img class="img-responsive" style="margin:0 0 20px 0;" src="../img/captcha.png" />
							
						 
							
							<button class="btn-green-lg">Realizar consulta</button>
						
						</form>
				
					</div>
			
				</div>
				
				<div class="col-md-8">
				
					<div class="box-title-consulta clearfix">
		
						<div class="title-consulta pull-left">Consulta CPF completa</div>
						
						<div class="valor-consultar pull-right">R$14,90</div>
					
					</div>
				
					<div class="text-con">Dados cadastrais do CPF consultado, pendências financeiras, cheques sem fundos, títulos protestados no estado, telefone e endereço</div>
				
				
				</div>
			
			</div>
		
		</div>
	
	</div>
	

	
   

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>

	$(document).ready(function() {
		$('.ico-menu').click(function() {
			
			$('.links-mobile').fadeIn();
			
		});

		$('.close-menu').click(function() {
			
			$('.links-mobile').fadeOut();
			
		});
		
	});
	
</script>
</body>
</html>