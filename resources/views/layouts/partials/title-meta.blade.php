<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>

<!--=====FAB ICON=======-->
<?php if (isset($logo5)): ?>
<link rel="shortcut icon" href="{{ asset('assets/img/logo/logoicon.png') }}" type="image/x-icon">
<?php elseif (isset($logo3)): ?>
<link rel="shortcut icon" href="{{ asset('assets/img/logo/logoicon.png') }}" type="image/x-icon">
<?php else: ?>
<link rel="shortcut icon" href="{{ asset('assets/img/logo/logoicon.png') }}" type="image/x-icon">
<?php endif; ?>
