@layout('inc.layout')

@section('title')
Pregunta!
@endsection

@section('nav')
	@parent
@endsection

@section('content')
	<!-- Question -->
	<div class="container-fluid">
	  <div class="row-fluid">
	    <div class="span12">
	      <h1>{{ $question->question }}</h1>
	      <!-- progress bar -->
	      <div class="progress progress-striped active">
	        <div class="bar bar-danger" style="width: {{ $percentages[1] }}%;"></div>
	        <div class="bar bar-success" style="width: {{ $percentages[2] }}%;"></div>
	        <div class="bar bar-primary" style="width: {{ $percentages[3] }}%;"></div>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Answers -->
	<div class="container-fluid">
	  <div class="row-fluid">
	    <div class="span4">
	      <h1>{{ $question->answer1 }}</h1>
	      <h2>{{ $percentages[1] }}%</h2>
	      <a href="/question/answer/{{ $question->id }}/1" class="btn btn-large btn-block btn-danger">{{ $question->answer1 }}</a>
	    </div>
	    <div class="span4">
	      <h1>{{ $question->answer2 }}</h1>
	      <h2>{{ $percentages[2] }}%</h2>
	      <a href="/question/answer/{{ $question->id }}/2" class="btn btn-large btn-block btn-success">{{ $question->answer2 }}</a>
	    </div>
	    <div class="span4">
	      <h1>{{ $question->answer3 }}</h1>
	      <h2>{{ $percentages[3] }}%</h2>
	      <a href="/question/answer/{{ $question->id }}/3" class="btn btn-large btn-block btn-primary">{{ $question->answer3 }}</a>
	    </div>
	  </div>
	  <br />
	  <div class="row-fluid">
	  	<div class="span12">
	  		<a href="/question/random" class="btn btn-large btn-block btn-info">Contesta otra Pregunta</a>
	  	</div>
	  </div>
	</div>
@endsection