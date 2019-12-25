<?php
class Omikuji {
  public $name;
  public $state;
  public $explain;
  public $health;
  public $work;
  public $love;
  public $money;
  public $study;
  public $trip;

  public function __construct ($name, $state, $explain, $health, $work, $love, $money, $study, $trip) {
    $this->name = $name;
    $this->state = $state;
    $this->explain = $explain;
    $this->health = $health;
    $this->work = $work;
    $this->love = $love;
    $this->money = $money;
    $this->study = $study;
    $this->trip = $trip;
  }
}

$unsei[0] = new Omikuji('大吉','運勢のピークは今日！', 'やりたいことはやろう！でも明日からは気をつけて…', 'すこぶる元気！疲れを知らない一日だ！', '強気で勝負しよう！', '思い切って告白だ！', '今日は使ったほうが増えるかも？', '今日はできるとこまでやってしまおう。明日は気分が乗らないはず…', '一人でも数人でもどこでも行こう！');
$unsei[1] = new Omikuji('中吉', '今日は良い日になりそう。', '良い一日だ。気持ち良く過ごせそう。', '体調が良い、運動も◯', '上司に褒められるかも？', '好きな子と良い感じに…？', '思わぬ収入があるかも。', '今までわからなかった問題が解けるように！', '今日行くところは良いところ。');
$unsei[2] = new Omikuji('吉', '普通の一日だ。', 'いつも通り過ごしましょう。', '普通に過ごしてれば、問題なし。', 'いつも通り仕事しよう。', '好きなこともいつも通り', '買いたいものは買いましょう', '普通に勉強しよう。サボらないでね。', 'プランはそのままで。');
$unsei[3] = new Omikuji('小吉','今日は微妙かも。', 'なるべく大人しく過ごそう。' , '体調を崩しかねないので、無理しないで！', 'ミスの確かめ重要。', '喧嘩する可能性あり。', '今は貯めておくのが◯', '捗らない。とにかく努力！', 'ゆるーく楽しもう。');
$unsei[4] = new Omikuji('凶', '史上最悪の一日。', 'ラッキーと思って一日ゴロゴロしてよう。', 'もうすでに体調悪い。', '今日は会社を休みましょう。絶対にミスをします。','絶対に連絡を取らない！', '最低限にしよう、食事のみ。', '今日はしなくてOK！', 'キャンセルした方が良いかも…');

?>
