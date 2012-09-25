@layout('inc.layout')

@section('title')
Pregunta!
@endsection

@section('nav')
	@parent
@endsection

@section('content')
	<!-- Create-a-Question -->
	<div class="container-fluid">
	  <form action="/question/create" class="form-horizontal" method="POST">
	    <div class="control-group">
	      <label class="control-label" for="question">Pregunta</label>
	      <div class="controls">
	        <input type="text" id="question" name="question" placeholder="Pregunta">
	      </div>
	    </div>
	    <div class="control-group">
	      <label class="control-label" for="answer1">Respuesta #1</label>
	      <div class="controls">
	        <input type="text" id="answer1" name="answer1" placeholder="Respuesta #1">
	      </div>
	    </div>	
	    <div class="control-group">
	      <label class="control-label" for="answer2">Respuesta #2</label>
	      <div class="controls">
	        <input type="text" id="answer2" name="answer2" placeholder="Respuesta #2">
	      </div>
	    </div>
	    <div class="control-group">
	      <label class="control-label" for="answer3">Respuesta #3</label>
	      <div class="controls">
	        <input type="text" id="answer3" name="answer3" placeholder="Respuesta #3">
	      </div>
	    </div>   
	    <div class="control-group">
	        <div class="controls">	          
	          <button type="submit" class="btn">Crear</button>
	        </div>
	      </div> 
	  </form>
	</div>
@endsection