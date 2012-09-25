<?php

class Question_Controller extends Base_Controller {

	public function action_index($id)
	{
		// get random question
		$question = Question::find($id);

		if ($question == null)
		{
			$view_opts['alerts'][] = '¡Por favor crea una pregunta para empezar!';
			return View::make('question.create', $view_opts);
		}

		// Calculate percentages
		$total = $question->count1 + $question->count2 + $question->count3;
		if ($total == 0)
		{
			$p[1] = 0;
			$p[2] = 0;
			$p[3] = 0;
		} else {
			$p[1] = ($question->count1 != 0) ? ($question->count1 / $total) * 100 : 0;
			$p[2] = ($question->count2 != 0) ? ($question->count2 / $total) * 100 : 0;
			$p[3] = ($question->count3 != 0) ? 100 - $p[1] - $p[2] : 0;
		}

		$view_opts['question'] = $question;
		$view_opts['percentages'] = $p;

		return View::make('question.question', $view_opts);
	}

	public function action_random()
	{
		// generate random numer
		$max = DB::table('questions')->max('id');
		$min = DB::table('questions')->min('id');
		$randomID = rand($min, $max);

		return Redirect::to('/question/' . $randomID);
	}

	public function action_create()
	{
		// code here..

		return View::make('question.create');
	}

	public function action_save()
	{
		$question = new Question;
		$question->question = Input::get('question');
		$question->answer1 = Input::get('answer1');
		$question->answer2 = Input::get('answer2');
		$question->answer3 = Input::get('answer3');
		$question->count1 = 0;
		$question->count2 = 0;
		$question->count3 = 0;

		$question->save();

		return Redirect::to('/question/' . $question->id);
	}

	public function action_answer($id, $answer)
	{
		// code here..
		$view_opts['id'] = $id;
		$view_opts['answer'] = $answer;

		$question = Question::find($id);
		switch($answer)
		{
			case 1:
				$question->count1 = $question->count1 + 1;
				break;
			case 2:
				$question->count2 = $question->count2 + 1;
				break;
			case 3:
				$question->count3 = $question->count3 + 1;
				break;
		}
		$question->save();

		return Redirect::to('/question/' . $id);
	}

}
