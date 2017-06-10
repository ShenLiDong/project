<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller  {

    private $excel;

	  //初始化Excel
    public function __construct()
    {
      include_once('Classes/PHPExcel.php');
      $this->excel=new PHPExcel();
      $objWriter = new PHPExcel_Writer_Excel2007($this->excel);
//或者$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel); 非2007格式
      $objWriter->save("xxx.xlsx");


      $objWriter = new PHPExcel_Writer_Excel5($this->excel);
      $this->excel->getActiveSheet()->setCellValue('A1', 'String');
header("Pragma: public");
header("Expires: 0");
header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
header("Content-Type:application/force-download");
header("Content-Type:application/vnd.ms-execl");
header("Content-Type:application/octet-stream");
header("Content-Type:application/download");;
header('Content-Disposition:attachment;filename="resume.xls"');
header("Content-Transfer-Encoding:binary");
$objWriter->save('php://output');
    }

    //渲染表头
    public function renderHeader()
    {

    }

    //填充数据
   	public function exec()
   	{

   	}

   	//下载excel
   	public function download()
   	{
   		
   	}
}