<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Wikidata\Wikidata;

class PersonController extends Controller
{

    public $entity = null;
    public $wikidata = null; 

    public function __construct() {

        $this->wikidata = new Wikidata();
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();

        return Inertia::render('People/People', [
            'pages' => $pages,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(person $person)
    {
        return Inertia::render('People/Person');
    }

    public function getEntity($qid) {
        $this->entity = $this->wikidata->get($qid)->properties->toArray();
    }

    public function getStringProperty($key) {
        $stringProperty = $this->entity[$key]->values[0]->label ?? null;
        return $stringProperty;
    }

    public function getDateProperty($key) {
        $stringProperty = $this->getStringProperty($key);
        $dateProperty = date('Y-m-d', strtotime($stringProperty));
        return $dateProperty;
    }

    public function improve($qid) {

        $this->getEntity($qid);

        $person = Person::updateOrCreate(
            [ 'wikidata' => $qid ],
            [
                'status' => 3, // Set status to manual review.
                'honorificPrefix' => $this->getStringProperty("P511"),
                'givenName' => $this->getStringProperty("P735"),
                'additionalName' => $this->getStringProperty("P4970"),
                'familyName' => $this->getStringProperty("P734"),
                'honorificSuffix' => $this->getStringProperty("P1035"),
                'gender' => $this->getStringProperty("P21"),
                'wikidata' => $qid,
                'birthDate' => $this->getDateProperty("P569"),
                'birthPlace' => $this->getStringProperty("P19"),
                'deathDate' => $this->getDateProperty("P570"),
                'deathPlace' => $this->getStringProperty("20"),
            ]
        );
        echo $qid . "\n";
        return $person;
        
    }

    public function seed() {
        

        foreach ($qids as $qid) {
            ob_implicit_flush(true);
            echo "<br/>Processing $qid";
            ob_flush();
            $person = $this->improve($qid);
            echo " --> ".$person->fullName;
        }
        echo "<br/>Done";
    }

}
