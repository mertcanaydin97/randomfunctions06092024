
  private function checktruefalse($ans, $uans, $bull, $gbull, $true, $false)
  {

    if ($ans == 'true' && $uans == 'true') {

      return $true;

    } else if ($uans == 'false' && $bull == $gbull) {
      return $false;
    } else if ($ans == 'false' && $uans == 'true' && $bull == $gbull) {
      return $false;
    }


  }
  private function gettrues($ans, $uans, $bull, $gbull, $true, $false)
  {

    if ($ans == 'true') {

      return $true;

    } else if ($uans == 'false' && $bull == $gbull) {
      return $false;
    }


  }
  private function checkwholequest($a1, $a2, $a3, $a4, $bull, $treturn = NULL)
  {

    if ($a1 == 'true' && $bull == 'A') {
      return 'rightans';
    } else if ($a2 == 'true' && $bull == 'B') {
      return 'rightans';
    } else if ($a3 == 'true' && $bull == 'C') {
      return 'rightans';
    } else if ($a4 == 'true' && $bull == 'D') {
      return 'rightans';
    } else {
      return 'falseans';
    }
  }
  private function gettrue($a1, $a2, $a3, $a4, $bull = 'A')
  {

    if ($a1 == 'true' && $bull == 'A') {
      return 'tans';
    } else if ($a2 == 'true' && $bull == 'A') {
      return 'tans';
    } else if ($a3 == 'true' && $bull == 'A') {
      return 'tans';
    } else if ($a4 == 'true' && $bull == 'A') {
      return 'tans';
    } else {

      return 'fans';
    }
  }

  private function gettrueanswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a)
  {
    if ($a1 == 'true') {
      return $a1a;
    } else if ($a2 == 'true') {
      return $a2a;
    } else if ($a3 == 'true') {
      return $a3a;
    } else if ($a4 == 'true') {
      return $a4a;
    } else {
      return '';
    }


  }
  private function getuseranswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a, $uabull)
  {
    if ($uabull == 'A') {
      return $a1a;
    } else if ($uabull == 'B') {
      return $a2a;
    } else if ($uabull == 'C') {
      return $a3a;
    } else if ($uabull == 'D') {
      return $a4a;
    } else {
      return '';
    }


  }
  private function gettrueq($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a, $bull, $point)
  {
    if ($a1 == 'true' && $bull == 'A') {
      return '<span>Doğru Cevap: <strong>"' . $this->gettrueanswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a) . '"</strong></span> <strong class="sep">|</strong> <span>Cevabınız: " <strong>' . $this->getuseranswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a, $bull) . ' " ' . '</strong></span> <strong class="sep">|</strong> <span>Puan: " <strong>' . $point . '</strong> "</span> ';
    } else if ($a2 == 'true' && $bull == 'B') {
      return '<span>Doğru Cevap: <strong>"' . $this->gettrueanswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a) . '"</strong></span> <strong class="sep">|</strong> <span>Cevabınız: " <strong>' . $this->getuseranswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a, $bull) . ' " ' . '</strong></span> <strong class="sep">|</strong> <span>Puan: " <strong>' . $point . '</strong> "</span> ';
    } else if ($a3 == 'true' && $bull == 'C') {
      return '<span>Doğru Cevap: <strong>"' . $this->gettrueanswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a) . '"</strong></span> <strong class="sep">|</strong> <span>Cevabınız: " <strong>' . $this->getuseranswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a, $bull) . ' " ' . '</strong></span> <strong class="sep">|</strong> <span>Puan: " <strong>' . $point . '</strong> "</span> ';
    } else if ($a4 == 'true' && $bull == 'D') {
      return '<span>Doğru Cevap: <strong>"' . $this->gettrueanswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a) . '"</strong></span> <strong class="sep">|</strong> <span>Cevabınız: " <strong>' . $this->getuseranswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a, $bull) . ' " ' . '</strong></span> <strong class="sep">|</strong> <span>Puan: " <strong>' . $point . '</strong> "</span> ';
    } else {

      return '<span>Doğru Cevap: "<strong>' . $this->gettrueanswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a) . '</strong>"</span> <strong class="sep">|</strong> <span>Cevabınız: " <strong>' . $this->getuseranswer($a1, $a1a, $a2, $a2a, $a3, $a3a, $a4, $a4a, $bull) . ' " ' . '</strong></span> <strong class="sep">|</strong> <span>Puan: " <strong>0</strong> "</span> ';
    }
  }
  private function showquizanswers($id, $userid)
  {

    $fair = Fair::with('quiz')->where('id', $id)->first();

    $quizans = \DB::table('new_quiz_answers')->where('user_id', $userid)->where('quiz_id', $fair->quiz->id)->first();

    $quizanswer = json_decode($quizans->answer_json, true);
    $data = '';
    if (isJson($fair->quiz->questions)) {

      foreach (json_decode($fair->quiz->questions) as $key => $item) {
        $data .= '


        <div class="row faq-item">

          <div class="col-12" style=" padding: 0 !important; ">
            <div class="faq-item-content ' . $this->checkwholequest($item->answer1true, $item->answer2true, $item->answer3true, $item->answer4true, $quizanswer['questans' . $key]) . '">
              <h3>' . $item->title . '<br><small style=" font-size: 16px; font-weight: normal; margin-top: 8px; ">' .
          $this->gettrueq(
            $item->answer1true,
            $item->answer1,
            $item->answer2true,
            $item->answer2,
            $item->answer3true,
            $item->answer3,
            $item->answer4true,
            $item->answer4,
            $quizanswer['questans' . $key],
            $item->point
          )

          . '</small></h3>
              <div class="form-check ' . $this->gettrue($item->answer1true, $item->answer2true, $item->answer3true, $item->answer4true) . ' ' . $this->checktruefalse($item->answer1true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'A', 'true', 'false') . ' ' . $this->gettrues($item->answer1true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'A', 'true', 'false') . '">
                <input class="form-check-input" disabled ' . $this->checktruefalse($item->answer1true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'A', 'checked', '') . ' ' . $this->gettrues($item->answer1true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'A', 'checked', '') . '   type="checkbox"  name="answer[' . $key . ']" value="A" id="answer1' . $key . '">
                <label class="form-check-label" for="answer1' . $key . '">
                  ' . $item->answer1 . '
                </label>
              </div>
              <div class="form-check ' . $this->gettrue($item->answer1true, $item->answer2true, $item->answer3true, $item->answer4true) . ' ' . $this->checktruefalse($item->answer2true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'B', 'true', 'false') . ' ' . $this->gettrues($item->answer2true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'B', 'true', 'false') . '">
                <input class="form-check-input" disabled ' . $this->checktruefalse($item->answer2true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'B', 'checked', '') . ' ' . $this->gettrues($item->answer2true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'B', 'checked', '') . '  type="checkbox"  name="answer[' . $key . ']" value="B" id="answer2' . $key . '">
                <label class="form-check-label" for="answer2' . $key . '">
                  ' . $item->answer2 . '
                </label>
              </div>
              <div class="form-check ' . $this->gettrue($item->answer1true, $item->answer2true, $item->answer3true, $item->answer4true) . ' ' . $this->checktruefalse($item->answer3true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'C', 'true', 'false') . ' ' . $this->gettrues($item->answer3true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'C', 'true', 'false') . '">
                <input class="form-check-input" disabled ' . $this->checktruefalse($item->answer3true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'B', 'checked', '') . ' ' . $this->gettrues($item->answer3true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'C', 'checked', '') . '   type="checkbox"  name="answer[' . $key . ']" value="C" id="answer3' . $key . '">
                <label class="form-check-label" for="answer3' . $key . '">
                  ' . $item->answer3 . '
                </label>
              </div>
              <div class="form-check ' . $this->gettrue($item->answer1true, $item->answer2true, $item->answer3true, $item->answer4true) . ' ' . $this->checktruefalse($item->answer4true, $quizanswer['quest' . $key], $quizanswer['quest' . $key], 'D', 'true', 'false') . ' ' . $this->gettrues($item->answer4true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'D', 'true', 'false') . '">
                <input class="form-check-input" disabled ' . $this->checktruefalse($item->answer4true, $quizanswer['quest' . $key], $quizanswer['quest' . $key], 'B', 'checked', '') . ' ' . $this->gettrues($item->answer4true, $quizanswer['quest' . $key], $quizanswer['questans' . $key], 'D', 'checked', '') . '   type="checkbox"  name="answer[' . $key . ']" value="D" id="answer4' . $key . '">
                <label class="form-check-label" for="answer4' . $key . '">
                  ' . $item->answer4 . '
                </label>
              </div>


            </div>
          </div>
        </div>';
      }
    }
    return $data;
  }
