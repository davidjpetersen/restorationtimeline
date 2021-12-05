<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Http\Controllers\PersonController;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $PersonController = new PersonController();
        $qids = [
            "Q43374468",
            "Q3051180",
            "Q91157930",
            "Q2348210",
            "Q1395725",
            "Q5702756",
            "Q7148692",
            "Q7422060",
            "Q8072227",
            "Q47102",
            "Q6181938",
            "Q4979362",
            "Q2976186",
            "Q4424882",
            "Q4738229",
            "Q5292384",
            "Q8018530",
            "Q16030354",
            "Q4738229",
            "Q107315481",
            "Q5344778",
            "Q96572814",
            "Q4740383",
            "Q3048224",
            "Q6306601",
            "Q4719048",
            "Q5235307",
            "Q203559",
            "Q6778849",
            "Q727001",
            "Q982343",
            "Q7231650",
            "Q8000530",
            "Q5907303",
            "Q718919",
            "Q6684592",
            "Q3809129",
            "Q27682515",
            "Q1681690",
            "Q313574",
            "Q560707",
            "Q635520",
            "Q982197",
            "Q1392562",
            "Q1392629",
            "Q1175942",
            "Q1392595",
            "Q1392118",
            "Q1392523",
            "Q1386097",
            "Q945517",
            "Q553147",
            "Q333620",
            "Q3027523",
            "Q8014346",
            "Q16063950",
            "Q5216710",
            "Q1177157", // David Whitmer
            "Q7177696", // Peter Whitmer Sr.
            "Q107999917", // Christian Whitmer
            "Q5196041", // John Whitmer
            "Q6119456", // Jacob Whitmer
        ];

        foreach ($qids as $qid) {
            
            $PersonController->improve($qid);
            
        }

    }
}
