<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chapter-2</title>
</head>

<?php
$year1 = "1969年";
$year2 = "2020年";
$age = 25;
?>

<body>
	<div class="main">
			前回のオリンピックは
		<h1>
			<?php echo $year1; ?>
		</h1>
		です。
			今回のオリンピックは
		<h1>
			<?php echo $year2; ?>
		</h1>
		です。
	</div>
	<?php if ($age<=15):?>
		15歳以下の方は料金は500円です。</br>
	<?php elseif ($age<=19):?>
		16歳から19歳の方は料金は1000円です。</br>
	<?php else:?>
		20歳以上の方は料金は2000円です。</br>
	<?php endif;?>
</body>
</html>