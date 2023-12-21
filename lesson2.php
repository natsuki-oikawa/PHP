<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
function funcWeek(){
    return array('日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日');
}
$w = funcWeek()[date("w")];
echo date("Y年m月d日　($w)") . "<br>";


// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
echo date('Y年m月d日　H時i分s秒',strtotime("+3 day")) . "<br>";


// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
echo date('Y年m月d日　H時i分s秒',strtotime("-12 hour")) . "<br>";


// ・2020年元旦から現在までの経過日数 (ddd日)
$day = new DateTime('2020-01-01');
$day2 = new DateTime('now');
$diff = $day->diff($day2);
echo $diff->days .'日';

?>