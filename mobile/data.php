<?php
require_once('pickup.php');
require_once('recomend.php');

$title = "MERY";
$titleText = "3COINSでみつけた♡スマートフォンライフを快適に送るためのアイテム特集";
$pickup ="ピックアップ";
$rank="ランキング";
$text = "女の子の<br />毎日を<br />かわいく。";
$mesage="「かわいい！」「欲しい！」が、どんどん見つかる。電車の中でもサクサク快適。毎日がオシャレになるアプリ。";
$follow = "\ Follow me /";
$page = "ページトップへ";
$probrem = "よくある質問";
$form = "お問い合わせ";
$rule = "利用規約";
$pri = "プライバシー";
$unei = "運営者情報";
$unko = "©️2017 MERY Co., Ltd.";
$sub = "無料会員登録";
$log = "ログイン";
$fassion = "ファッション";
$maik = "メイク・コスメ";
$hair = "ヘアスタイル";
$nail = "ネイル";
$beauty = "美容";
$life = "ライフスタイル";
$heart = "恋愛";
$gurume = "グルメ";
$travel = "旅行・お出かけ";

$article1 = new Pickup("./mobile/face.png", "天使のように、ハネを縫う系Girl?フェザーバングで叶える、ガーリー度１００％前髪", 8223, "yoyo");
$article2 = new Pickup("./mobile/face.png", "クローゼットにあると安心感が違う。イロチ持ちしたいユニクロニットを特集します", 1231, "すず");
$article3 = new Pickup("./mobile/face.png", "バスガールにビートルズ？寒さも吹き飛ぶ「今日は何の日」コーデ", 4223, "もこ");
$article4 = new Pickup("./mobile/face.png", "天使のように、ハネを縫う系Girl?フェザーバングで叶える、ガーリー度１００％前髪", 893, "yoyo");
$article5 = new Pickup("./mobile/face.png", "クローゼットにあると安心感が違う。イロチ持ちしたいユニクロニットを特集します", 89753, "すず");
$article6 = new Pickup("./mobile/face.png", "バスガールにビートルズ？寒さも吹き飛ぶ「今日は何の日」コーデ", 4223, "もこ");
$article7 = new Pickup("./mobile/face.png", "天使のように、ハネを縫う系Girl?フェザーバングで叶える、ガーリー度１００％前髪", 82, "yoyo");
$article8 = new Pickup("./mobile/face.png", "クローゼットにあると安心感が違う。イロチ持ちしたいユニクロニットを特集します", 1114, "すず");
$article9 = new Pickup("./mobile/face.png", "バスガールにビートルズ？寒さも吹き飛ぶ「今日は何の日」コーデ", 42101, "もこ");

$articles = array($article1, $article2, $article3, $article4, $article5, $article6, $article7, $article8, $article9);

$recomend1 = new Recomend("./mobile/reco.png", "「もっと早く買えば良かった涙」いい意味で後悔した声から見つけた神コスメって？", 39232, "ai");
$recomend2 = new Recomend("./mobile/reco.png", "お値段以上の満足感があるはず♡自分へのご褒美に欲しい、おすすめの美容家電５選", 56119, "リョング");
$recomend3 = new Recomend("./mobile/reco.png", "流行りに乗ってみたけど、買って失敗したかも？手持ちマットリップのお悩み解決講座", 17388, "リョング");
$recomend4 = new Recomend("./mobile/reco.png", "「もっと早く買えば良かった涙」いい意味で後悔した声から見つけた神コスメって？", 39232, "ai");
$recomend5 = new Recomend("./mobile/reco.png", "お値段以上の満足感があるはず♡自分へのご褒美に欲しい、おすすめの美容家電５選", 56119, "リョング");

$recomends = array($recomend1, $recomend2, $recomend3, $recomend4, $recomend5);


$rankings = $articles;

function cmp($a, $b) {
    return $a->getView() <=> $b->getView();
}

usort($rankings, 'cmp');
// 上記のやつは比較して、大きい順に並べてる

array_slice($rankings, 0, 5);
