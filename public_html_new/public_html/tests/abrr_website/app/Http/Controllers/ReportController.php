<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report_list()
    {

        $reports =  temp_reports_data();

        return view('website.reports', compact('reports'));
    }
    public function single_report($report_url = 'wewe')
    {
        $report = Report::all()->first();
        $report_title =  temp_reports_data();
        $keyword = $report_title[$report_url] ?? [];


        if (!empty($report_title)) {
            $report_keyword = $keyword['report_keyword'];
            $report['h1_long_title'] = str_replace('[[report_keyword]]', $report_keyword, $report['h1_long_title']);
            $report['sort_description'] = str_replace('[[report_keyword]]', $report_keyword, $report['sort_description']);


            $imageTag = "<img src=" . url('/images/website/rd_graph.webp') . " alt='$report_keyword' title='$report_keyword'>";
            $report['description'] = preg_replace('/<\/ul>/', '</ul>' . $imageTag, $report['description'], 1);

            $imageTag = "<img src=" . url('/images/website/trends_by_region_img.png') . " alt='$report_keyword' title='$report_keyword'>";
            $report['description'] =  str_replace('[[report_keyword]]', $report_keyword, $report['description']);

            $report['description'] =  str_replace('<h2>Regional Insights</h2>', "<h2>Regional Insights</h2> $imageTag", $report['description']);

            // replace Market Market   to  Market 
            $report['description'] =  str_replace('Market Market', "Market", $report['description']);
        }

        // $data =   preg_replace('/<\/ul>/', '</ul>' . $imageTag, $report['description'], 1);

        if (empty($report) || empty($report_url)) {
            redirect('/');
        }
        return view('website.single_report', compact('report'));
    }

    public function report_buy($report_id)
    {
        $data=[];
        return view('website.buy_report',compact('data'));

    }   
    
    public function request_sample($report_id)
    {
        $data=[];
        return view('website.request_sample',compact('data'));

    }
}
