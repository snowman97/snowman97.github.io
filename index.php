<?php
	require "header.php";	
?>
	<div class="container bg-secondary">
	  <!-- Content here -->
		<div class="row mt-4">
			<div class="col-3 col-sm-3 col-md-3 p-0">
				<img src="font/surmaartem.jpeg" alt="Адаптивные изображения" class="col-12 col-sm-12 col-md-12 p-0"	style="border-radius: 5px;">
			</div>
			<div id="carouselExampleIndicators" class="carousel slide col p-0 bg-secondary text-white" data-ride="carousel">
			  <div class="carousel-inner screencenter">
			    <div class="carousel-item active">
			      <img src="font/php.jpeg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="font/html.jpeg" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>

		<div class="row my-4">
			<div class="jumbotron w-100 m-0">
			  <h1 class="display-4">Hello, world!</h1>
			  <p class="lead">Это простой пример блока с компонентом в стиле jumbotron для привлечения дополнительного внимания к содержанию или информации.</p>
			  <hr class="my-4">
			  <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>
			  <!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
				  Запустить модальное окно
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary">Save changes</button>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<div class="row mt-4">
			<div class="card col" style="width: 18rem;">
			  <img src="font/photo.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Название карточки</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			  </div>
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item">Cras justo odio</li>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			  <div class="card-body">
			    <a href="#" class="card-link">Card link</a>
			    <a href="#" class="card-link">Another link</a>
			  </div>
			</div>
			<div class="card col-7 ml-3" style="width: 18rem;">
			  <div class="card-body">
			    <h5 class="card-title">Название карточки</h5>
			    <h6 class="card-subtitle mb-2 text-muted">Подзаголовок карты</h6>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="card-link">Ссылка карты</a>
			    <a href="#" class="card-link">Другая ссылка</a>
			  </div>
			</div>
		</div>







	</div>
<?php
	require "footer.php";	
?>