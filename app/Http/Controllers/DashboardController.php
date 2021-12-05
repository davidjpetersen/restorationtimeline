<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Page;
use App\Models\Carousel;
use Aws\Textract\TextractClient;

class DashboardController extends Controller
{

    protected $client;
    protected $blocks; 

    public function __construct() {

        $this->client = new TextractClient([
            'region' => 'us-east-1',
            'version' => '2018-06-27',
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ]
        ]);

        $blocks = [];
    }

    /**
     * Display the homepage dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        $carousels = Carousel::all();

        return Inertia::render('Dashboard/Dashboard', [
            'pages' => $pages,
            'carousels' => $carousels,
        ]);
    }

    public function analyze()
    {
        $result = $this->client->startDocumentTextDetection([
            'DocumentLocation' => [
                'S3Object' => [
                    'Bucket' => 'restorationanalysis',
                    'Name' => 'booth.pdf',
                ],
            ],
            'FeatureTypes' => ['<string>',],
            'OutputConfig' => [
                'S3Bucket' => 'restorationanalysisresults',
                'S3Prefix' => 'rto_booth_',
            ],
        ]);

        return $result;

    }

    public function print(Request $request)
    {
        $this->getBlockSet('028859ac7066120e410faedd9ad87f117bf97bbf1fee6239e3fa12920db08a45', false);
        return $this->blocks;
    }

    public function getBlockSet($jobID, $nextToken) {
        
        $options = [
            'JobId' => $jobID, 
            'MaxResults' => 1000,
        ];

        if ($nextToken) { 
            $options['NextToken'] = $nextToken; 
        }
        
        $results = $this->client->getDocumentTextDetection($options);
        $this->blocks[] = $results['Blocks'];

        if ($results['NextToken']) {
            $this->getBlockSet($jobID, $results['NextToken']);
        }
       
    }
}
