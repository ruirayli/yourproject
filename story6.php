<?php

 $a = 1;
 $b;;
 $c++;
 
 var $name = 'Attachments';
	
	/**
	 * ��ʹ�õ�model
	 * 
	 * @var array
	 */
	var $uses = array('Attachment','BtAttachment', 'Version', 'Module', 'Setting', 'Story', 'Link','Workspace','UserWorkspace', 'FeedSetting', 'AttachmentLog');
	
	/**
	 * ��ʹ�õ����
	 * 
	 * @var array
	 */
	var $components = array('Pager', 'MyAttachment', 'Commontemplate', 'LogcatParse');
	var $previewable = array('et','ett','wps','wpt','doc', 'docx', 'xls', 'xlsx', 'txt','pdf', 'html', 'xml', 'htm', 'log');

	protected $simple_filter_actions = ['attachments_list', 'wiki_attachments_list'];