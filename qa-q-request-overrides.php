<?php
include_once 'Pinyin.php';

function qa_q_request($questionid, $title)
{
	$title = Pinyin:getPinyin($title)
	return qa_q_request_base($questionid, $title);
}
