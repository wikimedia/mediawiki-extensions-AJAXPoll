RENAME TABLE /*_*/poll_info TO /*_*/ajaxpoll_info;
CREATE TABLE IF NOT EXISTS /*_*/ajaxpoll_info (
  `poll_id` varchar(32) NOT NULL PRIMARY KEY default '',
  `poll_txt` text,
  `poll_date` datetime default NULL
) /*$wgDBTableOptions*/;