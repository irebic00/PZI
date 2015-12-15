<?php 
class TemplateProvider
{
	public static function getCardTemplate()
	{
		return self::_getFileContent("templates/card.html");
	}
	
	public static function getCommentTemplate()
	{
		return self::_getFileContent("templates/comment.html");
	}
	
	private static function _getFileContent($filePath)
	{
		$file = fopen($filePath, "r") or die("Unable to open file!");
		$fileContent = fread($file, filesize($filePath));
		fclose($file);
		
		return $fileContent;
	}
}