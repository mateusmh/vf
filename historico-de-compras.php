<?php include"header.php"?>
	
	<div class="container">
	
		<div class="container-consultar">
		
			<div class="title-pages">Historico de compras</div>
		 
			<table class="table table-bordered table-striped" style="background:#FFF">
			  <thead>
				<tr>
				  <th>#</th>
				  <th>Forma de pagamento</th>
				  <th>Data</th>
				  <th>Valor</th>
				  <th>Status</th>
				</tr>
			  </thead>
			  
			  <tbody>
				<tr>
				  <th scope="row">6542</th>
				  <td>Mercado Pago</td>
				  <td>27/08/2015</td>
				  <td>R$16,00</td>
				  <td>Aguardando</td>
				</tr>				
				<tr>
				  <th scope="row">9878</th>
				  <td>Boleto</td>
				  <td>02/08/2015</td>
				  <td>R$16,00</td>
				  <td>Aguardando</td>
				</tr>
				<tr class="success">
				  <th scope="row">4124</th>
				  <td>Mercado Pago</td>
				  <td>27/08/2015</td>
				  <td>R$16,00</td>
				  <td>Aprovado</td>
				</tr>				
				<tr>
				  <th scope="row">3441</th>
				  <td>Boleto</td>
				  <td>02/08/2015</td>
				  <td>R$16,00</td>
				  <td>Aguardando</td>
				</tr>
				<tr>
				  <th scope="row">6542</th>
				  <td>Mercado Pago</td>
				  <td>27/08/2015</td>
				  <td>R$16,00</td>
				  <td>Aguardando</td>
				</tr>				
				<tr class="success">
				  <th scope="row">9878</th>
				  <td>Boleto</td>
				  <td>02/08/2015</td>
				  <td>R$16,00</td>
				  <td>Aguardando</td>
				</tr>
				<tr>
				  <th scope="row">4124</th>
				  <td>Mercado Pago</td>
				  <td>27/08/2015</td>
				  <td>R$16,00</td>
				  <td>Aprovado</td>
				</tr>				
				<tr>
				  <th scope="row">3441</th>
				  <td>Boleto</td>
				  <td>02/08/2015</td>
				  <td>R$16,00</td>
				  <td>Aguardando</td>
				</tr>				
		
			  </tbody> 
			  
			  
			</table>
			
			<ul class="pagination pagination-sm">
				<li class="disabled"><a href="#">&laquo;</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
			  
		
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