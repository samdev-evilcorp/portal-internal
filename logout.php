<?php
setcookie('e_corp_session', '', time() - 3600, '/');
header('Location: /');
