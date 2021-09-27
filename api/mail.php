<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');

mailer("test", "evio_dochwimarket@naver.com", "evio_dochwimarket@naver.com", "subject", "content", 1);
alert($member['mb_nick'].'('.$member['mb_email'].')님께 테스트 메일을 발송하였습니다. 확인하여 주십시오.');